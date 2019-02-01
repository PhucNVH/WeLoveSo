<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="../../../assets/avatars/logo.png" type="image/x-icon" /> -->
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<style>

    button {
        margin-top: 20px;
        margin-bottom: 20px;
        min-width: 150px;
    }

    input{
        border-radius: 50px;
        font-family: "Sitka Text", sans-serif;
    }

    body  {
        background-image: url("{{asset('images/handshake.jpg')}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: 100% auto;
        border: none;
        position: fixed; 
        /*Preserve aspet ratio */
        min-width: 100%;
        min-height: 100%;
    }
</style>


<body>


    <div class = "container">
        @yield('content')
    </div>

</body>
</html>
