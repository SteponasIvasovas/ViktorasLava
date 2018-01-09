@extends('layouts/app')

@section('content')
<div class="container">

	<hr>
	<hr>

	<div class="row">
		<h1>Category Page</h1>
	</div>

	<form method="POST" action="{{ route('category.store') }}">
		 {{csrf_field()}}
		<div class="form-group @if($errors->has('category_title')) has-error @endif" >

			<label for="category_title">Title</label>
			<input type="text"
				class="form-control"
				name="category_title"
				value="{{old('category_title')}}">
		<p>
			{{
				$errors->first('category_title')
			}}
		</p>
		</div>
    <div class="form-group ">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>


@endsection
