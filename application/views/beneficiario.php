<?php $this->load->view('header'); ?>

<script type="text/javascript">
	function printDiv(divName) {
		 var printContents = document.getElementById(divName).innerHTML;
		 var originalContents = document.body.innerHTML;
	
		 document.body.innerHTML = printContents;
	
		 window.print();
	
		 document.body.innerHTML = originalContents;
	}
</script>

<div class="container">
  <a class="btn-print" onclick="printDiv('print')">Imprimir</a>
  
  <div>
    <h1>Dados do Beneficiário</h1>
      <div class="form-group">
        <label>Nome do Beneficiário</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['NmBeneficiario']; ?>">
      </div>
      <div class="form-group">
        <label>Data de Nascimento </label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['DtNascimento']; ?>">
      </div>
      <div class="form-group">
        <label>Número do Cartão (CNS)</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['CartaoNacionalSaude']; ?>">
      </div>
      <div class="form-group">
        <label>Matrícula do Beneficiário</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['MatriculaBeneficiario']; ?>">
      </div>      
  </div>

  <div>
    <h1>Dados da Operadora</h1>
      <div class="form-group">
        <label>Código Registro ANS</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['RegistroAns']; ?>">
      </div>
      <div class="form-group">
        <label>Nome Operador (Razão Social)</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['DeSingular']; ?>">
      </div>
      <div class="form-group">
        <label>Número de registro do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['RegistroAnsPlano']; ?>">
      </div>
      <div class="form-group">
        <label>Nome do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['NmPlanoAns']; ?>">
      </div>      
      <div class="form-group">
        <label>Plano regulamentado</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['IdRegulamento']; ?>">
      </div>      
      <div class="form-group">
        <label>Segmentação assistencial do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['TipoCobertura']; ?>">
      </div>      
      <div class="form-group">
        <label>Padrão de acomodação do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['Acomodacao']; ?>">
      </div>      
      <div class="form-group">
        <label>Área de Abrangência</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['Abrangencia']; ?>">
      </div>      
  </div>

  
  <div>
    <h1>Dados da Empresa</h1>
      <div class="form-group">
        <label>Nome Empresa (Razão social)</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['Contratante']; ?>">
      </div>
      <div class="form-group">
        <label>Número do contrato</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['Contrato']; ?>">
      </div>
      <div class="form-group">
        <label>Informação sobre o tipo de contratação</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['TipoContratacao']; ?>">
      </div>
      <div class="form-group">
        <label>Data contratação do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['DtContratacao']; ?>">
      </div>      
      <div class="form-group">
        <label>Data início de cobertura contratual</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['DtCoberturaContratual']; ?>">
      </div>                  
  </div>
  
  <div>
    <h1>Carências</h1>
    <?php     
    $carencias = $beneficiario['DadosCarencia'];
    // $primeiroElemento = array_values($carencias)[0];
    $primeiroElemento = array_shift(array_slice($carencias, 0, 1));
    
    if (!is_null($primeiroElemento['Descricao'])) { ?>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th>Carência</th>
                  <th>Quantidade de Dias</th>
                  <th>Prazo Término</th>
              </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($carencias as $key => $carencia): 
            ?>  
              <tr>
                  <td><?php echo $carencia['Descricao']; ?></td>
                  <td><?php echo $carencia['DiasCarencia']; ?></td>
                  <td><?php echo $carencia['DataTerminoCPT']; ?></td>
              </tr>   
            <?php endforeach ?>         
          </tbody>
      </table>
    <?php } else { ?>
      <label>Sem Carências.</label>
    <?php } ?>
  </div>

</div><!-- /.container -->








