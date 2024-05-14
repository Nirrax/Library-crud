@extends('layouts.app')

@section('content')
<div class="container pad-top">
  <div class="row">
    <div class="col-6">
      <h1>Users List</h1>
    </div>
  </div>
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Index</th>
            <th scope="col">eMail</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            @can('isAdmin')
            <th scope="col">Action</th>
            @endcan
          </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
          <tr>
            <th scope="row">{{$user->index}}</th>
            <td>{{$user->email}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->surname }}</td>
            @if(auth()->id() === $user->id)
            <td><button class="btn btn-danger btn-sm delete" disabled>X</td>
            @else
            <td><button class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">X</td>
            @endif
          </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
@section('javascript')
  <script src="{{ asset('js/deleteUser.js') }}"></script>
@endsection