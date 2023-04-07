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
    <h3 class="text-success mb-5 mt-5">Show Post</h3>

    <table class="table">
      <thead>
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
</body>
<script src="{{asset('js/bootstrp.min.js')}}"></script>

</html>