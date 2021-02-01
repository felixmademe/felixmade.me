@extends('layouts.games')
@section('content_inner')

    <section class="section center-text" id="games">
        <div class="content">
            <div>
                <div class="center-text">
                    <h2 class="big">web games</h2>
                </div>
                <div class="showcase" id="showcase">
                    @include('partials.components.game', [$name = 'tutorial'])
                </div>
                <div class="center-text">
                    <p>(scroll to view them all)</p>
                    <a class="link" href="{{ route('start') }}"></a>
                </div>
            </div>
        </div>
    </section>

@endsection

