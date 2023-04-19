@extends('backend.layout.master')
@section('content')

<div class="container w-25">
  <h3 class="text-success pt-3 pb-3">Add Blog</h3>
  <form action="{{route('blog.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Enter description" required>
    </div>
    <div class="mt-5">
      <a href="{{route('blog.index')}}" class="btn btn-success">back</a>
      <button type="submit" class="btn btn-success">Add</button>
    </div>

  </form>
</div>
@endsection