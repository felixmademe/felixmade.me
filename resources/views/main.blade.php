@extends('layout')

@section( 'content' )

    <div class="" id="fullpage">
        <div class="section active hero">
            <div class="container">
                <div class="row">
                    <div id="particles-js"></div>
                    <div class="col-12">
                        <div class="col col-sm-2 mx-auto">
                            <img src="{{ asset( '/img/Logo.png' ) }}" alt="Felix Wetell logo">
                            <h1>
                                felix
                            </h1>
                            <h1>
                                made
                            </h1>
                            <h1>
                                <span id="changing-text" class="green">me, this, one, what, who</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="section intro">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 col-lg-6 float-left">
                            <h2 class="text-left">
                                fullstack
                                <br>
                                <span class="green">developer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 col-lg-6 float-right">
                            <h2 class="text-right">
                                web
                                <br>
                                <span class="purple">designer</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 col-lg-6 mx-auto">
                            <p class="text-center big">
                                hi, my name is <span class="green">Felix Wetell</span> and I am a fullstack developer and also a web designer.
                                I like to create solutions for <span class="purple">people</span> that makes the everyday life easier and more fun!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="section jobs">
            <div class="container">
                {{-- TODO: Make images more responsive --}}
                {{-- TODO: Add "company" name and small description like the Sketch --}}
                <div class="slide" id="oldPortfolio">
                    <a href="http://felixwetell.azurewebsites.net/" target="_blank">
                        <img data-src="{{ asset( '/img/felixwetell.png' ) }}" alt="Felix Wetell old portfolio">
                    </a>
                </div>
                <div class="slide" id="gamethrill">
                    <a href="https://gamethrill.io/news/articles" target="_blank">
                        <img data-src="{{ asset( '/img/gamethrill.png' ) }}" alt="Gamethrill articles page">
                    </a>
                </div>
            </div>
        </div>
        <div class="section about">
            <div class="container">
                <div class="row">
                    <div class=" col-12">
                        <div class="col-12 col-lg-6">
                            <h2>
                                felix
                                <br>
                                <span>wetell</span>
                            </h2>
                        </div>
                        <div class="col-12 col-lg-6">
                            <p class="mt-4">
                                hi, my name is <span class="grey">Felix Wetell</span> and I am a fullstack developer and also a web designer.
                                I like to create solutions for <span class="grey">people</span> that makes the everyday life easier and more fun!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- TODO: Add slider of skills --}}
            </div>
        </div>
        <div class="section contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="col-12 col-lg-6 float-right">
                            <h3 class="text-lg-right">
                                contact
                                <br>
                                <span class="purple">me</span>
                            </h3>
                        </div>
                        <div class="col-12 col-lg-6 float-left pt-0 pt-lg-4">
                            <form class="" action="/" method="post">
                                <div class="">
                                    <input type="text" name="firstName" placeholder="first name...">
                                    <input type="text" name="lastName" placeholder="last name...">
                                    <input type="text" name="email" placeholder="email...">
                                    <textarea name="message" rows="8" cols="80" placeholder="message..."></textarea>
                                    <input type="submit" name="submit">
                                </div>
                            </form>
                            <p class="mt-3 mt-lg-5">
                                not now but very very soon!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section footer">
            <div class="copyright">
                <p class="text-center">
                    copyright © 2018 felix wetell
                </p>
            </div>
            <div class="row text-center">
                <div class="col-12 col-md-4">
                    <a href="https://twitter.com/felixwetell">
                        <img data-src="{{ asset( '/img/twitter.svg' ) }}" alt="White inverted Twitter logo">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="https://github.com/felixwetell">
                        <img data-src="{{ asset( '/img/github.svg' ) }}" alt="White GitHub logo">
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="https://www.linkedin.com/in/felix-wetell/">
                        <img data-src="{{ asset( '/img/linkedin.svg' ) }}" alt="White LinkedIn logo">
                    </a>
                </div>
                <div class="text-center">
                    <a href="/secret" class=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="arrowUp"></div>
    <div class="arrowDown"></div>

@endsection
