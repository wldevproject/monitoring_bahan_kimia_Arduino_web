<?php

use App\Controllers\Home;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Monitoring Bahan Kimia</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- bootstrap4-toggle -->
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  <!--===============================================================================================-->
  <!-- Progressive Web App -->
  <meta name="theme-color" content="#f5f8fa">
  <link rel="manifest" href="manifest.json">
  <link rel="apple-touch-icon" href="<? base_url() ?>pwa/img/icons-192.png">
  <!--===============================================================================================-->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- bootstrap4-toggle -->
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <style>
    .icon {
      display: inline-block;
      width: 70px;
      height: 70px;
      background-size: cover;
    }

    .icon-low {
      background-image: url(dist/img/ic_low.svg);
    }

    .icon-med {
      background-image: url(dist/img/ic_medium.svg);
    }

    .icon-full {
      background-image: url(dist/img/ic_full.svg);
    }

    .alkohol {
      color: #4698DD;
    }

    .spirtus {
      color: #48EA9C;
    }

    .akuades {
      color: #FE6061;
    }

    .btn-box1 {
      color: #fff;
      background-color: #4698DD;
      border-color: #4698DD;
      box-shadow: none;
    }

    .btn-box2 {
      color: #fff;
      background-color: #0FD375;
      border-color: #0FD375;
      box-shadow: none;
    }

    .btn-box3 {
      color: #fff;
      background-color: #FE6061;
      border-color: #FE6061;
      box-shadow: none;
    }

    .btn-off {
      color: #fff;
      background-color: #707070;
      border-color: #707070;
      box-shadow: none;
    }

    .slow .toggle-group {
      transition: left 0.7s;
      -webkit-transition: left 0.7s;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?= $this->include('templetes/navbar'); ?>
    <?= $this->include('templetes/sidebar'); ?>

    <?= $this->renderSection('content') ?>

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/UpUp/1.1.0/upup.min.js"></script>
    <script>
      UpUp.start({
        'content': 'lalalala',
        'service-worker-url': '/skripsi/upup.sw.min.js'
      });
    </script>

    <script>
      // Get Data
      let data1 = sessionStorage.getItem('nama');
      let data2 = sessionStorage.getItem('npm');
      let data3 = sessionStorage.getItem('status');

      $('#nama').html(data1);

      if (data3 != 'admin') {
        document.getElementById('data-bahan').style.display = 'none';
        document.getElementById('data-admin').style.display = 'none';
      }



      $('#logout').on('click', function() {
        sessionStorage.clear();
      });

      if (data1 == null || data1 == undefined) {
        location.replace('<?= base_url() ?>')
        alert("Akses kamu ditolak");
      }
    </script>
</body>

</html>