<div class="container" id="print" style="display:none;">

  <div><img src="../../assets/images/logo.png" width="150" height="60" /></div>
  
  <div>
    <h1>Dados do Beneficiário</h1>
      <div class="form-group">
        <label>Nome do Beneficiário</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['NmBeneficiario']; ?>">
      </div>
      <div class="form-group">
        <label>Data de Nascimento </label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['DtNascimento']; ?>">
      </div>
      <div class="form-group">
        <label>Número do Cartão (CNS)</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['CartaoNacionalSaude']; ?>">
      </div>
      <div class="form-group">
        <label>Matrícula do Beneficiário</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosBeneficiario']['MatriculaBeneficiario']; ?>">
      </div>      
  </div>

  <div>
    <h1>Dados da Operadora</h1>
      <div class="form-group">
        <label>Código Registro ANS</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['RegistroAns']; ?>">
      </div>
      <div class="form-group">
        <label>Nome Operador (Razão Social)</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['DeSingular']; ?>">
      </div>
      <div class="form-group">
        <label>Número de registro do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['RegistroAnsPlano']; ?>">
      </div>
      <div class="form-group">
        <label>Nome do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['NmPlanoAns']; ?>">
      </div>      
      <div class="form-group">
        <label>Plano regulamentado</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['IdRegulamento']; ?>">
      </div>      
      <div class="form-group">
        <label>Segmentação assistencial do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['TipoCobertura']; ?>">
      </div>      
      <div class="form-group">
        <label>Padrão de acomodação do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['Acomodacao']; ?>">
      </div>      
      <div class="form-group">
        <label>Área de Abrangência</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosOperadora']['Abrangencia']; ?>">
      </div>      
  </div>

  
  <div>
    <h1>Dados da Empresa</h1>
      <div class="form-group">
        <label>Nome Empresa (Razão social)</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['Contratante']; ?>">
      </div>
      <div class="form-group">
        <label>Número do contrato</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['Contrato']; ?>">
      </div>
      <div class="form-group">
        <label>Informação sobre o tipo de contratação</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['TipoContratacao']; ?>">
      </div><br /><br />
      <div class="form-group">
        <label>Data contratação do plano</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['DtContratacao']; ?>">
      </div>      
      <div class="form-group">
        <label>Data início de cobertura contratual</label>
        <input type="text" class="form-control" disabled="disabled" value="<?php echo $beneficiario['DadosEmpresa']['DtCoberturaContratual']; ?>">
      </div>                  
  </div>
  
  <div>
    <h1>Carências</h1>
    <?php     
    $carencias = $beneficiario['DadosCarencia'];
    // $primeiroElemento = array_values($carencias)[0];
    $primeiroElemento = array_shift(array_slice($carencias, 0, 1));
    
    if (!is_null($primeiroElemento['Descricao'])) { ?>
      <table class="table table-condensed">
          <thead>
              <tr>
                  <th>Carência</th>
                  <th>Quantidade de Dias</th>
                  <th>Prazo Término</th>
              </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($carencias as $key => $carencia): 
            ?>  
              <tr>
                  <td><?php echo $carencia['Descricao']; ?></td>
                  <td><?php echo $carencia['DiasCarencia']; ?></td>
                  <td><?php echo $carencia['DataTerminoCPT']; ?></td>
              </tr>   
            <?php endforeach ?>         
          </tbody>
      </table>
    <?php } else { ?>
      <label>Sem Carências.</label>
    <?php } ?>
  </div>
  
  <div class="footer-container" style="width:100%; background:#e6e7e8; margin-top:50px; border-top: solid 2px #000;">
  	<div class="footer-content">
    	<div class="footer-linha3">
        
            <div>Av. Paulista, 925 | conj. 102 |  CEP 01311 100   | Bela Vista | São Paulo | SP<br />
            Av. Mauro Ramos, 1.970 | Térreo | CEP 88020 304 | Centro | Florianópolis | SC<br />
            Atendimento presencial: Rua Emílio Blum, 131 | Torre A | sala 406 | Hantei Office Building | Centro | Florianópolis | SC<br />
            CNPJ 01.599.587/0001-60
</div>
            <div>
                <div class="footer-telefone" style="background:none; padding-left:0px;"><span style="font-family:myriad-light;">S.E.U Atendimento</span> 4003 2973
</div>
              <div class="footer-ans" style="margin-right: 80px;"><img src="../../assets/images/img-selo-ans.png" width="213" height="54" /></div>
              <div class="footer-ans-telefone">Disque ANS 0800 7019656</div>
            </div>
        
        </div>
    </div>
  </div>

</div><!-- /.container -->

<?php $this->load->view('footer');?>