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
                    <p>here are some links and other resources, any help is so much appreciated</p>
                    <ul class="list">
                        <li class="item dark">
                            <p>digital ocean</p>
                            <small>
                                <i>
                                    <a class="submit" href="https://m.do.co/c/6f184dbebb06" target="_blank">
                                        referral link
                                    </a>
                                </i>
                            </small>
                        </li>
                        <li class="item dark">
                            <p>paypal</p>
                            <small>
                                <i>
                                    <a class="submit" href="https://www.paypal.com/biz/fund?id=XLLHJZFGASCWN" target="_blank">
                                        donation link
                                    </a>
                                </i>
                            </small>
                        </li>
                        <li class="item dark">
                            <p>vimla</p>
                            <small>
                                <i>
                                    <a class="submit" href="https://vimla.se/bestall/vimla-valet/valj-data?201803241835081450" target="_blank">
                                        referral link
                                    </a>
                                </i>
                            </small>
                        </li>
                    </ul>
                </div>
                <p>
                    <i>not able to able to help out financially, see below</i>
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
                    be some encouraging words or add some kind words to the thought board
                </p>
                -
                <a class="link" href="{{ url('/') }}#contact">contact me</a>
                -
                <a class="link" href="{{ route('board') }}#contact">thought board</a>
                -
            </div>
        </div>
    </section>

@endsection
