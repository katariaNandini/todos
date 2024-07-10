<?php

namespace App\Http\Controllers;

use App\Models\todos;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $todos = todos::all();
        return view('welcome', compact('todos'));
    }
    public function index()
    {
        return view('welcome');
    }
}
