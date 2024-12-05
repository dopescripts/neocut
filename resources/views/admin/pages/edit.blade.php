@extends('admin.layout.app')
@section('content')
    <div class="container-xl flex-grow-1 container-p-y">
        <h1>Admin Panel</h1>
        <a href="#">Edit Data</a>
        <div class="my-5 col-md-7">
            <form action="{{route('register.update', $register->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$register->name}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$register->email}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Handle</label>
                    <input type="text" class="form-control" name="handle" value="{{$register->handle}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{$register->password}}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection