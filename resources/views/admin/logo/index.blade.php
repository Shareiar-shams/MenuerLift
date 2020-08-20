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
            <h1>Logo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">MenuerLift</a></li>
              <li class="breadcrumb-item active">Logo</li>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Logo Image</th>
                  <th>FIcon Image</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($logos as $logo)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td><img style="height: 100px; width: 100px;" src="{{Storage::disk('local')->url($logo->logo)}}">
                      </td>
                      <td><img style="height: 100px; width: 100px;" src="{{Storage::disk('local')->url($logo->ficon)}}">
                      </td>
                      <td>
                        <a class="btn btn-sm" href="{{ route('logo.edit', $logo->id) }}">
                          <i class="fas fa-edit"></i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Logo Image</th>
                  <th>FIcon Image</th>
                  <th>Edit</th>
                </tr>
                </tfoot>
              </table>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('logo.store')}}" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Logo</label>
              <input type="file" name="logo" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
             <div class="form-group">
              <label for="exampleFormControlInput1">Fav Icon</label>
              <input type="file" name="ficon" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" name="submit" value="Save">
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
