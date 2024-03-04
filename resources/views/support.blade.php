@extends('layouts.main')
@section('title', 'support me')
@section('content')

    <section class="section" id="support">
        <div class="content">
            <div class="center-text">
                <h1 class="big">support</h1>
                <p>
                    i am a self employed developer
                    <br>
                    you can support my work in a couple of different ways, see more in the section below
                </p>
            </div>
        </div>
    </section>

    <section class="section" id="referral">
        <div class="content">
            <div class="center-text">
                <h2 class="big">links</h2>
                <div>
                    <p>here are some links and other resources, any help is appreciated</p>
                    <ul class="list">
                        <li class="item dark">
                            <p>paypal - <i><small>buy me a drink</small></i></p>
                            <small>
                                <i>
                                    <a class="submit" href="https://www.paypal.com/biz/fund?id=XLLHJZFGASCWN" target="_blank">
                                        direct link
                                    </a>
                                </i>
                            </small>
                        </li>
                    </ul>
                </div>
                <p>
                    <i>if not able to able to help out financially, see below</i>
                </p>
            </div>
        </div>
    </section>

    <section class="section" id="tips">
        <div class="content">
            <div class="center-text">
                <h3 class="big">other ways</h3>
                <p>
                    if you want to support me but not financially, you can still help out by just send
                    <br>
                    some encouraging words
                </p>
                -
                <a class="link" href="{{ url('/') }}#contact">contact me</a>
                -
            </div>
        </div>
    </section>

@endsection
