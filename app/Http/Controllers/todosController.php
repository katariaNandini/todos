<?php

namespace App\Http\Controllers;

use App\Models\todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class todosController extends Controller
{
    // public function index()
    // {
    //     $todos = Auth::user()->todos()->get(); // Get todos for the authenticated user
    //     return view('todos.welcome', compact('todos'));
    // }

    // public function index()
    // {
    //     $todos = todos::all();
    //     $data = compact('todos');
    //     return  view("welcome")->with($data);
    // }
    public function index()
    {
        $todos = todos::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('home', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'work' => 'required',
                'dueDate' => 'required',
            ]
        );
        $todo = new todos;
        $todo->name = $request['name'];
        $todo->work = $request['work'];
        $todo->dueDate = $request['dueDate'];
        $todo->user_id = Auth::user()->id; // Set user_id here

        $todo->save();
        return redirect(route("todo.home"));
    }

    public function delete($id)
    {
        todos::find($id)->delete();
        return redirect(route("todo.home"));
    }
    public function edit($id)
    {
        $todo = todos::find($id);
        $data = compact('todo');
        return view("layout.update")->with($data);
    }
    public function updateData(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'work' => 'required',
                'dueDate' => 'required',
            ]
        );
        $id = $request['id'];
        $todo = todos::find($id);
        $todo->name = $request['name'];
        $todo->work = $request['work'];
        $todo->dueDate = $request['dueDate'];
        $todo->save();
        return redirect(route("todo.home"));
    }
}
