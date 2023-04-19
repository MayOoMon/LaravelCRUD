@extends('backend.layout.master')
@section('content')
<div class="container">
  <h3 class="text-success pb-3 pt-3">Show Post</h3>

  <table id="example2" class="table table-bordered table-hover">
    <thead class="bg-success">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Active</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td><input type="checkbox" disabled {{((bool) $data->is_active) ? "checked" : "" }} /></td>

      </tr>
    </tbody>
  </table>
  <a href="{{route('post.index')}}" class="btn btn-success mt-3">back</a>
</div>

@endsection