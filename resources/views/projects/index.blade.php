@extends('layout')


@section('contents')

<h1> Project List</h1>

@foreach ($projects as $project)
  Title : {{ $project->title }} <br>
  Description : {{ $project->description }}<br>
  <br>
@endforeach

@endsection
