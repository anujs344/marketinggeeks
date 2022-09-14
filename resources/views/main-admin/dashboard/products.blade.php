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
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="name">@error('name')
                                {{$message}}
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">weight</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="weight">@error('weight')
                                {{$message}}
                                @enderror
                              </div>
          
                              <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select class="form-control" name="status">
                                    <option>Active</option>
                                    <option>InActive</option>
                                </select>
                                @error('status')
                                {{$message}}
                                @enderror
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Category</label>
                                <select class="form-control" name="category">
                                    <option>Gold</option>
                                    <option>Silver</option>
                                </select>
                                @error('category')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Actual Cost</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="actual_cost">@error('actual_cost')
                                {{$message}}
                                @enderror
                              </div>
                           
                              <div class="form-group">
                                <label for="exampleInputEmail1">MRP</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="mrp">@error('mrp')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Tax</label>
                                <select class="form-control" name="tax">
                                    <option>Tax 200 fixed</option>
                                    <option>Silver</option>
                                </select>
                                @error('category')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">DP</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="dp">@error('dp')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">QTY</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="qty">@error('qty')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Description in ENglish</label>
                                <textarea class="form-control" name="die"></textarea>@error('die')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Description in Hindi</label>
                                <textarea class="form-control" name="dih"></textarea>@error('dih')
                                {{$message}}
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter " name="image">@error('image')
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
                    <th>SKU</th>
                    <th>Title</th>
                    <th>Actual Price</th>
                    <th>Discount Price</th>
                    <th>Qty</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Necklace</td>
                    <td>1234</td>
                    <td>34</td>
                    <td>3456</td>
                    <td>aklsjdhf</td>
                    <td>active</td>
                    <td>Delete</td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SKU</th>
                        <th>Title</th>
                        <th>Actual Price</th>
                        <th>Discount Price</th>
                        <th>Qty</th>
                        <th>Description</th>
                        <th>Status</th>
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