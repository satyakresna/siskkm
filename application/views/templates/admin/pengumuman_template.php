<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISKKM - Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/font-awesome/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/ionic/ionicons.min.css');?>">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/datatables/dataTables.bootstrap.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/datatables/extensions/Buttons/css/buttons.bootstrap.min.css');?>">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/select2/select2.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/dist/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/dist/css/skins/_all-skins.min.css');?>">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/normalize.css');?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo site_url('admin/home');?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>KM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>SKKM</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('adminlte/dist/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $current_user->nama_depan.' '.$current_user->nama_belakang; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('adminlte/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $current_user->nama_depan.' '.$current_user->nama_belakang; ?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo site_url('admin/user/profil');?>" class="btn btn-default btn-flat">Profil</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('login/logout');?>" class="btn btn-default btn-flat">Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url('adminlte/dist/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $current_user->nama_depan.' '.$current_user->nama_belakang; ?></p>
              <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?php echo site_url('admin/beranda');?>">
                <i class="fa fa-home"></i> <span>Halaman Beranda</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo site_url('admin/users');?>">
                <i class="fa fa-users"></i> <span>Menu Users</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo site_url('admin/bobotskkm');?>">
                <i class="fa fa-balance-scale"></i> <span>Menu Bobot SKKM</span>
              </a>
            </li>
            <li class="treeview active">
              <a href="<?php echo site_url('admin/pengumuman');?>">
                <i class="fa fa-newspaper-o"></i> <span>Menu Pengumuman</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php echo $contents;?>
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright template <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('adminlte/plugins/jQuery/jquery.min.js');?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('adminlte/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('adminlte/plugins/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/Buttons/js/buttons.bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/JSZip/jszip.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/pdfmake/build/pdfmake.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/pdfmake/build/vfs_fonts.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/Buttons/js/buttons.html5.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/Buttons/js/buttons.print.min.js');?>"></script>
    <script src="<?php echo base_url('adminlte/plugins/datatables/extensions/Buttons/js/buttons.colVis.min.js');?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('adminlte/plugins/fastclick/fastclick.min.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('adminlte/dist/js/app.min.js');?>"></script>
    <!-- CK Editor Js -->
    <script src="<?php echo base_url('adminlte/plugins/ckeditor/ckeditor.js');?>"></script>
    <!-- page script-->
    <script>
      $(document).ready(function () {
        var table = $('#pengumumantable').DataTable( {
          lengthChange: false,
          buttons: ['copy','excel','pdf','print','colvis']
        });
        table.buttons().container()
          .appendTo('#pengumumantable_wrapper .col-sm-6:eq(0)');
      });
    </script>
  </body>
</html>
