@extends('admin.layouts.app')

@section('main-content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
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
                <h3 class="card-title card-info">Add Category</h3>
              </div>

              <br>
              @include('includes.messages')
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('category.update', $category) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name" value="{{ $category->name }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="Enter Category Slug" name="slug" value="{{ $category->slug }}">
                  </div>
                

                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>

            </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection