@extends( 'layouts.main' )
@section( 'title', config( 'app.slogan' ) )

@section( 'content' )
    <section class="section start">
        <div class="content">
            <img class="img" src="{{ asset( 'img/logo-small-dark.svg' ) }}" alt="{{ config( 'app.name' ) }} logo">
            <div class="header">
                <h1 class="big">hello</h1>
                <h2 class="small">felix wetell here :)</h2>
            </div>
        </div>
    </section>
@endsection

