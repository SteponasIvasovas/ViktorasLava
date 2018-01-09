@extends('layouts/app')

@section('content')
<div class="container">

	<hr>
	<hr>

	<div class="row">
		<h1>Edit Page</h1>
	</div>

	{{--@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
	    </div>
	@endif--}}

	<form method="POST" action="{{ route('product.update') }}">
		 {{csrf_field()}}
     <!-- Atsisiuncia id -->
     <input type="hidden" name="id" value="{{$product->id}}">
		<div class="form-group @if($errors->has('product_title')) has-error @endif" >

			<label for="product_title">Title</label>
			<input type="text"
				class="form-control"
				name="product_title"
				value="{{old('product_title', $product->title)}}">
		<p>
			{{
				$errors->first('product_title')
			}}
		</p>
		</div>


		<div class="form-group @if($errors->has('product_description')) has-error @endif">
			<label for="product_description">Description</label>
			<input type="text" class="form-control"
					name="product_description"
					value="{{old('product_description', $product->description)}}">
					<p>
						{{
							$errors->first('product_description')
						}}
					</p>
		</div>
		<div class="form-group @if($errors->has('product_quantity')) has-error @endif">
			<label for="product_quantity">Quantity</label>
			<input type="text"
					class="form-control"
					name="product_quantity"
					value="{{old('product_quantity', $product->quantity)}}">
					<p>
						{{
							$errors->first('product_quantity')
						}}
					</p>
		</div>

		<div class="form-group @if($errors->has('product_price')) has-error @endif">
			<label for="product_price">Price</label>
			<input type="text"
			class="form-control"
			name="product_price"
			value="{{old('product_price', $product->price)}}">
			<p>
				{{
					$errors->first('product_price')
				}}
			</p>
		</div>

		<div class="form-group ">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>

	</form>
</div>
@endsection
