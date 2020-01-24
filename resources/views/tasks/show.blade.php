@extends('layouts.app')

@section('title','TaskDetail')

@section('contents')
  <div class="px-64">

    <div class="flex mt-4">
      <h1 class="font-bold text-3xl flex-1">TaskDetail</h1>
      <div class="flex-initial">
        <a href="/tasks/{{ $task->id }}/edit">
          <button class="bg-green-500 px-4 py-2 text-white hover:bg-green-600">Edit</button>
        </a>
        <form action="/tasks/{{ $task->id }}" method="POST" class="float-right ml-2">
          @method('DELETE')
          @csrf
            <button class="bg-red-500 px-4 py-2 text-white hover:bg-red-600">Delect</button>
        </form>
      </div>
    </div>

    Title : {{ $task->title }}
    <small class="float-right"> CreatedAt {{ $task->created_at }}</small>
    <br>
    <small class="float-right"> UpdatedAt {{ $task->updated_at }}</small>
    <br>
    Body
    <div class="border p-3">{{ $task->body }}</div>

</div>
@endsection
