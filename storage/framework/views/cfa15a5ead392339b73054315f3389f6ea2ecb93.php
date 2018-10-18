<?php $__env->startSection('main-row'); ?>

    <!-- Main Area -->
    <div class="col-md-8 col-md-offset-2">

        <h3 class="text-center"><?php echo e($post->title); ?></h3>
    
        <small class="text-muted text-center"><?php echo e($post->author); ?></small>

        <p class="card-text"><?php echo e($post->post); ?></p>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>