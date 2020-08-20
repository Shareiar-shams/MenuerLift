@if ($errors->any())
                  <div class="col-md-12">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li class="alert alert-danger">{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif


@if (session()->has('message'))
    <p class="alert alert-success">{{ session('message') }}</p>
@endif

