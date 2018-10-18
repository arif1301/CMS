<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<head>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<title></title>

	<!-- laravel Assets -->

	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">


	<script src="<?php echo e(asset('js/app.js')); ?>"></script>

	<script>
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		})
	</script>
</head>
<body>
		<?php echo $__env->yieldContent('main-row'); ?>

		<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<?php echo $__env->make('inc.modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>
</html>