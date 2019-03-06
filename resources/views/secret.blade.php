@extends('layout')

@section( 'content' )

<div class="container secret">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <br>
            <h2><span class="purple">you</span> found the <span class="green">secret</span> page</h2>
            <p>
                while I have your attention, please take a moment to share this page
                and let others know about this website
                <br><br>
                here is a video of a cat playing piano:
            </p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="" height="" src="https://www.youtube.com/embed/J---aiyznGQ"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen class="embed-responsive-item"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
