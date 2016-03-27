<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testes extends CI_Controller {


	// public function index() {
	// 	$this->load->library('email');

	// 	// $emailConfig = array(			
	// 	// 	'mailtype'  => 'html',
	// 	// 	'protocol'  => 'smtp',
	// 	// 	'smtp_host' => '10.4.160.47',
	// 	// 	'newline'   => "\r\n",
	// 	// 	'crlf'      => "\r\n",
	// 	// );

	// 	$emailConfig = array(			
	// 		'protocol'  => "smtp",
	// 		'smtp_host' => "ssl://smtp.gmail.com",
	// 		'smtp_port' => "465",
	// 		'smtp_user' => "thgvieira@gmail.com",
	// 		'smtp_pass' => "Tvm435!!",
	// 		'charset'   => "utf-8",
	// 		'mailtype'  => "html",
	// 		'newline'   => "\r\n",
	// 	);


	// 	$this->email->initialize($emailConfig);
	// 	$this->email->from('thgvieira@gmail.com', 'VeroLife');		
	// 	$this->email->to('thgvieira@gmail.com');			
	// 	$this->email->subject('[CONFIRMAÇÃO] Maratona Fotográfica 2015 - FNAC');		
	// 	$message = $this->load->view('emails/confirmacao','', TRUE);
	// 	$this->email->message($message);
	// 	$this->email->send();
	// 	echo $this->email->print_debugger();
	// }
	
	public function index(){
			//Inicialização das variáveis
			$wsdl   = "http://gestao.hml.qualirede.com.br:5030/Beneficiario.svc?wsdl";
			
			//Exemplo de inicialização de um cliente SOAP sem proxy
			$client = new soapClient($wsdl, $options = array(
			  'trace'      => 1,
			  'exceptions' => 0,
			));

			$arguments = array('matricula' => "0010002000002004");

			$getBeneficiarios = new GetBeneficiarios;
			$getBeneficiarios->matricula = "0010002000002004";
			$response = $client->__soapCall("GetBeneficiarios", $getBeneficiarios);

			/* Print webservice response */
			echo '<pre>';
			var_dump($client->__getFunctions()); 
			// var_dump($client->__getTypes());
			// var_dump($response);
	}
}
class GetBeneficiarios {
  public $matricula; // string  
}