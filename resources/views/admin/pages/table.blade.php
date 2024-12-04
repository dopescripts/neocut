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
                    <td><button class="btn btn-primary">Edit</button></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection