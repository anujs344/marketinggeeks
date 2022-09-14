@extends('main-admin.dashboard.index')

@section('css')
   
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 
  <link rel="stylesheet" href="{{secure_asset('plugins/fontawesome-free/css/all.min.css')}}">
 
  <link rel="stylesheet" href="{{secure_asset('dist/css/adminlte.min.css')}}">
@endsection
@section('main')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1>Allot Kitty</h1>
        </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Allot Kitty</li>
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
                      <label for="exampleInputEmail1">Number</label>
                      <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter phone" name="number">@error('number')
                      {{$message}}
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Kitty List</label>
                        <select class="form-control" name="kitty_list">
                            <option value="kh-10">kh-10</option>
                            <option value="cr-7">cr-7</option>
                        </select>@error('kitty_list')
                        {{$message}}
                            
                        @enderror
                      </div>
                  </div>
                    
                   
                     
  
                  <div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 22px">Save</button>
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
<script src="{{secure_asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{secure_asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{secure_asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{secure_asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@endsection