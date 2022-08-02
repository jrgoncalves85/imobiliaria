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
            <h1 class="titulo">Gerenciar Imóveis</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Imóveis</a></li>
                <li class="active">Editar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="box">

                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#pessoais" data-toggle="tab">Dados do Imóvel</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="pessoais">
                                    <div class="post"><br>
                                        <form id="form1" name="form1" class="form-horizontal" action="imovel-gravar.php" method="post" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="inputId" value="">

                                                    <div class="form-group">
                                                        <label for="inputTitulo" class="col-md-2 control-label">Título:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputTitulo" name="inputTitulo" >
                                                        </div>                                                        
                                                    </div>

                                                    <div class="form-group">
                                                    <label for="inputImagem" class="col-md-2 control-label">Imagem:</label>
                                                        <div class="col-sm-9">
                                                            <input type="file" name="arquivo" id="arquivo" value="Alterar foto" /></label>
                                                            <p><i class="fa fa-file-image-o margin-r-5"></i>Selecione a sua imagem de destaque do imóvel e clique no botão "Salvar dados"; Somente imagens JPG e PNG - Recomendado: 800x600 pixels</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Fim da primeira linha -->

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="box-footer">
                                                        <label for="groupButton"></label>
                                                        <div class="col-sm-3 col-sm-offset-2 pull-left">
                                                            <button type="submit" id="groupButton" class="btn btn-primary " title="Salvar as alterações">
                                                                <i class="fa fa-save"></i> Salvar dados
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Fim da div tab content -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Coluna assistente -->
                <div class="col-xs-12 col-sm-4">
                  <div class="box box-default dicas">
                    <div class="box-body box-profile">
                      <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name pull-left">Área de informações</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Coluna assistente -->

            </div> <!-- fim row -->

        </section>
    </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include_once "main-footer.html" ?>

</div>
<!-- ./wrapper -->

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>