@extends('layout')
@section('content')
   <div class="col-md-4 border p-3">
        <h3 class="text-align-center">Update Book</h3>
        <form action="{{route('book.update',$book->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-1">
                <label for="" class="label">Book Title:</label>
                <input type="text" value="{{$book->title}}" class="form-control @error('title') is-invalid @enderror " name="title">
                <p class="text-danger">@error('title') {{$message}} @enderror</p>
            </div>
            <div class="mb-1">
                <label for="" class="label">Book Price:</label>
                <input type="text" value="{{$book->price}}" class="form-control @error('price') is-invalid @enderror " name="price">
                <p class="text-danger">@error('price') {{$message}} @enderror</p>
            </div>
            <button class="btn btn-sm btn-success mt-2">Update</button>
        </form>
   </div>
@endsection