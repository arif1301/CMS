<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CMS</title>

    <!-- Ajax POST CALL XCSS Removal -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Laravel Assets -->

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />

     <!-- Main JS File -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script> 
    
    <!-- Setup Headers -->
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</head>

<body>

   <div class="container-fluid">
  
     <div class="row">

        <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->make('inc.modal', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('main-row'); ?>

     </div>
   
   </div>

</body>

</html>
