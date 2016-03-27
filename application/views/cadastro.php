<?php $this->load->view('header');?>

<div class="container">

  <div>
    <h1>Cadastro do Beneficiário</h1>
    <form id="cadastroForm">      
      <div class="form-group">
        <label for="email">Email *</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="matricula">Número do Cartão *</label>
        <input type="text" class="form-control matricula" id="matricula" name="matricula">
      </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control CPF" id="cpf" name="cpf">
      </div>
      <div class="form-group">
        <label for="senha">Senha *</label>
        <input type="password" class="form-control" id="senha" name="senha">
      </div>
      <div class="form-group">
        <label for="confirmeSenha">Digite Novamente Sua Senha *</label>
        <input type="password" class="form-control" id="confirmeSenha" name="confirme_senha">
      </div>      
      <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
  </div>

</div><!-- /.container -->

<?php $this->load->view('footer');?>