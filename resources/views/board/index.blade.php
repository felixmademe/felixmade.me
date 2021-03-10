@extends('layouts.main')
@section('title', 'thought space')
@section('content')

        <form action="{{ route('board.post') }}" method="post">
            @csrf
            <input type="hidden" id="recaptcha" name="recaptcha" value="{{ env( 'GOOGLE_RECAPTCHA_KEY' ) }}">
            <input type="hidden" name="public" id="public" value="1" required>
            <div class="input-container">
                <div class="organ">
                    <label class="hidden" for="message">write something</label>
                    <input type="text" class="input" name="message" id="message" placeholder="write something" required>
                    <small class="">(only one message per hour)</small>
                </div>
                <button type="submit" class="submit" id="submit">add thought</button>
            </div>
        </form>

    <div class="board">
        <div class="messages">
            @foreach($notes as $note)
                <div class="message">
                    <p class="text">
                        <small class="time">{{ Carbon\Carbon::parse( $note->created_at )->diffForHumans() }}</small>
                        <br>
                        {{ $note->message }}
                        @if($note->name)
                            <br>
                            <small class="name">by: {{ $note->name }}</small>
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </div>

@endsection

