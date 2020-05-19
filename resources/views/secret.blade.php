@extends('layout')

@section( 'content' )

<div class="h-100 d-flex align-items-center justify-content-center">
    <div class="text-center">
        <br>
        <h2><span class="purple">you</span> found the <span class="green">secret</span> page</h2>
        <p>
            here is a video of a cat playing piano
        </p>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="" height="" src="https://www.youtube.com/embed/J---aiyznGQ"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen class="embed-responsive-item"></iframe>
        </div>
    </div>
</div>

@endsection
