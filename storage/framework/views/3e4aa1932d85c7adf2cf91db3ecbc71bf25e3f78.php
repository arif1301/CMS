<?php $__env->startSection('main-row'); ?>

    <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <div class="col-md-10">

        <div id="post-header">
        
            <h2 class="text-center">Add New Post</h2>
        
        </div>

        <br/>

        <div id="post-form">
        
            
            <?php echo Form::open(['route' => 'post.add', 'method' => 'POST']); ?>

            
                <div class="form-group">
                    <?php echo Form::label('postTitle', 'Post Title'); ?>

                
                    <?php echo Form::text('postTitle', '', ['class' => 'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('postAuth', 'Author'); ?>

                
                    <?php echo Form::text('postAuth', '', ['class' => 'form-control']); ?>

                </div>


                <div class="form-group">
                    <?php echo Form::label('postCategory', 'Post Category'); ?>


                    <select name="postCategory" id="postCategory" class="form-control">
                        <option>No Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    
                </div>    

                <div class="form-group">

                    <?php echo Form::label('postContent', 'Post Content'); ?>

                    
                    <?php echo Form::textarea('postContent', '', ['class' => 'form-control']); ?>


                </div>
                
                <div class="form-group">
                    
                    <?php echo Form::submit('Add Post', ['class' => 'btn btn-success btn-block']); ?>

                    
                </div>
            
            <?php echo Form::close(); ?>

            
        </div>
    </div>
    </div> <!-- Main Area -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>