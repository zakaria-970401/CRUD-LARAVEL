
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Utama</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/css/adminlte.min.css">

  <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <!-- Theme style -->

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/assets/index3.html" class="brand-link">
      <img src="/assets/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                   </li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <br>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/data" class="nav-link">
                  <i class="far fa-add"></i>
                  <p>Master Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Sidebar 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Sidebar 3</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Sidebar 1
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Sidebar 2
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Sidebar 3
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Sidebar 4
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!--MODAAAAL-->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      
          <div class="modal-body">
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Data TNI MABES AU</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/tambahdata" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">No. Surat</label>
                        <input type="text" name="no_surat" class="form-control" placeholder="Silahkan Di isi" name="no_surat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No. KTP</label>
                        <input type="text" name="no_ktp" class="form-control" placeholder="Silahkan Di isi" name="no_ktp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Silahkan Di isi" name="nama">
                      </div>  
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                          <option> --Silahkan Pilih--</option>
                          <option value="Pria">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>    
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="tempat_lahir">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control" placeholder="Silahkan Di isi" name="tanggal_lahir">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="alamat">
                      </div>
                    </div>
                    <div class="col-md-6">    
                      <div class="form-group">
                        <label for="exampleInputEmail1">Pangkat</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="pangkat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jabatan</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="jabatan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">NRP</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="nrp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Dinas</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="dinas">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No.Telp</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="no_telp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <input type="text" class="form-control" placeholder="Silahkan Di isi" name="status">
                      </div>
                    </div>
                    
                  </div>
                  <hr style="background-color: black">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Foto</label>
                        <input type="file" class="form-control" placeholder="Silahkan Di isi" name="foto">
                      </div>
                  
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-window-close"> Tutup</button></i>
              <button type="submit" class="btn btn-success"><i class="fa fa-save"> Simpan</button></i>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
 
    


    
  
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <button type="reset" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"> Tambah Data</button></i>
            <br>
            <br>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Notifikasi</h5>
              <b>{{session ('status') }}</b>
            </div>           
          
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center"><center>MASTER DATA</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th class="text-center">Nama Lengkap</th>
                              <th class="text-center">Pangkat</th>
                              <th class="text-center">Jabatan</th>
                              <th class="text-center">Alamat</th>
                              <th class="text-center">Foto</th>
                              <th class="text-center" style="100%">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                              @foreach ($data as $dt)
                              <td class="text-center">{{$loop->iteration}}</td>
                              <td class="text-center">{{$dt->nama}}</td>
                              <td class="text-center">{{$dt->pangkat}}</td>
                              <td class="text-center">{{$dt->jabatan}}</td>
                              <td class="text-center"> {{$dt->alamat}}</td>
                            <td class="text-center"><img src="{{ asset('images/'.$dt->foto) }}" style="width: 115px; height: 115px;" alt="">
                            </td>
                              <td class="text-center">
                                <a href="/detaildata/{{$dt->id}}" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
                                <a href="/hapusdata/{{$dt->id}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
                              <a href="/printdata/{{$dt->id}}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a>
                              </td>
                            </tr>
                            @endforeach
                           
                            </tbody>
            
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/js/adminlte.min.js"></script>
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="/assets/plugins/select2/js/select2.full.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/assets/js/demo.js"></script>


<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })  

    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
  });
    //Initialize Select2 Elements
  });
</script>
</body>
</html>
