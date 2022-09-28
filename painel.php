<?php
require_once 'usuario-verifica.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tipo Imobiliária</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-green-light.css">
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="dist/css/estilo.css">

    <script src="js/fusioncharts.js"></script> 
    <script src="js/themes/fusioncharts.theme.candy.js"></script>
</head>
<body class="hold-transition skin-green-light sidebar-mini fixed">
<div class="wrapper">

    <!-- Main Header -->
    <?php include_once "main-header.html" ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php include_once "main-sidebar.html" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    <section class="content-header">
        <div class="row">      
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>00</h3>
                    <p>Imóveis para venda</p>
                    <div class="icon">
                      <!-- <i class="ion ion-clock"></i> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h3>00</h3>
                    <p>Imóveis para aluguel</p>
                    <div class="icon">
                      <!-- <i class="ion-person-stalker"></i> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>00</h3>
                    <p>Imóveis para troca</p>
                    <div class="icon">
                      <!-- <i class="ion ion-sad-outline"></i> -->
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>00</h3>
                    <p>Clientes cadastrados</p>
                    <div class="icon">
                      <!-- <i class="ion-alert-circled"></i> -->
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">     
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Realizando sonhos</h3>
            </div>    
            <div class="box-body no-padding">
              
            </div>
          </div>
        </div>        
      </div>
    </section>
    </div>

    <!-- Main Footer -->
    <?php include_once "main-footer.html" ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

</body>
</html>