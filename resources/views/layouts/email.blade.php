<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        :root {
            --text: #485360;
            --link: #FFF;
            --green: #05C46B;
            --red: #F53B57;
            --grey: #485360;
            --darkgrey: #1E272E;
        }
        @font-face
        {
            src: url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'), url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
            font-family: 'Roboto', 'Raleway', sans-serif !important;
        }
        body {
            background-color: var( --red );
            margin: 0;
            font-family: 'Poppins', 'Raleway', sans-serif !important;
        }
        a
        {
            color: white;
            text-decoration: none;
        }
        a:hover
        {
            text-decoration: underline;
        }
        .name
        {
            margin-bottom: 0;
        }
        h3
        {
            color: white;
            margin-bottom: 5px;
        }
        body
        {
            width: 80%;
            margin: 20px auto;
        }
        header
        {
            color: #fff;
            padding: 20px 0;
            width: 100%;
            text-align: center;
        }
        header h1
        {
            font-size: 5.2em;
            margin: 0;
        }
        .main
        {
            width: 100%;
            background-color: #fff;
            color: #000;
        }
        .main .container {
            padding: 30px 30px;
        }
        footer
        {
            padding: 20px 0;
            width: 100%;
            text-align: center;
        }
        @media screen and (max-width: 768px)
        {
            body
            {
                width: 100%;
                margin: 20px auto;
            }
            header h1 {
                font-size: 3em;
            }
        }
    </style>
</head>
<body>
<div>
    <header>
        <h1>{{ config( 'app.name' ) }}</h1>
    </header>

    <div class="main">
        <div class="container">
            @yield( 'content' )
        </div>
    </div>

    <footer>
        <h3>{{ config( 'app.name' ) }}</h3>
        <a href="{{ config( 'app.url' ) }}">{{ config( 'app.url' ) }}</a>
    </footer>
</div>
</body>
</html>
