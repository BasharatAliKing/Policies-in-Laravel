@extends('layout')
@section('content')
  <div class="col-md-4">
    <h2>{{$book->title}}</h2>
    <h4>{{$book->price}}</h4>
  </div>
@endsection