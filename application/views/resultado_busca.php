

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css') ?>" rel="stylesheet">

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
    <script type="text/javascript">
      var base_url = '<?php echo base_url(); ?>';
    </script>


  <script type="text/javascript">
    
    $(document).ready(function() { 

      var table = $('#tabelaPrestadores').DataTable( {
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Portuguese-Brasil.json"
        }
      });

      $('#tabelaPrestadores tbody').off( 'click', 'tr');

      $('#tabelaPrestadores tbody').on( 'click', 'tr', function () {        
        var id = $(this).attr('id');        
        var win = window.open(base_url + 'prestador-detalhes/' + id, '_blank');
        win.focus();
      }); 
      
    });

  </script>
  
	<?php $this->load->view('header_busca'); ?>

    <div class="container">

      <div class="starter-template">
        <h1>Rede credenciada</h1>        
      </div>

      <div id="divResultados">
        <table id="tabelaPrestadores" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Tipo</th>
            <th>Nome</th>
            <th>Mapa</th>                
          </tr>
        </thead>        
        <tbody>         
          <?php foreach ($data as $key => $credenciado) { ?>
            <tr id="<?php echo $credenciado['id']; ?>">
              <td><?php echo $credenciado['tipo']; ?></td>
              <td><?php echo $credenciado['nome']; ?></td>
              <td><?php echo $credenciado['mapa']; ?></td>
            </tr>     
          <?php } ?>
        </tbody>
        </table>
      </div></div>

    </div><!-- /.container -->
 	
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>        
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>  
    
    <?php $this->load->view('footer');?>     
