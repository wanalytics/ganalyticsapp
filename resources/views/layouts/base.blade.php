<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
        
        <title></title>
        
        <!-- Fav icons and desktop icons for different devices and OS -->
        <link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/images/icons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <meta name="apple-mobile-web-app-title" content="Simple Analytics">
        <meta name="application-name" content="Simple Analytics">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="msapplication-TileImage" content="/images/icons/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <!-- CSS files come here -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        @if(getenv('APP_ENV')=='production')
            <link href="{{ elixir("css/app.min.css") }}" rel="stylesheet">
        @else
            <link href="{{ elixir("css/app.css") }}" rel="stylesheet">
        @endif

        <!-- Custom Fonts -->
        <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        
</head>

    <body id="page-top" class="index">
            @yield('body')

            <!-- JS files that can wait come here -->
            <script src='http://code.jquery.com/jquery-1.11.3.min.js' type='text/javascript'></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            @if(getenv('APP_ENV')=='production')
                <script src="{{ elixir("js/all.min.js") }}" type='text/javascript'></script>
            @else
                <script src="{{ elixir("js/all.js") }}" type='text/javascript'></script>
            @endif
                        
    </body>
</html>