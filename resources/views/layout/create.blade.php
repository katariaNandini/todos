@extends('layout.main')\


@push('head')
<title>Todo List app</title>
@endpush

@section('main-section')
<div class="container">
  <div class=" d-flex justify-content-between align-iteams-center my-5">
    <div class="h2">Add Todo</div>
    <a href="" class="btn btn-primary btn-lg">Back</a>
  </div>
  
<div class="card">
  <div class="card-body">
    <form action="" method="POST">
      <label for="" class="form-label mt-4 ">Name</label>
      <input type="text"name="name" class="form-control">      
      <label for="" class="form-label mt-4 ">Work</label>
      <input type="text"name="name" class="form-control">      
      <label for="" class="form-label mt-4 ">Due date</label>
      <input type="date"name="name" class="form-control">
      <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
    </form>
  </div>
</div>

</div>
@endsection