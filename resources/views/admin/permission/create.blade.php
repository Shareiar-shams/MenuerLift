@extends('admin.layouts.app')

@section('main-content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Permission</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->



    <section class="content">
      <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title card-info">Add Permission</h3>
              </div>
              <br>
              @include('includes.messages')

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('permission.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Permission</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter permission" name="name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Permission for</label>
                    <select class="form-control" name="for" id="for">
                      <option selected disabled>Select permission for</option>
                      <option value="user">User</option>                     
                      <option value="post">Post</option>                     
                      <option value="other">Other</option>                     
                    </select>
                </div>


                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>

            </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection