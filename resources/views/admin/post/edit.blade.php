@extends('admin.layouts.app')
@section('headsection')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
@endsection
@section('main-content')

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
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title card-info">Title</h3>
              </div>
              <br>
              @include('includes.messages')

              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                <div class="row">
                 <div class="col-md-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{ $post->title }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Sub-Title</label>
                    <input type="text" class="form-control" id="subtitle" placeholder="Enter Sub-Title" name="subtitle" value="{{ $post->subtitle }}">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Post Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="Enter Slug" name="slug"
                    value="{{ $post->slug }}">
                  </div>
                 </div>
                 <div class="col-md-2">
                   
                 </div>

                 <div class="col-md-5">
                 <div class="container">
                   <div class="row">

                     <div class="col-md-4">
                       <div class="pull-left">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status" value="1" @if($post->status == 1)checked @endif> Publish
                          
                        </div>
                     </div>
                     <div class="col-md-8">
                       <div class="pull-right">
                          Upload Image<input type="file" class="form-control" id="image" placeholder="Insert Photo" name="image" value="{{ $post->image }}">
                        </div>
                     </div>
                     
                   </div>
                 </div> 
                <div class="form-group">
                  <label>Select Tag</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="tags[]">
                    @foreach($tags as $tag)
                      <option value="{{ $tag->id }}"
                        @foreach($post->tags as $postTag)
                          @if($postTag->id == $tag->id )
                          selected
                          @endif
                        @endforeach
                        >{{ $tag->name }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label>Select Category</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="categories[]">
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}"
                        @foreach($post->categories as $postCategory)
                          @if($postCategory->id == $category->id )
                          selected
                          @endif
                        @endforeach
                      >{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>

                 </div>
                </div>
                </div>
                <!-- /.card-body -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-outline card-info">
                      <div class="card-header">
                        <h3 class="card-title">
                          Post Body
                          <small>Type Post Here</small>
                        </h3>
                        <!-- tools box -->
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                  title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        </div>
                        <!-- /. tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea class="textarea" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="body"> {{ $post->body }}"</textarea>
                        </div>
                        <p class="text-sm mb-0">
                          Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                          information.</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('footersection')
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
   
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
   

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
@endsection