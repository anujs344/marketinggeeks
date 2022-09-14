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
            <h1>Pending Installments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment List</li>
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
                <h3 class="card-title">Pending Payment </h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Due Date</th>
                    <th>Kitty</th>
                    <th>Status</th>
                    <th>Pay</th> 
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Ramesh</td>
                    <td>1234567894</td>
                    <td>xyz@gmail.com</td>
                    <td>3456</td>
                    <td>10-12-2022</td>
                    <td>Silver kitty</td>
                    <td>Active</td>
                    <td>
                        <button class="btn btn-primary">Pay</button>
                    </td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Due Date</th>
                    <th>Kitty</th>
                    <th>Status</th>
                    <th>Pay</th>
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