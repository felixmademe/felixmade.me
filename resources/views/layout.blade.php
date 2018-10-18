<html>
	<head>
		<title>felix made me</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Web portfolio of Felix Wetell with the name felixmade.me">
		<meta name="author" content="Felix Wetell">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
		<link rel="stylesheet" href="{{ asset( '/css/main.min.css' ) }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
		<link rel="stylesheet" href="{{ asset( '/css/morphext.css' ) }}">
		<link rel="icon" href="{{ asset( '/img/logo.ico' ) }}">
	</head>
	<body>
        <div class="container">
			@yield( 'content' )
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/fullpage.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/vendors/easings.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.2/vendors/scrolloverflow.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
		<script src="{{ asset('/js/morphext.min.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="{{ asset('/js/main.js') }}"></script>
	</body>
</html>
