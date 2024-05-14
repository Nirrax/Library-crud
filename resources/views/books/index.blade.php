@extends('layouts.app')

@section('content')
<div class="container pad-top">
  <div class="row">
    <div class="col-6">
      <h1>Books List</h1>
    </div>
    <div class="col-6">
      @can('isAdmin')
      <a class="float-right" href="{{route('books.create')}}">
        <button type="button" class="btn btn-secondary">{{ __('Add book') }}</button>
      </a>
      @endcan
    </div>
  </div>
  <div class="row">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Availability</th>
          @can('isAdmin')
          <th scope="col">Action</th>
          @endcan
        </tr>
      </thead>
      <tbody>
      @foreach ($books as $book)
        <tr>
          <th scope="row">{{$book->id}}</th>
          <td>{{$book->title}}</td>
          <td>{{$book->author}}</td>
          <td>{{$book->available }}/{{$book->amount}}</td>
          <td>
            <a href="{{route('books.show', $book->id)}}">
              <button class="btn btn-primary btn-sm">{{ __('S') }}</button>
            </a>
            @can('isAdmin')
            <a href="{{route('books.edit', $book->id)}}">
              <button class="btn btn-success btn-sm">{{ __('E') }}</button>
            </a>
            <button class="btn btn-danger btn-sm delete" data-id="{{$book->id}}">{{ __('D') }}</button>
          </td>
          @endcan
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
@section('javascript')
  <script src="{{ asset('js/deleteBook.js') }}"></script>
@endsection
