
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
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/data">Data</a></li>
              <li class="breadcrumb-item active">Detail Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="card card-solid">
              <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                  <div class="col-12 col-md-8 col-md-8 d-flex align-items-stretch">
                    <div class="card bg-light">
                      <div class="card-header text-muted border-bottom-0">
                        <h2 class="text-center">SK : {{$data->no_surat}}
                      </div>
                      <br>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div class="col-7">
                              <h2 class="large">{{$data->nama}}</h2>
                              <h5 class="large">NRP : <b>{{$data->nrp}}</b></h5>
                              <br>
                              <span class="large">Pangkat : <b>{{$data->pangkat}}</b></span>
                              <br>
                              <span class="large">Jabatan : <b>{{$data->jabatan}}</b></span>
                              <br>
                              <span class="large">Nama Dinas : <b>{{$data->dinas}}</b></span>
                              <br>
                              <br>
                              <ul class="ml-4 mb-0 fa-ul text-dark">
                                @if($data->jenis_kelamin == "Perempuan")
                                <li class="large"><span class="fa fa-li"><i class="fas fa-lg fa-mars"></i></span> Jenis Kelamin : <b>{{$data->jenis_kelamin}}</b>
                                @elseif($data->jenis_kelamin =="Pria")
                                <li class="large"><span class="fa fa-li"><i class="fas fa-lg fa-mars-double"></i></span> Jenis Kelamin : <b>{{$data->jenis_kelamin}}</b>
                                </li>
                                @endif
                              </ul>
                                <br>
                              <br>
                              <ul class="ml-4 mb-0 fa-ul text-dark">
                                <li class="large"><span class="fa-li"><i class="fas fa-lg fa-id-card"></i></span> No. KTP : <b>{{$data->no_ktp}}</b></li>
                                <br>
                                <li class="large"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span> Tanggal Lahir : <b>{{\Carbon\Carbon::parse($data->tanggal_lahir)->format('d-M-y')}}</b></li>
                                <br>
                                <li class="large"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Alamat : <b>{{$data->alamat}}</b></li>
                                <br>
                              <li class="large"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone : <b>{{$data->no_telp}}</b></li>
                              
                              <br>
                              <li class="large"><span class="fa-li"><i class="fas fa-lg fa-user"></i></span> Status : <b>{{$data->status}}</b></li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                              <img src= "{{ asset('images/'.$data->foto) }}" alt="" style="width: 180px; height: 200px;" class="img-circle img-fluid">
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="/data" class="btn btn-md bg-teal" >
                              <i class="fas fa-reply"> Kembali</i>
                            </a>
                            <a href="#modal-default" data-toggle="modal" class="btn btn-md btn-primary">
                              <i class="fas fa-pencil-alt"> Edit</i> 
                            </a>
                          <a href="/printdata/{{$data->id}}" class="btn btn-md btn-success">
                              <i class="fas fa-print"> Print Out</i> 
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

      <!--MODAAAAL-->
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data</h4>
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
              <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                  @method('PATCH')
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">No. Surat</label>
                        <input type="text" name="no_surat" class="form-control" placeholder="Silahkan Di isi" value="{{$data->no_surat}}" name="no_surat">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">No. KTP</label>
                        <input type="text" name="no_ktp" class="form-control" placeholder="Silahkan Di isi" value="{{$data->no_ktp}}" name="no_ktp">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" placeholder="Silahkan Di isi" name="nama" value="{{$data->nama}}">
                        </div>  
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                            <option value="{{$data->jenis_kelamin}}"> {{$data->jenis_kelamin}} </option>
                            <option value=""> --Silahkan Pilih--</option>
                            <option value="Pria">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>    
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tanggal Lahir</label>
                          <input type="date" class="form-control" placeholder="Silahkan Di isi" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                        </div>
                      </div>
                      <div class="col-md-6">    
                        <div class="form-group">
                          <label for="exampleInputEmail1">Pangkat</label>
                          <input type="text" class="form-control" placeholder="Silahkan Di isi" name="pangkat" value="{{$data->pangkat}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Jabatan</label>
                          <input type="text" class="form-control" placeholder="Silahkan Di isi" name="jabatan" value="{{$data->jabatan}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" class="form-control" placeholder="Silahkan Di isi" name="alamat" value="{{$data->jabatan}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">No.Telp</label>
                          <input type="text" class="form-control" placeholder="Silahkan Di isi" name="no_telp" value="{{$data->no_telp}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Status</label>
                          <input type="text" class="form-control" placeholder="Silahkan Di isi" name="status" value="{{$data->status}}">
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
                <button type="submit" class="btn btn-success"><i class="fa fa-save"> Update</button></i>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

  


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

<!-- AdminLTE for demo purposes -->
<script src="/assets/js/demo.js"></script>

</body>
</html>
