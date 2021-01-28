@extends('layouts.main')
@section('content')

    <section class="section" id="error">
        <div class="content">
            <div class="header center-text">
                <h1 class="big">@yield('message')</h1>
                <h2 class="small">@yield('code')</h2>
                <br>
                <a class="link colour"  href="{{ route('start') }}">Go back?</a>
            </div>
        </div>
    </section>

@endsection
