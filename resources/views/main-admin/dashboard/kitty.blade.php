@extends('main-admin.dashboard.index')

@section('css')
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{secure_asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{secure_asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{secure_asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{secure_asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{secure_asset('dist/css/adminlte.min.css')}}">
@endsection
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kitty Lists</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kitty Lists</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add New</button>
                </h3>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Create Kitty</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="" enctype="multipart/form-data">
                              @csrf
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Title:</label>
                              <input type="text" class="form-control" id="recipient-name" name="title">@error('title')
                                  {{$message}}
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Member:</label>
                              <input type="number" class="form-control" id="recipient-name" name="title">@error('member')
                              {{$message}}
                          @enderror
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Amount:</label>
                              <input type="number" class="form-control" id="recipient-name" name="title">@error('amount')
                              {{$message}}
                          @enderror
                  
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Duration In Months:</label>
                                <input type="number" class="form-control" id="recipient-name" name="title">@error('duration')
                                {{$message}}
                            @enderror
                    
                              </div>
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Status:</label>
                                <select class="form-control" name="status">
                                    <option value="open">Open</option>
                                    <option value="closed">Closed</option>
                                </select>@error('status')
                                {{$message}}
                            @enderror
                    
                              </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Amount</th>
                    <th>Duration</th>
                    <th>Date</th>
                    <th>View</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>RJ11000
                    </td>
                    <td>500</td>
                    <td>12</td>
                    <td>2021-06-18</td>
                    <td>View</td>
                    <td>Delete</td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Amount</th>
                    <th>Duration</th>
                    <th>Date</th>
                    <th>View</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('scripts')
<!-- jQuery -->
<script src="{{secure_asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{secure_asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{secure_asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{secure_asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{secure_asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{secure_asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{secure_asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{secure_asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
@endsection