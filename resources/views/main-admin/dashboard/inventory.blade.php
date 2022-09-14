@extends('main-admin.dashboard.index')

@section('css')
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
@endsection
@section('main')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inventory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inventory</li>
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
                          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="POST" action="" enctype="multipart/form-data">
                              @csrf
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Design No.</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="design_no">@error('design_no')
                                {{$message}}
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Vendor code</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="vendorcode">@error('vendorcode')
                                {{$message}}
                                @enderror
                              </div>
          
                              <div class="form-group">
                                <label for="exampleInputEmail1">Gold karat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="karat">@error('karat')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Diamond Weight1</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="diamond_weight1">@error('diamond_weight1')
                                {{$message}}
                                @enderror
                              </div>
                           
                              <div class="form-group">
                                <label for="exampleInputEmail1">Diamond Weight2</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="diamond_weight2">@error('diamond_weight2')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Color Stone Weight</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="color_stone">@error('color_stone')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Diamond Price1</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="diamond_price1">@error('diamond_price1')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Color Stone Price1</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="color_stone_price1">@error('color_stone_price1')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Diamond Price2</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="diamond_price2">@error('diamond_price2')
                                {{$message}}
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Net Weight</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="net-weight">@error('net-weight')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Procure Cost</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="procure_cost">@error('procure_cost')
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
                    <th>Design No</th>
                    <th>Vendor Code</th>
                    <th>Net Weight</th>
                    <th>Procure Cost</th>
                    <th>Date</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>3535</td>
                    <td>1234</td>
                    <td>34</td>
                    <td>3456</td>
                    <td>2021-06-18</td>
                    <td>Delete</td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Design No</th>
                    <th>Vendor Code</th>
                    <th>Net Weight</th>
                    <th>Procure Cost</th>
                    <th>Date</th>
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
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
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