<?php
  require_once 'classes/Cliente.php';
  $cliente = new Cliente();
  $lista = $cliente->listar();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TIPO Imobiliária</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-green-light.css">
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="dist/css/estilo.css">
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
            <h1 class="titulo">Gerenciar Clientes</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Clientes</a></li>
                <li class="active">Listar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="cliente-form.php" class="btn btn-info">
                                <i class="fa fa-user-plus"></i><span> Novo Cliente</span>
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>                                    
                                    <th class="acao">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lista as $linha): ?>
                                        <tr>
                                            <td><?php echo $linha['id'] ?></a></td>
                                            <td><?php echo $linha['nome'] ?></a></td>
                                            <td><?php echo $linha['telefone'] ?></a></td>
                                            <td><?php echo $linha['email'] ?></a></td>
                                            <td>
                                            <a href="#" 
                                                class="btn btn-sm btn-primary">Detalhes</a>              
                                            <a href="#" 
                                                class="btn btn-sm btn-warning">Editar</a>
                                            <a href="#" 
                                                class="btn btn-sm btn-danger">Excluir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>                          
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div> <!-- fim row -->
        </section>
    </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include_once "main-footer.html" ?>

</div>
<!-- ./wrapper -->

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html> 