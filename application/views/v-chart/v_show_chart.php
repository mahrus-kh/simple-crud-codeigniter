<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Data Siswa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo link_tag('assets/lte/bootstrap/css/bootstrap.css');?>




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
          <p>Mahrus Khomaini</p>
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
        <li><a href="<?php echo site_url('datasiswa/show')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="active"><a href="show"><i class="fa fa-pie-chart"></i> <span>Chart</span></a></li>
        <li><a href="#"><i class="fa fa-plus"></i><span>Tambah Siswa</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-dashboard"></i> Chart</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Chart</li>
      </ol>
    </section>
    <!-- Main content -->
  <section class="content">
    <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Gender Siswa</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="chart-pie-siswa" style="height:250px"></canvas>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Tahun Kelahiran Siswa</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="chart-bar-siswa" style="height:250"></canvas>
            </div>
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
<script src="../assets/lte/plugins/chartjs/Chart.min.js"></script>

<!-- AdminLTE App -->
<script src="../assets/lte/dist/js/app.min.js"></script>
</body>
</html>
<script type="text/javascript">
$(document).ready(function (e){

    //BAR CHART
      var tahun_lahir = [];
      var jml_tahun_lahir = [];

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function(){

          if (xhttp.readyState == 4 && xhttp.status == 200){

            var obj = JSON.parse(xhttp.responseText);

            for (var i=0; i < obj.length; i++) {
              tahun_lahir.push(obj[i]['Thn']);
              jml_tahun_lahir.push(obj[i]['Jml_Thn']);
           }

          }

          var data = {
             labels: tahun_lahir,
             datasets: [
               {
                 fillColor: "green",
                 strokeColor: "green",
                 pointColor: "green",
                 pointStrokeColor: "green",
                 pointHighLightFill: "#FFF",
                 pointHighLightStroke: "#FFF",
                 data: jml_tahun_lahir
               }
             ]
           };

           var areaChartOptions = {
    //Boolean - If we should show the scale at all
    showScale: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: false,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - Whether the line is curved between points
    bezierCurve: true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension: 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot: false,
    //Number - Radius of each point dot in pixels
    pointDotRadius: 4,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth: 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius: 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke: true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth: 2,
    //Boolean - Whether to fill the dataset with a color
    datasetFill: true,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
  };

    var barChartCanvas = $("#chart-bar-siswa").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = data;
    var barChartOptions = {
       //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
       scaleBeginAtZero: true,
       //Boolean - Whether grid lines are shown across the chart
       scaleShowGridLines: true,
       //String - Colour of the grid lines
       scaleGridLineColor: "rgba(0,0,0,.05)",
       //Number - Width of the grid lines
       scaleGridLineWidth: 1,
       //Boolean - Whether to show horizontal lines (except X axis)
       scaleShowHorizontalLines: true,
       //Boolean - Whether to show vertical lines (except Y axis)
       scaleShowVerticalLines: true,
       //Boolean - If there is a stroke on each bar
       barShowStroke: true,
       //Number - Pixel width of the bar stroke
       barStrokeWidth: 2,
       //Number - Spacing between each of the X value sets
       barValueSpacing: 7,
       //Number - Spacing between data sets within X values
       barDatasetSpacing: 1,
       //String - A legend template
       legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
       //Boolean - whether to make the chart responsive
       responsive: true,
       maintainAspectRatio: true
     };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);

      };
      xhttp.open("GET","bar_chart");
      xhttp.send();
      //BAR CHART



      //BAR-PIE
      var data_jk_siswa = [];
      var shttp = new XMLHttpRequest();
      shttp.onreadystatechange = function() {

        if (shttp.readyState == 4 && shttp.status == 200) {


            var obj = JSON.parse(shttp.responseText);

            for (var i = 0; i < obj.length; i++) {
                var warna = ["red","blue"];
                var data_jk={
                    value: obj[i]['Jml_Jk'],
                    color: warna[i],
                    highlight: "green",
                    label: obj[i]['jk']
                }
              data_jk_siswa.push(data_jk);
            }

            var pieChartCanvas = $("#chart-pie-siswa").get(0).getContext("2d");
            var chart_pie = new Chart (pieChartCanvas);

            var chart_pie_options = {
              segmentShowStroke: true,
              segmentStrokeColor: "#ffffff",
              segmentStrokeWidth: 2,
              percentageInnerCutout: 50,
              animationSteps: 70,
              animationEasing: "easeOutBounce",
              animateRotate: true,
              animateScale: false,
              responsive: true,
              maintainAspectRatio: true,
              legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
            };
             chart_pie.Doughnut(data_jk_siswa, chart_pie_options);
        }
      };

      shttp.open("GET","pie_chart");
      shttp.send();
      //BAR PIE

});

</script>
