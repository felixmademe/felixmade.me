@extends('layouts.main')
@section('content')

        <div class="center-text">
            @foreach($notes as $note)
                <div class="card">
                    <p>
                        <small>{{ Carbon\Carbon::parse( $note->created_at )->diffForHumans() }}</small>
                        <br>
                        {{ $note->message }}
                        @if($note->name)
                            <br>
                            <small>by: {{ $note->name }}</small>
                        @endif
                    </p>
                </div>
                <br>
            @endforeach
        </div>

@endsection

