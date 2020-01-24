<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TaskController extends Controller
{
    public function index()
    {
      $tasks = auth()->user()->tasks()->latest()->get();
      //$tasks = Task::latest()->where('user_id', auth()->id())->get();
      // where user_id = 1

      return view('tasks.index')->with([
        'tasks' => $tasks
      ]);
    }

    public function create()
    {
      return view('tasks.create');
    }

    public function store(Request $request)
    {

      request()->validate([
        'title'=>'required',
        'body'=>'required'
      ]);

      $values = request(['title','body']);
      $values['user_id'] = auth()->id(); // auth -> id 지금 로그인한 사람의 아이디를 알려줌

      $task = Task::create($values);

      //$task = Task::create([
      //  'title' => request('title'),
      //  'body' => request('body')
      //  //'title' => $request->input('title'),
      //  //'body' => $request->input('body')
      //]);

      return redirect('/tasks/'.$task->id);
    }

    public function show(Task $task) // $task 는 받아온 id 값인데 --> 모델에 넣어주면 알아서 해당하는 열 가져옴
    {
      //if(auth()->id() != $task->user_id){
      //  abort(403);
      //}
      //abort_if(auth()->id() != $task->user_id, 403);

      abort_if(!auth()->user()->owns($task),403); // 로그인한 유저가 테스크를 소유하고 있지 않다면 (모델에서 메소드)

      return view('tasks.show')->with([
        'task' => $task
      ]);
    }

    public function edit(Task $task)
    {
      abort_if(!auth()->user()->owns($task),403);

      return view('tasks.edit')->with([
        'task' => $task
      ]);
    }

    public function update(Task $task)
    {
      abort_if(!auth()->user()->owns($task),403);

      request()->validate([
        'title'=>'required',
        'body'=>'required'
      ]);

      $task->update(request(['title','body']));

      return  redirect('/tasks/'.$task->id);
    }

    public function destroy(Task $task)
    {
      abort_if(!auth()->user()->owns($task),403);

      $task->delete();
      return redirect('/tasks');
    }
}
