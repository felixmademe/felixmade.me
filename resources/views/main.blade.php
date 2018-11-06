@extends('layout')

@section( 'content' )

    <div class="" id="fullpage">
        <div class="section active hero">
            <div class="container">
                <div class="row">
                    <div id="particles-js"></div>
                    <div class="col-sm-2 mx-auto">
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
        <hr>
        <div class="section intro">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 float-left">
                        <h2 class="text-left">
                            fullstack
                            <br>
                            <span class="green shake">developer</span>
                        </h2>
                    </div>
                    <br><br>
                    <div class="col-12 col-lg-6 offset-lg-6">
                        <h2 class="text-right">
                            web
                            <br>
                            <span class="purple">designer</span>
                        </h2>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-12 col-lg-6 mx-auto">
                        <p class="text-center big">
                            hi, my name is <span class="green">Felix Wetell</span> and I am a fullstack developer and also a web designer.
                            I like to create solutions for <span class="purple">people</span> that makes the everyday life easier and more fun!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section about">
            <div class="container">
                <div class="d-lg-flex flex-row">
                    <div class="col-12 col-lg-6  d-lg-flex align-self-center">
                        <h2>
                            felix
                            <br>
                            <span>wetell</span>
                        </h2>
                    </div>
                    <div class="col-12 col-lg-6 float-right d-lg-flex align-self-center">
                        <p class="">
                            hi, my name is <span class="grey">Felix Wetell</span> and I am a fullstack developer and also a web designer.
                            I like to create solutions for <span class="grey">people</span> that makes the everyday life easier and more fun!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section jobs">
            <div class="container">
                {{-- TODO: Make images more responsive --}}
                {{-- TODO: Add "company" name and small description like the Sketch --}}
                <div class="swiper-container swiper-skills">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="d-lg-flex flex-row align-content-stretch">
                                <div class="col-12 col-lg-6 d-lg-flex align-items-center">
                                    <a href="https://felixwetell.azurewebsites.net">
                                        <img class="swiper-img" data-src="{{ asset( '/img/felixwetell.png' ) }}" alt="Felix Wetell old portfolio">
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6 d-lg-flex align-items-center">
                                    <div>
                                        <a href="https://felixwetell.azurewebsites.net">
                                            <h4>felix wetell portfolio</h4>
                                        </a>
                                        <p>older portfolio i made when i was studying c#.net and was an aspiring fullstack developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-lg-flex flex-row-reverse align-content-stretch">
                                <div class="col-12 col-lg-6 d-lg-flex align-items-center">
                                    <a href="https://new.lindacarlstad.se">
                                        <img class="swiper-img" data-src="{{ asset( '/img/lindacarlstad.png' ) }}" alt="Linda Carlstad new website">
                                    </a>
                                </div>
                                <div class="col-12 col-lg-6 d-lg-flex align-items-center">
                                    <div>
                                        <a href="https://new.lindacarlstad.se">
                                            <h4>linda carlstad</h4>
                                        </a>
                                        <p>
                                            refreshed the website for my university organisation i was in during
                                            my years studying at karlstad university
                                        </p>
                                    </div>
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
                    <div class="col-12 col-lg-6 float-left pt-0 pt-lg-4">
                        <form action="/" method="post">
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
                            <button type="submit" class="btn btn-purple">Submit</button>
                        </form>
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
            </div>
            <div class="text-center">
                <a href="/secret" class="secret-link">Secret</a>
            </div>
        </div>
    </div>
    <div class="arrowUp"></div>
    <div class="arrowDown"></div>

@endsection
