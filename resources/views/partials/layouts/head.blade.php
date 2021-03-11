<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="felix, made, me, felix made, felix made me, felix, wetell, felix wetell, fullstack, developer, web design, web, design">
<meta name="description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer at felix made me">
<meta name="subject" content="Development">
<meta name="image" content="https://felixmade.me/img/Logo.png">
<meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="robots" content="index, follow">
<meta name="Classification" content="Business">
<meta name="author" content="felix made me, hello@felixmade.me">
<meta name="designer" content="felix made me">
<meta name="copyright" content="felix made me">
<meta name="reply-to" content="hello@felixmade.me">
<meta name="owner" content="felix made me">
<meta name="url" content="{{ config( 'app.url' ) }}">
<meta name="identifier-URL" content="{{ config( 'app.url' ) }}">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="canonical" href="{{ Request::url() }}">
<link rel="home" href="{{ Request::url() }}">
<link rel="alternate" hreflang="x-default" href="{{ Request::url() }}">
<meta name="theme-color" content="#05C46B">

<!-- Schema.org for Google -->
<meta itemprop="name" content="felix made me">
<meta itemprop="description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer at felix made me">
<meta itemprop="image" content="{{ config( 'app.url' ) }}/img/Logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer at felix made me">
<meta name="twitter:title" content="felix made me">
<meta name="twitter:description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer at felix made me">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="felix made me">
<meta name="og:description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer at felix made me">
<meta name="og:image" content="{{ config( 'app.url' ) }}/img/Logo.png">
<meta name="og:url" content="{{ config( 'app.url' ) }}">
<meta name="og:site_name" content="felix made me">
<meta name="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="og:type" content="website">

<title>{{ config( 'app.name' ) }} - @yield( 'title', 'creative web solutions' )</title>
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset( 'img/favi/apple-touch-icon.png' ) }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset( 'img/favi/favicon-32x32.png' ) }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset( 'img/favi/favicon-16x16.png' ) }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />

@if( config('app.env') )
    <link rel="stylesheet" href="{{ mix( 'css/app.css' ) }}">
@else
    <link rel="stylesheet" href="{{ asset( 'css/app.css' ) }}">
@endif

@if( config('app.env') )
    <script defer src="{{ mix( 'js/app.js' ) }}"></script>
@else
    <script defer src="{{ asset( 'js/app.js' ) }}"></script>
@endif

<script src='https://www.google.com/recaptcha/api.js?render={{ config( 'recaptcha.key.site' ) }}&render=explicit'></script>
<script defer>
    grecaptcha.ready(function() {
        grecaptcha.execute( '{{ config( 'recaptcha.key.site' ) }}', { action: 'contactForm' } ).then( function( token )
        {
            if( token )
            {
                document.getElementById( 'recaptcha' ).value = token;
            }
        });
    });
</script>

<script defer type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "ProfessionalService",
    "name": "felix made me",
    "url": "https://felixmade.me/",
    "address": "Signalhornsgatan 123, 656 34 Karlstad",
    "sameAs": [
      "https://www.linkedin.com/company/felixmademe/",
      "https://www.github.com/felixmademe/"
    ]
  }
</script>
