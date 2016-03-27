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

    <style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>

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
        <h1>Detalhes do prestador</h1>        
      </div>

        <div class="col-md-12">
          <div class="form-group">
            <?php echo $prestador['nomeFantasia']; ?>
          </div>      
          <div class="form-group">
            <?php 
            $end = $prestador['enderecos'][0]['logradouro'];
            $end .= ' '.$prestador['enderecos'][0]['numero'];
            if ($prestador['enderecos'][0]['complemento'] != '') {
              $end .= ', '.$prestador['enderecos'][0]['complemento'];  
            }
            $end .= '<br>'.$prestador['enderecos'][0]['bairro'];  
            $end .= ' - '.$prestador['enderecos'][0]['municipio'];  
            $end .= '/'.$prestador['enderecos'][0]['siglaUF'];  
            $end .= '<br>CEP '.$prestador['enderecos'][0]['cep'];  
            ?>
            <?php echo  $end;?>
          </div>      
          <div class="form-group">
            <div class="especialidades-txt">Especialidades:</div>
            <?php foreach ($prestador['especialidades'] as $key => $especialidade): ?>
              <?php echo '<br>'.$especialidade['descricao'] ?>
            <?php endforeach ?>
          </div>      
        </div>
        <div id="map"></div>
    
    </div>
    
    <script>
      function initMap() {
        
        var myLatLng = {lat: <?php echo $prestador['enderecos'][0]['latitude'];?>, lng: <?php echo $prestador['enderecos'][0]['longitude'];?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map          
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>        
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>  

    <?php $this->load->view('footer');?>     
