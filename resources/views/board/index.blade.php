@extends('layouts.main')
@section('title', 'thought space')
@section('content')

        <form id="boardForm">
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
                @include('partials.components.message', $note)
            @endforeach
        </div>
    </div>

@endsection

