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
  <div class="container w-25 mt-5 text-white">
    <h3 class="text-success mb-5">Add Blog</h3>
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
</body>
<script src="{{asset('js/bootstrp.min.js')}}"></script>

</html>