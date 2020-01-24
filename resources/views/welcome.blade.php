@extends('layout')

@section('title')
  welcome
@endsection

@section('contents')
  welcome

  <ul>
    @foreach ($books as $book)
      <li>{{ $book }}</li>
    @endforeach
  </ul>

@endsection
