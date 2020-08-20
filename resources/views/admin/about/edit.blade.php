@extends('admin.layouts/app')

@section('headsection')
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('main-content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">MenuerLift</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Logo</h3>

          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Add new
</button>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card">
            <div class="card-header">
              @include('includes.messages')
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <form method="post" action="{{route('about.update',$about->id)}}" enctype="multipart/form-data">
          @method('PUT')
                @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Details</label>
              
              <textarea name="text" class="form-control" id="exampleFormControlInput1" placeholder="Type Details">{{$about->text}}</textarea>
            </div>
             <div class="form-group">
              <label for="exampleFormControlInput1">First person</label>
              <input type="file" name="first_img" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
             <div class="form-group">
              <label for="exampleFormControlInput1">First person Name</label>
              <input type="text" name="fp_name" class="form-control" value="{{$about->fp_name}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Second Person</label>
              <input type="file" name="sec_img" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Second person Name</label>
              <input type="text" name="sp_name" class="form-control" value="{{$about->sp_name}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Third Person</label>
              <input type="file" name="third_img" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Third person Name</label>
              <input type="text" name="tp_name" class="form-control" value="{{$about->tp_name}}">
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" name="submit" value="Save">
      </div>
        </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection


@section('footersection')
  <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection 

