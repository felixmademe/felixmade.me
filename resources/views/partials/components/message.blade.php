<div class="message">
    <p class="text">
        <small class="time">{{ Carbon\Carbon::parse( $note->created_at )->diffForHumans() }}</small>
        <br>
        {{ $note->message }}
    </p>
</div>
