<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>We Love So</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('css/map.css') }}">
	<link rel="stylesheet" href="https://cdn-assets.minds.com/front/dist/en/styles.2acb051213c9aaefab7a.css">
</head>
<body>

	@if (session('info'))
		<div class="col-md-3">
		</div>
		<div class="col-md-6 personal-info">
        	<div class="alert alert-info alert-dismissable">
          			<i class="fa fa-coffee"></i>
              		{{ session('info') }}
        	</div>
        </div>
    @endif
	@include('templates.partials.navigation')
	<br><br>
	@yield('content')
	@yield('scripts')


</body>
</html>