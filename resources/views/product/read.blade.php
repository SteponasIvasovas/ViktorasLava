@extends('layouts/app')

@section('content')
<div class="container">

	<hr>
	<hr>

	<div class="row text-center">
		<h1>Product Page</h1>
	</div>
  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">

      <div class="col-lg-12 text-center">
        <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
        <h2>{{$product->title}}</h2>
        <p>{{$product->description}}</p>
        <p><a class="btn btn-warning btn-lg" href="{{ route('product.edit', $product->id) }}" role="button">Update</a></p>

        <form class="" action="{{ route('product.destroy') }}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$product->id}}">
        <button class="btn btn-danger btn-lg" type="submit">Delete</button>
        </form>
      </div>

  </div>
</div>
</div>


</div>
@endsection
