<html>
	<head>
		<title>felix made me</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset( '/css/mail.min.css' ) }}">
		<link rel="icon" href="{{ asset( '/img/logo.ico' ) }}">
        <style>
		@font-face{font-family:Raleway;src:url("../font/Raleway-Medium.ttf"),url("../font/Raleway-MediumItalic.ttf"),url("../font/Raleway-Regular.ttf")}body{font-family:'Raleway', sans-serif !important;font-size:12px !important;width:100vw !important}h1{font-size:3em;margin-bottom:0px !important}p{font-size:1.2rem}a{font-size:1.2rem;color:#3E3E3E !important;text-decoration:none !important}hr{height:3px;border-radius:100%;background-color:#8C7AE6 !important}.small-text{font-size:1rem}.grey{color:#3E3E3E !important;text-decoration:none !important}.green{color:#7BED9F !important}.darkgreen{color:#2ED573 !important}.purple{color:#9C88FF !important}.darkpurple{color:#8C7AE6 !important}.white{background-color:#FFF;padding:20px 40px}.background{padding:20px 0 !important}.background .center{text-align:center}
        </style>
	</head>
	<body>
        <div class="background">
            <div class="white">
                <h1 class="green">{{ $name }}</h1>
                <a class="grey">{{ $email }}</a>
                <hr>
                <p class="grey">
                    {{ $text }}
                </p>
				<a href="https://felixmade.me" class="green">felixmade.me</a>
            </div>
        </div>
	</body>
</html>