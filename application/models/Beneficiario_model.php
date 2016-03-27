<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beneficiario_model extends CI_Model {

	public function __construct() {
		parent::__construct();		
		global $wsdl, $client;

    $this->load->library("Nusoap_lib");
    $proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
    $proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
    $proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
    $proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';

    // $wsdl = "http://gestao.hml.qualirede.com.br:5030/Beneficiario.svc?wsdl"; // Develop
    $wsdl = "http://verolife02.cloudapp.net:5030/Beneficiario.svc?wsdl"; //Produção
    $client = new nusoap_client($wsdl, 'wsdl', $proxyhost, $proxyport, $proxyusername, $proxypassword);

    $err = $client->getError();
    if ($err) {
        echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
    }
	}

	public function login($post) {

		$matricula = $post['matricula'];
		$senha     = $post['senha'];

		$beneficiario = $this->db->get_where('beneficiarios', array('matricula' => $matricula));
		$beneficiario = $beneficiario->result();

		if (!is_null($beneficiario) && count($beneficiario) > 0){
			if ($this->encrypt->decode($beneficiario[0]->senha) == $senha){

				$newdata = array(
					'nome'      => $beneficiario[0]->nome,
					'matricula' => $beneficiario[0]->matricula,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($newdata);

				$obj['status'] = '200';
				return $obj;
			} else {
				$obj['message'] = 'Número do cartão ou senha inválida.';
				$obj['status'] = '404';
				return $obj;
			}
		} else {
			$obj['message'] = 'Beneficiário não encontrado. Caso você ainda não tenha feito o cadastro clique no botão <b>Cadastre-se</b> no menu.';
			$obj['status'] = '404';
			return $obj;
		}
	}

	public function cadastro($post) {

		$email     = $post['email'];
		$matricula = $post['matricula'];
		$cpf       = $post['cpf'];
		$senha     = $post['senha'];

		$beneficiarioOnService = $this->getBeneficiario($matricula);
		if (is_null($beneficiarioOnService)) {
			$obj['object'] = $beneficiarioOnService;
			$obj['status'] = '401';
			$obj['message'] = 'Número do Cartão não é válido.';
			return $obj;			
		}
		$dataBeneficiario = array(
			'email'         => $email,
			'matricula'     => $matricula,
			'cpf'           => $cpf,
			'senha'         => $this->encrypt->encode($senha),
			'cadastrado_em' => date('Y-m-d h:i:s'),
			);

		$this->db->insert('beneficiarios', $dataBeneficiario);

		$this->login($post);

		$obj['status'] = '201';
		return $obj;
	}

	public function getBeneficiario($matricula){		
		$result = $this->getBeneficiarioData($matricula);		
		// var_dump($result['GetBeneficiariosResult']);exit;
		return $result['GetBeneficiariosResult'];
	}

	public function getBeneficiarioOnBD($matricula){
		$beneficiario = $this->db->get_where('beneficiarios', array('matricula' => $matricula));
		$beneficiario = $beneficiario->result();
		
		return count($beneficiario) > 0 ? $beneficiario[0] : NULL;		
	}

	// 0010002000003000
	private function getBeneficiarioData($matricula){
		global $wsdl, $client;

    try {
        $param = array('matricula' => $matricula);
        
        $client->soap_defencoding = 'UTF-8';
        $client->decode_utf8 = false;

        $result = $client->call('GetBeneficiarios', $param, '', '', false, true);

        return $result;
    } catch (SoapFault $exception) {
        echo $exception;
    }
	}

	public function updateSenha($post, $matricula) {

		$senha = $post['senha'];

		$dataBeneficiario = array(			
			'senha'         => $this->encrypt->encode($senha),
			'atualizado_em' => date('Y-m-d h:i:s'),
			);

		$this->db->where('matricula', $matricula);
		$this->db->update('beneficiarios', $dataBeneficiario);

		$obj['status'] = '201';
		return $obj;
	}

	public function reenviarSenha($matricula) {		

		$beneficiario = $this->getBeneficiarioOnBD($matricula);
		if (is_null($beneficiario) || count($beneficiario) < 1){			
			$obj['message'] = 'Beneficiário não encontrado. Caso você ainda não tenha feito o cadastro clique no botão <b>Cadastre-se</b> no menu.';
			$obj['status'] = '404';
			return $obj;
		}

		$novaSenha = $this->seedPassword(6);

		$dataBeneficiario = array(			
			'senha'         => $this->encrypt->encode($novaSenha),
			'atualizado_em' => date('Y-m-d h:i:s'),
			);

		$this->db->where('matricula', $matricula);
		$this->db->update('beneficiarios', $dataBeneficiario);

		// $emailConfig = array(			
		// 	'mailtype'  => 'html',
		// 	'protocol'  => 'smtp',
		// 	'smtp_host' => '10.4.160.47',
		// 	'newline'   => "\r\n",
		// 	'crlf'      => "\r\n",
		// );

		$emailConfig = array(			
			'protocol'  => "smtp",
			'smtp_host' => "ssl://smtp.gmail.com",
			'smtp_port' => "465",
			'smtp_user' => "verolife.wordpress@gmail.com",
			'smtp_pass' => "1234vero",
			'charset'   => "utf-8",
			'mailtype'  => "html",
			'newline'   => "\r\n",
		);


		$this->email->initialize($emailConfig);
		$this->email->from('verolife.wordpress@gmail.com', 'VeroLife');		
		$this->email->to($beneficiario->nome.'<'.$beneficiario->email.'>');	

		$this->email->subject('[VeroLife] Reenvio de Senha');		
		
		$email_data = array('senha' => $novaSenha);
		$data['email_data'] = $email_data;
		
		$message = $this->load->view('emails/nova_senha',$data, TRUE);
		$this->email->message($message);
		
		$this->email->send();
		// echo $this->email->print_debugger();
		
		$obj['status'] = '201';
		return $obj;
	}

	private function seedPassword($tamanho = 6, $maiusculas = true, $numeros = true, $simbolos = false) {
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		$retorno = '';
		$caracteres = '';

		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;

		$len = strlen($caracteres);
		for ($n = 1; $n <= $tamanho; $n++) {
			$rand = mt_rand(1, $len);
			$retorno .= $caracteres[$rand-1];
		}
		return $retorno;
	}
}
