@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        @foreach($products as $product)
        <div class="item @if($loop->first) active @endif">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{$product->title}}</h1>
              <p>{{$product->description}}</p>
              <p><a class="btn btn-lg btn-primary" href="{{route('product.read', [$product->id])}}" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        @if($loop->iteration == 3)
          @break
          @endif
        @endforeach

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row ">
        @foreach($products as $product)
        @if($loop->iteration > 3)
        <div class="col-lg-4 @if($loop->first) active @endif">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>{{$product->title}}</h2>
          <p>{{$product->description}}</p>
          <p><a class="btn btn-primary" href="{{route('product.read', [$product->id])}}" role="button">View details »</a></p>
        </div>
        @break
        @endif
      @endforeach
    </div>
  </div>
@endsection
