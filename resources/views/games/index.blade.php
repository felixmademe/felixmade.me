@extends('layouts.games')
@section('content_inner')

    <section class="section center-text" id="games">
        <div class="content">
            <div>
                <h2 class="big">web games</h2>
                <div class="showcase" id="showcase">
                    @include('partials.components.game', [$name = 'tutorial'])
                </div>
                <p>(scroll to view them all)</p>
                <a class="link" href="{{ route('start') }}"></a>
            </div>
        </div>
    </section>
    <section class="section" id="minecraft">
        <div class="content">
            <div>
                <h2 class="big center-text">minecraft server</h2>
                <p>
                    status:
                    <span class="status {{ $server->online ? 'online' : 'down' }}">
                        {{ $server->online ? 'online' : 'down' }}
                    </span>
                    @if($server->online)
                        <br>
                        name: <b class="hostname">minecraft.felixmade.me</b>
                        {{--hostname: <b class="hostname">{{ $server->hostname }}</b>--}}
                        <br>
                        ping: <b class="ping {{ $server->ping < 60 ? 'good' : ($server->ping < 100 ? 'average' : 'poor') }}">{{ $server->ping }}</b>
                        <br>
                        players: <b class="players {{ $server->players == 0 ? 'empty' : ($server->players > 0 ? 'low' : ($server->players > 2 ? 'average' : 'full')) }}">{{ $server->players }}</b><b>/{{ $server->max_players }}</b>
                        <br>
                        motd: <span class="motd">{!! $server->getMotdToHtml() !!}</span>
                        <br>
                        version: <b>{{ $server->version }}</b>
                    @else
                        <br>
                        error: <span class="server error">{{ $server->error }}</span>
                    @endif
                </p>
                <hr>
                <p>
                    i recently set up a minecraft server to play on
                </p>
                <p>
                    this was done becasue i wanted to get some more experience
                    <br>
                    with setting up services on the server i use for my websites
                    <br>
                </p>
                <p>
                    server is whitelisted, send a email if you want to be added
                </p>
            </div>
        </div>
    </section>

@endsection

