@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
<br>

<div class="row container">
  <div class="col-lg-12">
  <p><a class="btn btn-primary offset-2 col-lg-8" href="{{route('category.create')}}">Create</a></p>
  </div>
</div>


    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row ">
        @foreach($categories as $category)
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>{{$category->title}}</h2>
          <p>ID: {{$category->id}}</p>
          <form class="" action="{{route('category.destroy', $category->id)}}" method="post">
            <button type="submit">
            Delete
            </button>
            {{csrf_field()}}
            {{method_field('DELETE')}}
          </form>
            <p><a class="btn btn-success" href="{{route('category.edit', [$category->id])}}" role="button">Edit</a></p>

        </div>
      @endforeach
    </div>
  </div>
@endsection
