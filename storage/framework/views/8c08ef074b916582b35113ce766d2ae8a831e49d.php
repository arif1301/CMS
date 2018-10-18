<?php $__env->startSection('main-row'); ?>

    <!-- navbar -->
        <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <div class="col-md-8 col-md-offset-2">

        <h2 class="text-center"> Blog </h2>
        <br/>

        <?php if(count($posts) > 0): ?>
        
        <!-- Loop Through Posts -->
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo e('img/b.jpg'); ?>" style="width:100%" >
            <div class="card-body">
                <h4 class="card-title"><?php echo e($post->title); ?></h4>
                <p class="card-text"><?php echo e($post->author); ?></p>
                <p class="card-text">Post Content</p>
                <a href="<?php echo e(route('blog.show', ['id' => $post->id])); ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?> 
            <div class="alert alert-danger">No Posts Available</div>
        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>