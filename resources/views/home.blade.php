{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layout.main')

@push('head')
<title>Todo List app</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2 text-neon">All Todos</div>
        <a href="{{route("todo.create")}}" class="btn custom-btn btn-2 btn-lg">Add Todo</a>
    </div>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th class="text-neon">Name</th>
                <th class="text-neon">Work</th>
                <th class="text-neon">Due Date</th>
                <th class="text-neon">Action</th>
            </tr>
        </thead>t
        <tbody>
            @foreach ($todos as $todo)
            <tr valign='middle'>
                <td class="text-list">{{$todo->name}}</td>
                <td class="text-list">{{$todo->work}}</td>
                <td class="text-list">{{$todo->dueDate}}</td>
                <td>
                    <a href="{{route("todo.edit",$todo->id)}}" class="btn custom-btn btn-up btn-sm">Update</a>
                    <a href="{{route("todo.delete",$todo->id)}}" class="btn custom-btn btn-de btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

@endsection
