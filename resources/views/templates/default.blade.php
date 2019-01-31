<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>WeLoveSo</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <meta name="description" content="WeLoveSo">

<!--     <link rel="apple-touch-icon" sizes="57x57" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/avatars/logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/avatars/logo.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/avatars/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/avatars/logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/avatars/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/avatars/logo.png"> -->
    <meta name="theme-color" content="#ffffff">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-20462557-9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-20462557-9');
    </script>


</head>

<body>


	<div class = "container">
		@yield('content')
	</div>

<script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>


</body>
</html>
