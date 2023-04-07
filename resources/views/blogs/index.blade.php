<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}} " rel="stylesheet">


  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased bg-dark text-white">
  <div class="container col col-6">
    <a href="{{route('blogs.create')}}" class="btn btn-success mt-5 mb-5">Add New</a>

    <table class="table bg-dark">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $val)
        <tr>
          <td>{{$val->id}}</td>
          <td>{{$val->name}}</td>
          <td>{{$val->description}}</td>
          <td class="d-flex p-2">
            <a href="{{route('blogs.edit',$val->id)}}" class="btn btn-success m-2">Edit</a>
            <form action="{{route('blogs.delete',$val->id)}}" method="POST">
              @csrf
              <button class="btn btn-danger m-2">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
<script src="{{asset('js/bootstrp.min.js')}}"></script>

</html>