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

  <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('inputRua').value=("");
            document.getElementById('inputBairro').value=("");
            document.getElementById('inputCidade').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('inputRua').value=(conteudo.logradouro);
            document.getElementById('inputBairro').value=(conteudo.bairro);
            document.getElementById('inputCidade').value=(conteudo.localidade);     
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('inputRua').value="...";
                document.getElementById('inputBairro').value="...";
                document.getElementById('inputCidade').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    </script>

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
                                <li class="active"><a href="#pessoais" data-toggle="tab">Dados do Cliente</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="pessoais">
                                    <div class="post"><br>
                                        <form id="form1" name="form1" class="form-horizontal" action="cliente-gravar.php" method="post" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="inputId" value="">

                                                    <div class="form-group">
                                                        <label for="inputNome" class="col-md-2 control-label">Nome:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="inputNome" id="inputNome" >
                                                        </div>
                                                        <label for="inputTelefone" class="col-md-1 control-label">Celular:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" name="inputTelefone" id="inputTelefone" data-inputmask="'mask': ['(99) 99999-9999']" data-mask="" inputmode="text" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">E-mail:</label>
                                                        <div class="col-sm-5">
                                                            <input type="email" class="form-control" name="inputEmail" id="inputEmail" >
                                                        </div>
                                                        <label for="inputSenha" class="col-md-1 control-label">Senha:</label>
                                                        <div class="col-sm-4">
                                                            <input type="password" class="form-control" name="inputSenha" id="inputSenha" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cep" class="col-md-2 control-label">CEP:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" name="cep" id="cep" maxlength="9" onblur="pesquisacep(this.value);" />
                                                        </div>                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputRua" class="col-md-2 control-label">Rua:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="inputRua" id="inputRua" >
                                                        </div>
                                                        <label for="inputNumero" class="col-md-1 control-label">Número:</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" name="inputNumero" id="inputNumero" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputBairro" class="col-md-2 control-label">Bairro:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="inputBairro" id="inputBairro" >
                                                        </div>
                                                        <label for="inputCidade" class="col-md-1 control-label">Cidade:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" name="inputCidade" id="inputCidade" >
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

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()    
    //Date picker
    $('#datepicker').datepicker({ autoclose: true })
    //Timepicker
    $('.timepicker').timepicker({ showInputs: false })
  })
</script>
</body>
</html> 