<?php $__env->startSection('main-row'); ?>
	
	<?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>


	<div class="container">
	<div class="col-md-8" id= "main-category">
		
		<div id="category-header">
			<h4>Categories</h4>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Categories</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="category-form">
                
                <?php echo Form::open(['route' => "category.add", 'method' => 'POST']); ?>


                    <?php echo Form::label('categoryName', 'Name'); ?>

                    
                    <?php echo Form::text('categoryName', '', ['class' => 'form-control', 'placeholder' => 'Category Name']); ?>


                    <?php echo Form::label('categoryAuth', 'Author'); ?>

                    
                    <?php echo Form::text('categoryAuthor', '', ['class' => 'form-control', 'placeholder' => 'Category Author']); ?>

                                   
                <!-- <button class="btn btn-info" data-js="open-remove">Remove Category</button> -->

            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php echo Form::submit('Tambahkan Kategori', ['class' => 'btn btn-primary']); ?>


        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
</div>
		</div>
			<div id="categories-table">
				<?php if(count($categories) > 0): ?>
				<table class="table">
					<tr>
						<th>ID</th>
						<th>Category</th>
						<th>Author</th>
						<th>Create At</th>
						<th>Last Update</th>
						<th><center>Option</center></th>
					</tr>
					<br>
					 <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($i + 1); ?></td>
						<td><?php echo e($cat->name); ?></td>
						<td><?php echo e($cat->author); ?></td>
						<td><?php echo e($cat->created_at); ?></td>
						<td><?php echo e($cat->updated_at); ?></td>
						<td><a data-js="open-edit"><span id="<?php echo e($cat->id); ?>" class="btn btn-warning">Edit</span></a></td>
						<td><a data-js="open-remove"><span id="<?php echo e($cat->id); ?>" class="btn btn-danger">Remove</span></a></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>			

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>