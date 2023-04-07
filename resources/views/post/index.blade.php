<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}} " rel="stylesheet">

</head>

<body class="antialiased bg-dark text-white">
  <div class="container">
    <a href="{{route('post.create')}}" class="btn btn-success text-white mt-5 mb-5">Add Post</a>
    <table class="table">
      <thead>
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
  </div>
</body>


<script src="{{asset('js/bootstrp.min.js')}}"></script>

</html>