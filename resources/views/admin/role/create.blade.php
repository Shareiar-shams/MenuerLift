@extends('admin.layouts.app')

@section('main-content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Role</h1>
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
                <h3 class="card-title card-info">Add Role</h3>
              </div>
              <br>
              @include('includes.messages')

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('role.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Role Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Tag Name" name="name">
                </div>
                <div class="row">
                <div class="col-lg-4">
                  <label for="exampleInputEmail1">Post Permissions</label>
                  @foreach($permissions as $permission)
                    @if($permission->for == 'post')
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}
                        </label>
                      </div>
                    @endif
                  @endforeach
                </div>
                <div class="col-lg-4">
                  <label for="exampleInputEmail1">User Permissions</label>
                  @foreach($permissions as $permission)
                    @if($permission->for == 'user')
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}
                        </label>
                      </div>
                    @endif
                  @endforeach
                </div>
                <div class="col-lg-4">
                  <label for="exampleInputEmail1">Other Permissions</label>
                  @foreach($permissions as $permission)
                    @if($permission->for == 'other')
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="permission[]" value="{{$permission->id}}"> {{$permission->name}}
                        </label>
                      </div>
                    @endif
                  @endforeach
                </div>
                </div>

                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('role.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>

            </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection