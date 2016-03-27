<?php $this->load->view('header');?>

<div class="container">

  <div>
    <h1>Acesso do Beneficiário</h1>
    <form id="loginForm">
      <div class="form-group">
        <label for="exampleInputEmail1">Número do Cartão</label>
        <input type="text" class="form-control matricula" id="exampleInputEmail1" name="matricula">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
      </div>      
      <button type="submit" class="btn btn-default">Login</button>
      <div class="form-group">
        <a href="<?php echo base_url('beneficiario/esqueci-minha-senha') ?>">Clique aqui se esqueceu sua senha.</a>
      </div>      
    </form>
  </div>

</div><!-- /.container -->

<?php $this->load->view('footer');?>