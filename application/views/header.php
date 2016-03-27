<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VeroLife</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/starter-template.css');?>" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js') ?>"></script>
    <script type="text/javascript">
      var base_url = '<?php echo base_url(); ?>';
    </script>
  </head>
  <body>

<header>
  <div class="mini-header-container">
    <div class="mini-header-content">
        <div class="mini-header-right">
            <div><a href="http://www.verolife.com.br/nossa-missao">Nossa Missão</a></div>
            <div class="separador-mini"></div>
            <div><a href="http://www.verolife.com.br/perguntas-frequentes">Perguntas Freqüentes</a></div>
            <div class="separador-mini"></div>
            <div class="mini-telefone"><span>S•E•U Atendimento:</span> 4003 2973</div>
        </div>
    </div>
  </div> 
</header>

<?php 

if($this->session->userdata('logged_in') == TRUE) {  
  $this->load->view('menu_logado');
} else {
  $this->load->view('menu');
}
?>

