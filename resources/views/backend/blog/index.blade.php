@extends('backend.layout.master')
@section('content')

<div class="container">
    <a href="{{route('blog.create')}}" class="btn btn-success mt-3 ">Add New</a>
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div>
                        
                        <div class="card-body"> -->

    <table id="example2" class="table table-bordered table-hover mb-3">
        <thead class="bg-success">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $val)
            <tr>
                <td>{{$val->id}}</td>
                <td>{{$val->name}}</td>
                <td>{{$val->description}}</td>
                <td class="d-flex p-2">
                    <a href="{{route('blog.edit',$val->id)}}" class="btn btn-success m-2">Edit</a>
                    <a href="{{route('blog.show',$val->id)}}" class="btn btn-info m-2">View</a>

                    <form action="{{route('blog.destroy',$val->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    {{$data->links()}}
    <!-- </div> -->
    <!-- /.card-body -->
    <!-- </div> -->

    <!-- </div> -->
    <!-- /.col -->
    <!-- </div> -->
    <!-- /.row -->
    <!-- </div> -->
    <!-- /.container-fluid -->
    <!-- </section> -->
    <!-- /.content -->
</div>

<!-- Page specific script -->
<!-- <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script> -->
@endsection