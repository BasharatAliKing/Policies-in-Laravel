@extends('layout')
@section('content')
   <h1>My Books</h1>
   <h3>Hello, <span class="text-success">{{Auth::user()->name}}</span></h3>
    <a href="{{route('logout')}}" class="btn btn-sm btn-danger">Logout</a>

    <div class="col-md-8 mt-3">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->price}}</td>
                    <td>
                        <a href="{{route('book.show',$book->id)}}" class="btn btn-sm btn-success">View</a>
                        <a href="{{route('book.edit',$book->id)}}" class="btn btn-sm btn-warning">Update</a>
                        <a href="{{route('book.destroy',$book->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
