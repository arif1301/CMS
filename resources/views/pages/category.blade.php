@extends('layouts.app')

@section('main-row')
	
	@include('inc.navbar')


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
                
                {!! Form::open(['route' => "category.add", 'method' => 'POST']) !!}

                    {!! Form::label('categoryName', 'Name') !!}
                    
                    {!! Form::text('categoryName', '', ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}

                    {!! Form::label('categoryAuth', 'Author') !!}
                    
                    {!! Form::text('categoryAuthor', '', ['class' => 'form-control', 'placeholder' => 'Category Author']) !!}
                                   
                <!-- <button class="btn btn-info" data-js="open-remove">Remove Category</button> -->

            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {!! Form::submit('Tambahkan Kategori', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
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
					<br>
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
</div>			

@endsection