@extends('layouts/app')

@section('content')
<div class="container">

	<hr>
	<hr>

	<div class="row">
		<h1>Edit Category Page</h1>
	</div>


	<form method="POST" action="{{ route('category.update', $category->id) }}">
		 {{csrf_field()}}
     {{method_field('put')}}
		<div class="form-group @if($errors->has('category_title')) has-error @endif" >

			<label for="category_title">Title</label>
			<input type="text"
				class="form-control"
				name="category_title"
				value="{{old('category_title', $category->title)}}">
		<p>
			{{
				$errors->first('category_title')
			}}
		</p>
		</div>


		<div class="form-group ">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>

	</form>
</div>
@endsection
