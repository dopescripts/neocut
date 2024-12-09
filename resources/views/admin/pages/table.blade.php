@extends('admin.layout.app')
@section('content')
    <div class="container-xl flex-grow-1 container-p-y">
        <div class="my-5">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Handle</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $register as $register )
                  <tr>
                    <th>{{$register->id}}</th>
                    <td>{{$register->name}}</td>
                    <td>{{$register->email}}</td>
                    <td>{{$register->handle}}</td>
                    <td><a href="{{route('register.edit', $register->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{route('register.delete', $register->id)}}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection