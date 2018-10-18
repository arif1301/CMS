<?php $__env->startSection('main-row'); ?>
	
	<?php echo $__env->make('inc.sideArea', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="col-md-8" id= "main-category">
		
		<div id="category-header">
			<h4>Categories</h4>
		</div>

		<div id="category-container">
			<div id="category-form">
				<?php echo Form::open(['route' =>"category.add", 'method'=>'POST']); ?>


				<?php echo Form::label('categoryName', 'Name'); ?>


				<?php echo Form::text('categoryName', '', ['class'=> 'form-control', 'placeholder' =>'Category Name']); ?>


				<?php echo Form::label('categoryAuthor', 'Author'); ?>


				<?php echo Form::text('categoryAuthor', '', ['class'=> 'form-control', 'placeholder' =>'Category Author']); ?>


				<?php echo Form::submit('Tambahkan Category',['class' => 'btn btn-success btn-block' ]); ?>


				<?php echo Form::close(); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>