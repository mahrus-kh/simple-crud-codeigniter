<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Data Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo link_tag('assets/lte/bootstrap/css/bootstrap.css');
        echo link_tag('assets/lte/plugins/datepicker/datepicker3.css');
        echo link_tag('assets/lte/plugins/datatables/jquery.dataTables.css"');
        echo link_tag('assets/lte/plugins/datatables/dataTables.bootstrap.css');
  ?>
  <!-- Font Awesome -->
  <?php //echo link_tag('assets/lte/plugins/font-awesome/css/font-awesome.min.css');?>
  <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'); ?>
  <!-- Theme style -->
  <?php echo link_tag('assets/lte/dist/css/AdminLTE.min.css'); ?>
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <?php echo link_tag('assets/lte/dist/css/skins/skin-blue.min.css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo current_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"></b>SIM</b> Data Siswa</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <?php echo img(array("src"=>"assets/images/mahruskh.jpg","class"=>"user-image","alt"=>"User Image")); ?>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $nama; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <?php echo img(array("src"=>"assets/images/mahruskh.jpg","class"=>"img-circle","alt"=>"User Image")); ?>
                <p>
                <?php echo $nama . " - " . $keterangan; ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php echo img(array("src"=>"assets/images/mahruskh.jpg","class"=>"img-circle","alt"=>"User Image")); ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $nama; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="show"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo site_url('chart/show')?>"><i class="fa fa-pie-chart"></i> <span>Chart</span></a></li>
        <li><a href="#" onclick="add()"><i class="fa fa-plus"></i><span>Tambah Siswa</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="info-box bg-red">
          <span class="info-box-icon fa fa-male"></span>
          <div class="info-box-content">
            <span class="info-box-text">Siswa Laki - Laki</span>
            <span class="info-box-number"><div id="male_students">Loading...</div></span>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="info-box bg-green">
          <span class="info-box-icon"><i class="fa fa-male"></i> <i class="fa fa-female"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Total Seluruh Siswa</span>
            <span class="info-box-number"><div id="all_students">Loading...</div></span>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="info-box bg-blue">
          <span class="info-box-icon fa fa-female"></span>
          <div class="info-box-content">
            <span class="info-box-text">Siswa Perempuan</span>
            <span class="info-box-number"><div id="female_students">Loading...</div></span>
          </div>
        </div>
      </div>
    </div>
        <div class="box box-primary">
          <div class="box-header with-border">
            <h4 class="box-tittle"><i class="fa fa-graduation-cap"></i> Data Siswa</h4>
              <div class="box-tools pull-right">
                  <button type="button" class="btn btn-primary btn-sm" onclick="add()"><i class="fa fa-plus"></i> Tambah Siswa</button>
              </div>
          </div>
          <div class="box-body">
            <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="datasiswa-dt">
                <thead>
                  <tr class="info">
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>JK</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat Lengkap</th>
                    <th>Tools</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
          </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="../assets/lte/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../assets/lte/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../assets/lte/plugins/datatables/jquery.dataTables.js"></script>


<!-- AdminLTE App -->
<script src="../assets/lte/dist/js/app.min.js"></script>
</body>
</html>
<script type="text/javascript">
  var datasiswadt;
  var method;
$(document).ready(function(e) {
   count_students();
   datasiswadt = $('#datasiswa-dt').DataTable({
                      "autoWidth": false,
                      "processing": true,
                      "serverSide": true,
                      "ajax": "show_data",
                      "columns": [
                          {"data":'nis', "class": "text-center"},
                          {"data": "nama"},
                          {"data": "jk", "class": "text-center"},
                          {"data": "tgl_lahir", "class": "text-center"},
                          {"data": "alamat"},
                          {"data": "aksi", "class": "text-center", "orderable":false}
                      ],

                  });
    $('.picker_tgl_lahir').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
    });
});

function add() {
  method = "add";
  $('.modal-title').text("Tambah Siswa")
  $("#act").text("SIMPAN")
  $('[name="nis"]').removeAttr('readonly')
  $("#L").removeAttr('checked')
  $("#P").removeAttr('checked')
  $("#act").attr('class','btn btn-primary')
  $("#form-datasiswa")[0].reset()
  $("#modal-datasiswa").modal("show")
};

function edit(nis) {
  method = "update"
  $('.modal-title').text("Edit Siswa")
  $("#act").text("UPDATE")
  $('[name="nis"]').attr('readonly','true')
  $("#form-datasiswa")[0].reset()
  $("#act").attr('class','btn btn-success')

  $.ajax({
      type: "POST",
      url: "edit",
      data: "nis="+nis,
      dataType: "json",
      success: function (data) {
        $('[name="nis"]').val(data.nis)
        $('[name="nama"]').val(data.nama)
        if (data.jk == "L") {
            $("#L").attr('checked',true)
            $("#P").attr('checked',false)
        }
        else if(data.jk == "P") {
            $("#L").attr('checked',false)
            $("#P").attr('checked',true)
        }
        $('[name="tmpt_lahir"]').val(data.tmpt_lahir)
        $('[name="tgl_lahir"]').val(data.tgl_lahir)
        $('[name="alamat"]').val(data.alamat)
        $('[name="nama_ayah"]').val(data.nama_ayah)
        $('[name="nama_ibu"]').val(data.nama_ibu)
        $("#modal-datasiswa").modal("show")
      }
  });
}

function save() {
  if ($('[name="nis"]').val() == "") {
    alert("NIS is Required!!!")
  }
  else {
    $.ajax({
      type: "POST",
      url: method,
      data: $("#form-datasiswa").serialize(),
      success: function (data) {
        if (data == 1) {
          $("#modal-datasiswa").modal("hide")
          count_students()
          datasiswadt.ajax.reload(null,false)
        }
        else {
          alert("Data is Invalid")
        }
      }
    });
  }
};

function trash(nis) {
    if (confirm("Hapus data dengan ID : " + nis)) {
        $.ajax({
            type: "POST",
            url: "trash",
            data: "nis="+nis,
            success: function () {
              count_students()
              datasiswadt.ajax.reload(null,false)
            }
        });
    }
};

function count_students() {
    $.ajax({
        type: "POST",
        url: "count_students",
        dataType: "json",
        success: function (data) {
            $("#all_students").html(data.all)
            $("#male_students").html(data.male)
            $("#female_students").html(data.female)
        }
    });
};
</script>
