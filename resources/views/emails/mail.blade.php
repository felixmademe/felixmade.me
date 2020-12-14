@extends( 'layouts.email' )
@section( 'content' )
    <h1 class="name">{{ $name }}</h1>
    <p>{{ $email }}</p>
    <hr>
    <p>
        {!! $text !!}
    </p>

@endsection
