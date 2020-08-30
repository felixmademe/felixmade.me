<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="felix, made, me, felix made, felix made me, felix, wetell, felix wetell, fullstack, developer, web design, web, design">
<meta name="description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer">
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
<meta name="url" content="http://www.felixmade.me">
<meta name="identifier-URL" content="http://www.felixmade.me">
<meta name="coverage" content="Worldwide">
<meta name="distribution" content="Global">
<meta name="rating" content="General">
<meta name="revisit-after" content="7 days">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="canonical" href="{{ Request::url() }}">
<link rel="home" href="{{ Request::url() }}">
<link rel="alternate" hreflang="x-default" href="{{ Request::url() }}">

<!-- Schema.org for Google -->
<meta itemprop="name" content="felix made me">
<meta itemprop="description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer">
<meta itemprop="image" content="http://www.felixmade.me/img/Logo.png">
<!-- Twitter -->
<meta name="twitter:card" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer">
<meta name="twitter:title" content="felix made me">
<meta name="twitter:description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta name="og:title" content="felix made me">
<meta name="og:description" content="hi, my name is felix wetell and i am a fullstack developer and also a web designer">
<meta name="og:image" content="http://www.felixmade.me/img/Logo.png">
<meta name="og:url" content="http://www.felixmade.me">
<meta name="og:site_name" content="felix made me">
<meta name="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="og:type" content="website">

<title>felix made me - creative website solutions</title>
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset( 'img/favi/apple-touch-icon.png' ) }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset( 'img/favi/favicon-32x32.png' ) }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset( 'img/favi/favicon-16x16.png' ) }}">
<link rel="manifest" href="{{ asset( 'img/favi/site.webmanifest' ) }}">

<script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" async></script>
<script>
    var galite = galite || {};
    galite.UA = 'UA-135535698-1';
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#1E272E"
                },
                "button": {
                    "background": "#05C46B",
                    "color": "#fff"
                }
            },
            "content": {
                "message": "this website uses cookies to ensure you get the best experience on our website",
                "dismiss": "got it",
                "link": "learn more"
            }
        })});
</script>

<script src='https://www.google.com/recaptcha/api.js?render={{ env( 'GOOGLE_RECAPTCHA_KEY' ) }}&onload=onloadCallback&render=explicit'></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute( '{{ env( 'GOOGLE_RECAPTCHA_KEY' ) }}', { action: 'contactForm' } ).then( function( token )
        {
            if( token )
            {
                document.getElementById( 'recaptcha' ).value = token;
            }
        });
    });
</script>
