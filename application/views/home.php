<?php $this->load->view('header');?>

<div class="container-home">
  <div class="conteudo-home">
  	<div class="banner"></div>
  	<div class="conteudo-home-texto bold">Seja bem-vindo ao painel do Beneficiário VeroLife.</div>
	<div class="conteudo-home-texto">Cadastre-se e tenha acesso à todas as informações sobre o seu plano de saúde.<br />
    Se já estiver cadastrado, clique em Acessar e insira os dados solicitados para poder acessar o seu painel.</div><br /><br />
    <a href="<?php echo base_url('beneficiario/login') ?>">Acessar</a> | <a href="<?php echo base_url('beneficiario/cadastre-se') ?>">Cadastre-se</a>
  </div>

</div><!-- /.container -->

<?php $this->load->view('footer');?>