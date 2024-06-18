@extends('layout.main')

@push('head')
<title>Update Todo</title>
@endpush

@section('main-section')
<div class="container">
  <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2 text-neon">Update Todo</div>
    <a href="{{route('todo.home')}}" class="btn custom-btn btn-2 btn-lg">Back</a>
  </div>
  <div class="card card-custom">
    <div class="card-body">
      <form action="{{route('todo.updateData')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label text-neon">Name</label>
          <input type="text" name="name" id="name" class="form-control form-control-custom" value="{{$todo->name}}">
        </div>
        <div class="mb-3">
          <label for="work" class="form-label text-neon">Work</label>
          <input type="text" name="work" id="work" class="form-control form-control-custom" value="{{$todo->work}}">
        </div>
        <div class="mb-3">
          <label for="dueDate" class="form-label text-neon">Due date</label>
          <input type="date" name="dueDate" id="dueDate" class="form-control form-control-custom" value="{{$todo->dueDate}}">
        </div>
        <input type="number" name="id" value="{{$todo->id}}" hidden>
        <button class="btn custom-btn btn-up btn-lg mt-4">Update Todo</button>
      </form>
    </div>
  </div>
</div>
@endsection
