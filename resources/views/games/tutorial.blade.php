@extends('layouts.games')
@section('title', 'tutorial')
@section('content_inner')
    <script src="https://cdn.jsdelivr.net/npm/phaser@3.15.1/dist/phaser-arcade-physics.min.js"></script>
    <section class="section center-text" id="game">
        <div class="content">
            <div>
                <div class="center-text">
                    <h1>tutorial</h1>
                </div>
                <div>
                    <div id="tutorial"></div>
                </div>
                <div class="center-text">
                    <p><i>(does not work on displays less then 800px wide)</i></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="description">
        <div class="content">
            <div>
                <div class="center-text">
                    <h2 class="big">description</h2>
                </div>
                <p>
                    the game is built using <a class="link" href="https://phaser.io/">phaser</a>
                    <br>
                    this level is made using the tutorial provided on the phaser "get started" pages
                    (<a class="link" href="https://phaser.io/tutorials/making-your-first-phaser-3-game/part1/"><i>link</i></a>)
                    <br>
                    first level designed and uploaded to this website, with some modifications to make it more unique
                    <br>
                    used to learn the basics of phaser and game development
                </p>
                <h3>specifications</h3>
                <p>
                    - phaser
                    <br>
                    - jquery
                    <br>
                    - creativity
                </p>
                <hr>
                <p>
                    my high score is 460, can you beat it?
                    <br>
                    send me an email with a screenshot of your high
                    score and i will give you something special
                </p>
            </div>
        </div>
    </section>

    <section class="section" id="info">
        <div class="content">
            <div>
                <div class="center-text">
                    <h2 class="big">liked it?</h2>
                </div>
                <div class="center-text">
                    <p>check out the other games i have developed</p>
                    <a class="link" href="{{ route('games') }}">moar gamiz</a>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Variables
    $assets = 'img/games/tutorial'
    ?>

    <script>
        var config = {
            type: Phaser.AUTO,
            width: 800,
            height: 600,
            physics: {
                default: 'arcade',
                arcade: {
                    gravity: { y: 900 },
                    debug: false
                }
            },
            scene: {
                preload: preload,
                create: create,
                update: update
            },
            parent: 'tutorial',
        };

        var game = new Phaser.Game(config);

        function preload ()
        {
            this.load.image('sky', "{{ asset($assets) . '/sky.png' }}");
            this.load.image('platform', "{{ asset($assets) . '/platform.png' }}");
            this.load.image('star', "{{ asset($assets) . '/star.png' }}");
            this.load.image('bomb', "{{ asset($assets) . '/bomb.png' }}");
            this.load.spritesheet('dude',
                "{{ asset($assets) . '/dude.png' }}",
                { frameWidth: 32, frameHeight: 48 }
            );
        }

        var score = 0;
        var scoreText;


        function create ()
        {
            this.add.image(400, 300, 'sky');

            platforms = this.physics.add.staticGroup();
            platforms.create(400, 568, 'platform').setScale(2).refreshBody();

            platforms.create(600, 400, 'platform');
            platforms.create(50, 250, 'platform');
            platforms.create(750, 220, 'platform');

            player = this.physics.add.sprite(100, 450, 'dude');

            player.setBounce(0.2);
            player.setCollideWorldBounds(true);

            this.anims.create({
                key: 'left',
                frames: this.anims.generateFrameNumbers('dude', { start: 0, end: 3 }),
                frameRate: 10,
                repeat: -1
            });

            this.anims.create({
                key: 'turn',
                frames: [ { key: 'dude', frame: 4 } ],
                frameRate: 20
            });

            this.anims.create({
                key: 'right',
                frames: this.anims.generateFrameNumbers('dude', { start: 5, end: 8 }),
                frameRate: 10,
                repeat: -1
            });


            stars = this.physics.add.group({
                key: 'star',
                repeat: 9,
                setXY: {
                    x: Phaser.Math.Between(20, 40),
                    y: 0,
                    stepX: Phaser.Math.Between(60, 80)
                }
            });

            bombs = this.physics.add.group();

            stars.children.iterate(function (child) {
                child.setBounceY(Phaser.Math.FloatBetween(0.4, 0.8));
            });

            // Sets physics
            this.physics.add.collider(player, platforms);
            this.physics.add.collider(stars, platforms);
            this.physics.add.overlap(player, stars, collectStar, null, this);
            this.physics.add.collider(bombs, platforms);
            this.physics.add.collider(player, bombs, hitBomb, null, this);

            // Texts
            scoreText = this.add.text(16, 16, 'Score: 0', { fontSize: '32px', fill: '#FFF' })
        }

        function update ()
        {
            cursors = this.input.keyboard.createCursorKeys();

            if (cursors.left.isDown)
            {
                player.setVelocityX(-200);
                player.anims.play('left', true);
            }
            else if (cursors.right.isDown)
            {
                player.setVelocityX(200);
                player.anims.play('right', true);
            }
            else
            {
                player.setVelocityX(0);
                player.anims.play('turn');
            }

            if (cursors.up.isDown && player.body.touching.down || cursors.space.isDown && player.body.touching.down)
            {
                player.setVelocityY(-610);
            }
        }

        function collectStar (player, star)
        {
            star.disableBody(true, true);

            score += 10;
            scoreText.setText('Score: ' + score);

            if (stars.countActive(true) === 0)
            {
                stars.children.iterate(function (child) {
                    child.enableBody(true, child.x, 0, true, true);
                });

                var x = (player.x < 400) ? Phaser.Math.Between(400, 800) : Phaser.Math.Between(0, 400);

                var i;
                var bombs = score/100;
                for (i = 0; i < bombs; i++) {
                    createBomb(x);
                }
            }
        }

        function hitBomb (player, bomb)
        {
            this.physics.pause();

            player.setTint(0xff0000);
            player.anims.play('turn');

            gameOverText = this.add.text(200, 270, 'Game over', { fontSize: '64px', fill: '#FFF' })
            gameOver = true;
        }

        function createBomb (x)
        {
            var bomb = bombs.create(x, 16, 'bomb');
            bomb.setBounce(1);
            bomb.setCollideWorldBounds(true);
            bomb.setVelocity(Phaser.Math.Between(-200, 200), 20);
        }
    </script>

@endsection
