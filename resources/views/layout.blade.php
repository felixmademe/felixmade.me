<html>
	<head>
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

		<title>felix made me - minimalistic design is more</title>
		<meta name="google-site-verification" content="M8o5xhm2HUDb7AuJxNd3OQetuzynj3SNFHgkOxexWyk" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
		<link rel="stylesheet" href="{{ asset( '/css/main.min.css' ) }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
		<link rel="stylesheet" href="{{ asset( '/css/morphext.css' ) }}">
		<link rel="icon" href="{{ asset( '/img/logo.ico' ) }}">
		<script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" async></script>
		<script>
		    var galite = galite || {};
		    galite.UA = 'UA-135535698-1';
		</script>

		<script defer src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.3/fullpage.extensions.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/vendors/easings.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/vendors/scrolloverflow.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
		@if( Request::is( '/' ) )
			<script defer src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
			<script defer src="{{ asset( '/js/morphext.min.js' )}}"></script>
			<script defer src="{{ asset( '/js/chart.js' )}}"></script>
			<script defer src="{{ asset( '/js/ajax.js' )}}"></script>
			<script defer src="{{ asset( '/js/main.js' )}}"></script>
		@endif
	</head>
	<body>

		@yield( 'content' )

	</body>
</html>
