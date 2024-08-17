@extends('layout')
@section('content')
   <div class="col-md-4 border p-3">
        <h3 class="text-align-center">Login</h3>
        <form action="{{route('loginmatch')}}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="" class="label">Email:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror " name="email">
                <p class="text-danger">@error('name') {{$message}} @enderror</p>
            </div>
            <div class="mb-1">
                <label for="" class="label">Password:</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror " name="password">
                <p class="text-danger">@error('password') {{$message}} @enderror</p>
            </div>
            <button class="btn btn-sm btn-success mt-2">Login</button>
        </form>
   </div>
@endsection