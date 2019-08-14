 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HALAMAN Admin</title>

  <!-- Bootstrap -->
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url ("assets/customcss/customadmin.css") ?>">
  <!-- link icon from font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.css">
</head>
<body>
 <div class="wrapper">
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3>Integra Inovasi Indonesia</h3>
      <strong><i class="glyphicon glyphicon-home"></i></strong>
    </div>

    <ul class="list-unstyled components">
      <li class="">
        <a href="<?php echo base_url("admin"); ?>">
          <i class="glyphicon glyphicon-dashboard"></i>
          Dashboard
        </a>
        <br>
      </li>
      <li>
        <a href="<?php echo base_url("admin/magang"); ?>">
          <i class="glyphicon glyphicon-list-alt"></i>
          Data Pemagang
        </a>
      </li>
      <br>
      <li>
        <a href="<?php echo base_url("admin/periode"); ?>">
          <i class="glyphicon glyphicon-briefcase"></i>
          Periode Magang
        </a>
      </li>
      <br>
      <li>
        <a href="#">
          <i class="glyphicon glyphicon-eye-open"></i>
          Absensi
        </a>
      </li>
      <br>
      <li>
        <a href="<?php echo base_url("admin/aktifitas"); ?>">
          <i class="glyphicon glyphicon-eye-open"></i>
          Aktivitas
        </a>
      </li>
    </ul>
  </nav>
  