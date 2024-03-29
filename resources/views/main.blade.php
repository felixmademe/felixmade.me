@extends( 'layouts.main' )
@section( 'title', config( 'app.slogan' ) )

@section( 'content' )
    <section class="section" id="start">
        <div class="content">
            <img class="img" src="{{ asset( 'img/logo-small-dark.svg' ) }}" alt="{{ config( 'app.name' ) }} logo">
            <div class="header">
                <h1 class="big">hello</h1>
                <h2 class="small">i am felix wetell</h2>
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="content">
            <div class="block">
                <h3 class="big">this is me</h3>
                <p class="text">
                    hello, my name is felix wetell and i am a developer
                    <br>
                    i like creating creative web solutions and push my abilities as a developer
                </p>
                <hr>
                <div>
                    <h3>my skills</h3>
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
                            <small><i>(do not ask)</i></small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="projects">
        <div class="content">
            <div class="">
                <div class="center-text">
                    <h3 class="big">recent projects</h3>
                    <p>(scroll for more)</p>
                </div>
                <div class="showcase" id="showcase">
                    @include('partials.components.project', [$link = 'caland.se', $name = 'Caland', $img = 'caland'])
                    @include('partials.components.project', [$link = 'lindacarlstad.se', $name = 'Linda Carlstad', $img = 'lindacarlstad'])
                    @include('partials.components.project', [$link = 'tentahub.lindacarlstad.se', $name = 'Tentahub Linda Carlstad', $img = 'tentahublindacarlstad'])
                    @include('partials.components.project', [$link = 'admin.lindacarlstad.se', $name = 'Admin Linda Carlstad', $img = 'adminlindacarlstad'])
                    @include('partials.components.project', [$link = 'blog.wetell.se', $name = 'Blog Wetell', $img = 'blogwetell'])
                    @include('partials.components.project', [$link = 'kakelverktyg.com', $name = 'Kakelplattan / Kakelverktug / Flytspackel', $img = 'kakelplattan'])
                    @include('partials.components.project', [$link = 'github.com/felixmademe/acidfinance.com', $name = 'Acid Finance', $img = 'acidfinance'])
                    @include('partials.components.project', [$link = 'github.com/felixmademe/fancythegame.com', $name = 'Fancy The Game', $img = 'fancythegame'])
                    <!-- @include('partials.components.project', [$link = 'github.com/felixmademe/wetell.se', $name = 'Wetell', $img = 'wetell']) -->
                </div>
                <div class="center-text">
                    <a class="link colour" href="https://github.com/felixwetell">see more here</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="bio">
        <div class="content">
            <div class="block">
                <h3 class="big center-text">my story</h3>
                <p class="text">
                    my first experience with coding was a long time back, i do not really remember actually
                    <br>
                    during high school the interest in web development was born, then
                    i started to create projects in my spare time
                    <br>
                    i kept this passion for development to my time studying when at university,
                    <a class="link underline" href="https://kau.se">karlstad university</a>
                </p>
                <p class="text">
                    first big project was with the student association <a class="link underline" href="https://lindacarlstad.se">linda carlstad</a>
                    and rebuilt the website with some friends in the same association
                    <br>
                    that project got out of control and i built a cms for that website,
                    <a class="link underline" href="https://github.com/Linda-Carlstad/admin.lindacarlstad.se">admin linda carlstad</a> which can be found on
                    <a class="link underline" href="https://github.com">github</a>
                    <br>
                    i built a couple of <a class="link underline" href="https://wordpress.com">wordpress</a> websites for different associations for free during the same time
                    <br>
                    the biggest project with <a class="link underline" href="https://lindacarlstad.se">linda carlstad</a> was a website
                    called <a class="link underline" href="https://tentahub.lindacarlstad.se">tentahub</a> (<a class="link underline" href="https://github.com/Linda-Carlstad/tentahub.se">github</a>),
                    a website where students upload old exams for other students to download and use as study help
                </p>
                <p class="text">
                    <a class="link underline" href="{{ config('app.url') }}">felix made me</a> is my company i created back in january of 2019, also during university
                    <br>
                    customers include <a class="link underline" href="https://caland.se">caland</a>,
                    <a class="link underline" href="https://flytspackel.com">kakelplattan</a> and more
                    <br>
                    i always strive for better solutions and i hope you want to, develop for the future and make useful solutions
                </p>
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
                <form id="contactForm">
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
                - <a class="link" href="https://github.com/felixwetell">github</a>
                - <a class="link" href="https://blog.wetell.se">blog</a>
                - <a class="link" href="https://www.linkedin.com/in/felix-wetell/">linkedin</a>
                - <a class="link" href="{{ route('support') }}">support me</a>
                - <a class="link colour" href="{{ route('secret') }}">secret</a>
            </div>
        </div>
    </section>
@endsection