<?php $this->load->view('header');?>

<div class="container">

  <div>
    <h1>Esqueci Minha Senha</h1>
    <form id="esqueciSenhaForm">      
      <div class="form-group">
        <label for="matricula">Número do Cartão *</label>
        <input type="text" class="form-control" id="matricula" name="matricula">
      </div>      
      <button type="submit" class="btn btn-default">Enviar Nova Senha</button>
    </form>
  </div>

</div><!-- /.container -->

<?php $this->load->view('footer');?>