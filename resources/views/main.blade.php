@extends( 'layout' )
@section( 'content' )

    <div class="" id="fullpage">
        <div class="section active hero">
            <div class="container">
                <div class="row">
                    <div id="particles-js"></div>
                    <div class="col-sm-2 mx-auto">
                        <img src="{{ asset( '/img/Logo.png' ) }}" alt="felix made me logo">
                        <h1>
                            felix
                            <br>
                            made
                        </h1>
                        <p>
                            <span id="changing-text" class="green">me, this, one, what, who</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="section intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 float-left">
                        <h2 class="text-left">
                            fullstack
                            <br>
                            <span class="green shake">developer</span>
                        </h2>
                    </div>
                    <br><br>
                    <div class="col-lg-6 offset-lg-6">
                        <h2 class="text-right">
                            web
                            <br>
                            <span class="purple">designer</span>
                        </h2>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <p class="text-center big">
                            hi, my name is <span class="green">felix wetell</span> and i am a fullstack developer and also a web designer
                            <br>
                            i like to create solutions for <span class="purple">people</span> that makes the everyday life easier and more fun
                            <br>
                            my designs strive for a minimalistic look, as they say, "less is more"
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section about">
            <div class="container">
                <div class="d-lg-flex flex-row">
                    <div class="col-lg-6  d-lg-flex align-self-center">
                        <h2>
                            felix
                            <br>
                            <span>wetell</span>
                        </h2>
                    </div>
                    <div class="col-lg-6 float-right d-lg-flex align-self-center">
                        <p class="">
                            based in <span class="grey">karlstad, sweden</span> where I am currently studying <span>web development</span>
                            with focus on <span class="grey">web design</span>, <span class="grey">UX</span> and <span class="grey">user interactivity</span>
                            <br>
                            in my spare time i like to modify cars, race bikes and
                            hit trails in the local woods with friends
                        </p>
                    </div>
                </div>
                <br><br>
                <div class="row text-center">
                    <div class="col-lg-6 offset-lg-3">
                        <canvas id="skillsChart"></canvas>

                    </div>
                </div>
            </div>
        </div>
        <div class="section jobs">
            <div class="container">
                <div class="swiper-container swiper-jobs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="d-lg-flex flex-row align-content-stretch">
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <div>
                                        <a href="https://acidfinance.com">
                                            <p class="job-title">acid finance</p>
                                        </a>
                                        <p>
                                            personal project that later was taken over by the company
                                            to keep up the development,
                                            acid finance helps you by visualising your incomes and expenses,
                                            cut down unnecessary costs and save money
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <a href="https://acidfinance.com">
                                        <img class="swiper-img" data-src="{{ asset( '/img/acidfinance.png' ) }}" alt="Acid Finance website">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-lg-flex flex-row flex-lg-row-reverse align-content-stretch">
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <div>
                                        <a href="https://fancythegame.com">
                                            <p class="job-title">fancy the game</p>
                                        </a>
                                        <p>
                                            school project that i kept developing and made it for
                                            my own use, with a minimalistic design, one-click ui and
                                            with a simple question game to get the user involved
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <a href="https://fancythegame.com">
                                        <img class="swiper-img" data-src="{{ asset( '/img/fancythegame.png' ) }}" alt="Fancy The Game website">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="d-lg-flex flex-row align-content-stretch">
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <div>
                                        <a href="https://new.lindacarlstad.se">
                                            <p class="job-title">linda carlstad</p>
                                        </a>
                                        <p>
                                            refreshed website for the university organisation linda carlstad
                                            built in php using the framework laravel along with other
                                            fellow students
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <a href="https://new.lindacarlstad.se">
                                        <img class="swiper-img" data-src="{{ asset( '/img/lindacarlstad.png' ) }}" alt="Linda Carlstad new website">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="d-lg-flex flex-row flex-lg-row-reverse align-content-stretch">
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <div>
                                        <a href="https://larardagenkau.se">
                                            <p class="job-title">lärardagen kau</p>
                                        </a>
                                        <p>
                                            website for an event for teacher students on
                                            karlstad university, built with wordpress in the
                                            highlight theme (later changed by client, not my design anymore)
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <a href="https://larardagenkau.se">
                                        <img class="swiper-img" data-src="{{ asset( '/img/larardagenkau.png' ) }}" alt="lärardagen kau website">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-lg-flex flex-row align-content-stretch">
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <div>
                                        <a href="https://felixwetell.azurewebsites.net">
                                            <p class="job-title">felix wetell portfolio</p>
                                        </a>
                                        <p>
                                            first portfolio i made when studying to become a "gymnasieingenjör"
                                            and fullstack-developer, built with C# .NET as back-end support
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-lg-flex align-items-center">
                                    <a href="https://felixwetell.azurewebsites.net">
                                        <img class="swiper-img" data-src="{{ asset( '/img/felixwetell.png' ) }}" alt="Felix Wetell old portfolio">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <div class="section contact">
            <div class="container">
                <div class="d-lg-flex flex-row-reverse">
                    <div class="col-lg-6 float-right d-lg-flex align-self-center justify-content-lg-end">
                        <h3 class="text-lg-right">
                            contact
                            <br>
                            <span>me</span>
                        </h3>
                    </div>
                    <div class="col-lg-6 float-left pt-0 pt-lg-4">
                        <div id="alert" class="py-2">
                            <p></p>
                        </div>
                        <form>
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="name..." required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email..." required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="text" placeholder="message..." required></textarea>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" name="policy" required class="form-check-input">
                                <label class="form-check-label white">i have read and accept the
                                    <a class="grey" href="{{ route( 'policy' ) }}" target="_blank">
                                        privacy policy
                                    </a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-purple" id="submit">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section footer">
            <div class="copyright">
                <p class="text-center">
                    copyright © {{ date( 'Y' ) }} felix made me
                </p>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="https://twitter.com/felixwetell">
                        <img class="img-fluid" data-src="{{ asset( '/img/twitter.svg' ) }}" alt="White inverted Twitter logo">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://github.com/felixwetell">
                        <img class="img-fluid" data-src="{{ asset( '/img/github.svg' ) }}" alt="White GitHub logo">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.linkedin.com/in/felix-wetell/">
                        <img class="img-fluid" data-src="{{ asset( '/img/linkedin.svg' ) }}" alt="White LinkedIn logo">
                    </a>
                </div>
            </div>
            <br>
            <div class="text-center">
                <a href="/secret" class="secret-link">Secret</a>
            </div>
        </div>
    </div>

@endsection
