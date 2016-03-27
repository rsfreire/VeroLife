<?php $this->load->view('header');?>

<div class="container">

  <div>
    <h1>Trocar Senha</h1>
    <form id="senhaForm">      
      <div class="form-group">
        <label for="senha">Nova Senha *</label>
        <input type="password" class="form-control" id="senha" name="senha">
      </div>
      <div class="form-group">
        <label for="confirmeSenha">Confirme Sua Nova Senha *</label>
        <input type="password" class="form-control" id="confirmeSenha" name="confirme_senha">
      </div>      
      <button type="submit" class="btn btn-default">Atualizar</button>
    </form>
  </div>

</div><!-- /.container -->

<?php $this->load->view('footer');?>