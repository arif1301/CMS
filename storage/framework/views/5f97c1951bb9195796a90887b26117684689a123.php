<!-- <nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="nav-header">
				<a class="navbar-header" href="">CMS</a>
			</div>
				<ul id="nav navbar-nav">
				    <li><a href="#">Dashboard</a></li>
				    <li><a href="<?php echo e(route('post.index')); ?>">Add New Post</a></li>
				    <li><a href="<?php echo e(route('category.index')); ?>">Categories</a></li>
				    <li><a href="#">Admin</a></li>
				</ul>
			</div>
	</nav> -->

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Dashboard</a></li>
				    <li><a href="<?php echo e(route('post.index')); ?>">Add New Post</a></li>
				    <li><a href="<?php echo e(route('category.index')); ?>">Categories</a></li>
				    <li><a href="#">Admin</a></li>
    </ul>
  </div>
</nav>