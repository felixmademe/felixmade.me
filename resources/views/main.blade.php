@extends( 'layouts.main' )
@section( 'title', config( 'app.slogan' ) )

@section( 'content' )
    <section class="section" id="start">
        <div class="content">
            <div class="">

            </div>
            <img class="img" src="{{ asset( 'img/logo-small-dark.svg' ) }}" alt="{{ config( 'app.name' ) }} logo">
            <div class="header">
                <h1 class="big">hello</h1>
                <h2 class="small">felix wetell here :)</h2>
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="content">
            <div class="block">
                <h2 class="big">this is me</h2>
                <p class="text">
                    hello, my name is felix wetell and i am a developer
                    <br>
                    i like creating creative web solutions and push my abilities as a developer
                </p>
                <hr>
                <div>
                    <h4>my skills</h4>
                    <ul class="list">
                        <li class="item">
                            <p>web development</p>
                            <small><i>(learning)</i></small>
                        </li>
                        <li class="item">
                            <p>socialising</p>
                            <small><i>(expanding)</i></small>
                        </li>
                        <li class="item">
                            <p>project management</p>
                            <small><i>(improving)</i></small>
                        </li>
                        <li class="item special">
                            <p>dancing</p>
                            <small><i>(don't even ask)</i></small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="projects">
        <div class="content">
            <div class="block">
                <h2 class="big center-text">recent projects</h2>
                <div class="showcase" id="showcase">
                    <a href="https://lindacarlstad.se" class="project"><img src="{{ asset('img/projects/lindacarlstad.png') }}" alt="Linda Carlstad"></a>
                    <a href="https://tentahub.lindacarlstad.se" class="project"><img src="{{ asset('img/projects/adminlindacarlstad.png') }}" alt="Tentahub Linda Carlstad"></a>
                    <a href="https://wetell.se" class="project"><img src="{{ asset('img/projects/wetell.png') }}" alt="Wetell"></a>
                    <a href="https://blog.wetell.se" class="project"><img src="{{ asset('img/projects/blogwetell.png') }}" alt="BLog Wetell"></a>
                    <a href="https://caland.se" class="project"><img src="{{ asset('img/projects/caland.png') }}" alt="Caland"></a>
                    <a href="https://acidfinance.com" class="project"><img src="{{ asset('img/projects/acidfinance.png') }}" alt="Acid Finance"></a>
                    <a href="https://kakelverktyg.com" class="project"><img src="{{ asset('img/projects/kakelplattan.png') }}" alt="Kakelplattan / Kakelverktug / Flytspackel"></a>
                    <a href="https://fancythegame.com" class="project"><img src="{{ asset('img/projects/fancythegame.png') }}" alt="Kakelplattan / Kakelverktug / Flytspackel"></a>
                </div>
                <div class="center-text">
                    <a class="link colour" href="https://github.com/felixwetell">see more here</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="content">
            <div class="block">
                <h3 class="big">message me</h3>
                <div id="alert">
                    <p>thank you for the message</p>
                </div>
                <form>
                    @csrf
                    <input type="hidden" id="recaptcha" name="recaptcha" value="{{ env( 'GOOGLE_RECAPTCHA_KEY' ) }}">

                    <div class="organ">
                        <label class="hidden" for="name">tell me your name</label>
                        <input type="text" class="input" name="name" id="name" placeholder="tell me your name" required>
                    </div>
                    <div class="organ">
                        <label class="hidden" for="email">where can i contact you?</label>
                        <input type="email" class="input" name="email" id="email" placeholder="your email, so we can keep in touch" required>
                    </div>
                    <div class="organ">
                        <label class="hidden" for="text">what do you want to tell me?</label>
                        <textarea class="textarea" rows="3" name="text" id="text" placeholder="what do you want to tell me?" required></textarea>
                    </div>
                    <label class="group" for="policy">i have read and accept the
                        <a class="link colour" href="{{ route( 'policy' ) }}" target="_blank">
                            privacy policy
                        </a>
                        <input type="checkbox" name="policy" id="policy" required>
                        <span class="checkmark">
                        </span>
                    </label>
                    <button type="submit" class="submit" id="submit">message me</button>
                </form>
            </div>
        </div>
    </section>

    <section class="section" id="information">
        <div class="content">
            <div class="block">
                <h3 class="big">find me here</h3>
                <a class="link" href="https://github.com/felixwetell">github</a>
                - <a class="link" href="https://www.linkedin.com/in/felix-wetell/">linkedin</a>
                - <a class="link" href="https://twitter.com/felixwetell">twitter</a>
            </div>
        </div>
    </section>
@endsection

