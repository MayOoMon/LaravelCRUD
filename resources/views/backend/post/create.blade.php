@extends('backend.layout.master')
@section('content')

<div class="container w-25">
  <h3 class="text-success pt-3 pb-3">Add Post</h3>
  <form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Post</label>
      <input type="text" class="form-control" name="name" placeholder="Enter post">
      @if($errors->has('name'))
      <div class="text-danger" {{$errors->first('name')}}>Name is require.</div>
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" name="description" placeholder="Enter description">
      @if($errors->has('description'))
      <div class="text-danger" {{$errors->first('description')}}>Description is require.</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="" class="form-label">is_active</label>
      <div>
        <input type="checkbox" name="is_active">
        <!-- <input type="checkbox" name="is-active" value="1">acitve -->
      </div>
      <div class="mt-5">
        <a href="{{route('post.index')}}" class="btn btn-success">back</a>
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </div>

  </form>
</div>

@endsection