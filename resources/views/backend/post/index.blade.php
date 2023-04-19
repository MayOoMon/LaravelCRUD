@extends('backend.layout.master')
@section('content')
<div class="container">
  <a href="{{route('post.create')}}" class="btn btn-success text-white mt-5 mb-5">Add Post</a>
  <table id="example2" class="table table-bordered table-hover">
    <thead class="bg-success">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $val)
      <tr>
        <td>{{$val->id}}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->description}}</td>
        <td><input type="checkbox" disabled {{((bool) $val->is_active) ? "checked" : "" }}></td>
        <td class="d-flex p-2">
          <a href="{{route('post.edit',$val->id)}}" class="btn btn-success m-2">Edit</a>
          <a href="{{route('post.show',$val->id)}}" class="btn btn-info m-2">View</a>
          <form action="{{route('post.destroy',$val->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger m-2">Delete</button>
          </form>
        </td>

</div>
</td>


</tr>
@endforeach
</tbody>
</table>
{{$data->links()}}
</div>
@endsection