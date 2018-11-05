@extends('layout')

@section( 'content' )

<div class="container secret">
    <div class="row">
        <div class="col text-center">
            <h2>You found the secret</h2>
            <p>Here is a video of a cat playing piano</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="" height="" src="https://www.youtube.com/embed/J---aiyznGQ"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="embed-responsive-item"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
