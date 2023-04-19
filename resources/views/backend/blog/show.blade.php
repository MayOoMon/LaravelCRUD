@extends('backend.layout.master')
@section('content')
<div class="container">
  <h3 class="text-success pt-3 pb-3">Show Blog</h3>

  <table id="example2" class="table table-bordered table-hover">
    <thead class="bg-success">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$result->id}}</td>
        <td>{{$result->name}}</td>
        <td>{{$result->description}}</td>
      </tr>
    </tbody>
  </table>
  <a href="{{route('blog.index')}}" class="btn btn-success mt-3">back</a>
</div>
@endsection