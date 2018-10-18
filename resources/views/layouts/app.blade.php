<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<head>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>

	<!-- laravel Assets -->

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">


	<script src="{{asset('js/app.js')}}"></script>

	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		})
	</script>
</head>
<body>
		@yield('main-row')

		@include('inc.messages')

		@include('inc.modal')

</body>
</html>