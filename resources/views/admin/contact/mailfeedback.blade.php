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
            <h1>Contact</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">MenuerLift</a></li>
              <li class="breadcrumb-item active">Contact</li>
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
          <h3 class="card-title">Contact</h3>


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
             <!-- Modal -->
      				@if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              @if(session()->has('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
              @endif
              

				        <form method="post" action="{{route('contact.update', $contact->id)}}" enctype="multipart/form-data">
				        	@method('PUT')
                			@csrf
                      {{csrf_field()}}
				            <div class="form-group">
				              <label for="exampleFormControlInput1">Name</label>
				              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ $contact->name }}" readonly>
				            </div>
				             <div class="form-group">
				              <label for="exampleFormControlInput1">Email</label>
				              <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{ $contact->email }}" readonly>
				            </div>
				            <div class="form-group">
				            	<label for="exampleFormControlInput1">Reply Message</label>
				            	<textarea class="form-control" name="message" rows="5" placeholder="Type your reply message"></textarea>
				            </div>
				            <div class="modal-footer">
				              <input type="submit" class="btn btn-primary" name="submit" value="Send">
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

