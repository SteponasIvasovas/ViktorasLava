@extends('layouts/app')

@section('content')
<div class="container">

	<hr>
	<hr>

	<div class="row">
		<h1>Product Page</h1>
	</div>
	
	<form method="POST" action="">

		<div class="form-group">
				
			<label for="product_title">Title</label>
			<input type="text" 
				class="form-control"
				name="product_title">

		</div>


		<div class="form-group ">
			<label for="product_description">Description</label>
			<input type="text" class="form-control"
					name="product_description">
		</div>
		<div class="form-group ">
			<label for="product_title">Quantity</label>
			<input type="text" 
					class="form-control"
					name="product_quantity">
		</div>

		<div class="form-group ">
			<label for="product_title">Price</label>
			<input type="text" 
			class="form-control" 
			name="product_price">
		</div>

		<div class="form-group ">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>

	</form>
</div>
@endsection
