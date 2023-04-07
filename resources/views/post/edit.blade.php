<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}} " rel="stylesheet">

</head>

<body class="antialiased bg-dark text-white">
  <div class="container w-25 mt-5">
    <h3 class="text-success mb-5">Update Post</h3>
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

    </form>
  </div>
</body>
<script src="{{asset('js/bootstrp.min.js')}}"></script>

</html>