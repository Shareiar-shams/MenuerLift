@extends('admin.layouts.app')

@section('main-content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Admin</h1>
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
                <h3 class="card-title card-info">Add Admin</h3>
              </div>
              <br>
              @include('includes.messages')

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('user.update', $user->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                  <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter user name" name="name"  value="{{ $user->name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $user->email }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="{{ $user->phone }}">
                  </div>

                  <div class="form-group ">
                      <div class="col-md-2">
                        <label><input type="checkbox" name="status" @if(old('status')==1 || $user->status = 1)
                          checked 
                        @endif value="1">Status</label> 
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail1">Assign Role  </label>
                    @foreach($roles as $role) 
                      <div class="col-md-2">
                      
                                             
                        <label><input type="checkbox" name="role[]" value="{{ $role->id }} " @foreach($user->roles as $user_role)
                            @if($user_role->id == $role->id)
                              checked
                            @endif
                          @endforeach>{{ $role->name }}</label> 
                      
                      </div>
                      @endforeach 
        
                  </div>
                

                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('user.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>

            </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection