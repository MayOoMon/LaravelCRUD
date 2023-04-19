@extends('backend.layout.master')
@section('content')
<div class="container w-25">
  <h3 class="text-success pb-3 pt-3">Update Blog</h3>

  <form action="{{route('blog.update',$result->id)}}" method="POST">
    @csrf
    {{method_Field('PATCH')}}
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$result->name}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" name="description" placeholder="description" value="{{$result->description}}">
    </div>
    <div>
      <a href="{{route('blog.index')}}" class="btn btn-success mt-3">back</a>
      <button type="submit" class="btn btn-success mt-3">Update</button>
    </div>
  </form>
</div>

@endsection