@extends('layouts.app')

@section('main-row')
	
	@include('inc.sideArea')

	<div class="col-md-8" id= "main-category">
		
		<div id="category-header">
			<h4>Categories</h4>
		</div>

		<div id="category-container">
			<div id="category-form">
				{!! Form::open(['route' =>"category.add", 'method'=>'POST'])!!}

				{!! Form::label('categoryName', 'Name') !!}

				{!! Form::text('categoryName', '', ['class'=> 'form-control', 'placeholder' =>'Category Name']) !!}

				{!! Form::label('categoryAuthor', 'Author') !!}

				{!! Form::text('categoryAuthor', '', ['class'=> 'form-control', 'placeholder' =>'Category Author']) !!}

				{!! Form::submit('Tambahkan Category',['class' => 'btn btn-success btn-block' ])!!}

				{!! Form::close()!!}
			</div>
			<div id="categories-table">
				@if(count($categories) > 0)
				<table class="table">
					<tr>
						<th>ID</th>
						<th>Category</th>
						<th>Author</th>
						<th>Create At</th>
						<th>Last Update</th>
						<th><center>Option</center></th>
					</tr>
					 @foreach($categories as $i => $cat)
					<tr>
						<td>{{ $i + 1 }}</td>
						<td>{{ $cat->name }}</td>
						<td>{{ $cat->author }}</td>
						<td>{{ $cat->created_at }}</td>
						<td>{{ $cat->updated_at }}</td>
						<td><a data-js="open-edit"><span id="{{ $cat->id }}" class="btn btn-warning">Edit</span></a></td>
						<td><a data-js="open-remove"><span id="{{ $cat->id }}" class="btn btn-danger">Remove</span></a></td>
					</tr>
					@endforeach
				</table>
				@endif
			</div>
		</div>
	</div>			

@endsection