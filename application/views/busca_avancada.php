<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/starter-template.css') ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      #tabelaPrestadores tr {cursor: pointer;}
    </style>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/busca_avancada.js') ?>"></script>

    <script type="text/javascript">
      var base_url = '<?php echo base_url(); ?>';
    </script>

  </head>


  <body>

    <div class="container bloco-rede-container">

      <div class="starter-template">
        <h1 class="bloco-rede-titulo">Rede credenciada</h1>        
      </div>

      <div>
        <form action="<?php echo base_url('busca-avancada/resultado-busca');?>" method="get" target="_blank">
          <div class="form-group">
            <!--<label for="exampleInputEmail1">Planos</label>-->
            <select class="form-control" id="plano" name="plano">
              <option value="">Plano:</option>
            </select>
          </div>
          <div class="form-group">
            <!--<label for="exampleInputEmail1">Estados</label>-->
            <select class="form-control" id="uf" name="uf" disabled>
              <option value="">Estado:</option>
            </select>
          </div>
          <div class="form-group">
            <!--<label for="exampleInputEmail1">Municípios</label>-->
            <select class="form-control" id="municipio" name="municipio" disabled>
              <option value="">Município:</option>
            </select>
          </div>
          <div class="form-group">
            <!--<label for="exampleInputEmail1">Bairros</label>-->
            <select class="form-control" id="bairro" name="bairro" disabled>
              <option value="">Bairro:</option>
            </select>
          </div>
          <div class="form-group">
            <!--<label for="exampleInputEmail1">Tipos de Serviço</label>-->
            <select class="form-control" id="tipoPrestador" name="tipoPrestador" disabled>
              <option value="">Tipo de serviço:</option>
            </select>
          </div>
          <div class="form-group">
            <!--<label for="exampleInputEmail1">Especialidades</label>-->
            <select class="form-control" id="especialidade" name="especialidade" disabled>
              <option value="">Especialidade:</option>
            </select>
          </div>
          <button type="submit" class="btn btn-default" id="buscar">Pesquisar</button>
        </form>
      </div>

      <div style="display: none;" id="divResultados">
        <table id="tabelaPrestadores" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>Tipo</th>
              <th>Nome</th>
              <th>Mapa</th>                
            </tr>
        </thead>        
        <tbody>            
        </tbody>
      </div>

    </div><!-- /.container -->

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>        
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>        
  </body>
</html>