@extends('backend.layout.master')
@section('content')

<div class="container w-25">
  <h3 class="text-success pb-3 pt-3">Update Post</h3>
  <form action="{{route('post.update',$data->id)}}" method="POST">
    @csrf
    {{method_Field('PATCH')}}
    <div class="form-group">
      <label for="exampleInputEmail1">Enter Post</label>
      <input type="text" class="form-control" name="name" placeholder="Enter post" value="{{$data->name}}">
      @if($errors->has('name'))
      <div class="text-danger" {{$errors->first('name')}}>Name is require.</div>
      @endif
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
      <input type="text" class="form-control" name="description" placeholder="description" value="{{$data->description}}">
      @if($errors->has('description'))
      <div class="text-danger" {{$errors->first('description')}}>Description is require.</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="" class="form-label">is_active</label>
      <div>
        <input type="checkbox" name="is_active" {{((bool) $data->is_active) ? "checked" : "" }}>
      </div>
      <div>
        <a href="{{route('post.index')}}" class="btn btn-success mt-3">back</a>
        <button type="submit" class="btn btn-success mt-3">Update</button>
      </div>
    </div>

  </form>
</div>

@endsection