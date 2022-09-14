@extends('main-admin.dashboard.index')

@section('css')
   
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
 
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
@endsection
@section('main')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1>Update Password</h1>
        </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Current Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" name="cpass">@error('cpass')
                      {{$message}}
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">New Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" name="npass">@error('npass')
                        {{$message}}
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Repeat New Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" name="rpass">@error('rpass')
                        {{$message}}
                        @enderror
                      </div>
                   
                  </div>
                    
                   
                     
  
                  <div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 22px">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
 </div>
 
@endsection

@section('scripts')

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endsection