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
            <h1>Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">RS-Portal</a></li>
              <li class="breadcrumb-item active">Post</li>
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
          <h3 class="card-title">Posts</h3>
          <a class="btn btn-success offset-md-5" href="{{ route('post.create') }}">Add new</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Post Title</th>
                  <th>Post Subtitle</th>
                  <th>Post Slug</th>
                  <th>Created At</th>
                  @can('posts.update', Auth::user())
                  <th>Edit</th>
                  @endcan
                  @can('posts.update', Auth::user())
                  <th>Delete</th>
                  @endcan
                </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $post->title}}
                      </td>
                      <td>{{ $post->subtitle}}</td>
                      <td>{{ $post->slug}}</td>
                      <td>{{ $post->created_at}}</td>
                      <td>
                        <a class="btn btn-sm" href="{{ route('post.edit', $post->id) }}">
                          <i class="fas fa-edit"></i>
                        </a>
                      </td>

                      <td>
                        <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                                                 
                        </form>
                        <a onclick="if(confirm('Are you sure to delete this post?')){event.preventDefault(); document.getElementById('delete-form-{{ $post->id }}').submit();}else{
                          event.preventDefault();
                        }
                        " class="btn btn-sm" href="">
                            <i class="fas fa-trash"></i>
                        </a> 
                        
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>S.No</th>
                  <th>Post Title</th>
                  <th>Post Subtitle</th>
                  <th>Post Slug</th>
                  <th>Created At</th>
                  @can('posts.update', Auth::user())
                  <th>Edit</th>
                  @endcan
                  @can('posts.update', Auth::user())
                  <th>Delete</th>
                  @endcan
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