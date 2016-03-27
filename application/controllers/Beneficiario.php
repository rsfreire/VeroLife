<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beneficiario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('beneficiario_model');
	}	

	public function index()
	{
		$this->isLogged();

		$matricula = $this->session->userdata('matricula');
		$data['beneficiario'] = $this->beneficiario_model->getBeneficiario($matricula);
		
		$this->load->view('beneficiario', $data);
	}

	private function isLogged(){
		if(!$this->session->userdata('logged_in')) {
			redirect(base_url(), 'refresh');
		}
	}

	public function login(){
		$this->load->view('login');	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url(), "refresh");
	}

	public function do_login(){

		$this->form_validation->set_rules('matricula', 'Número do Cartão', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

    if ($this->form_validation->run() == FALSE) {
			$this->output->set_status_header('412');
			$this->data['message'] = validation_errors();
			echo json_encode($this->data);
			exit;
    } else {
      $result = $this->beneficiario_model->login($this->input->post());
      if ($result['status'] == '200') {
      	echo 'OK';
      } else {
      	$this->output->set_status_header($result['status']);
				$this->data['message'] = $result['message'];
				echo json_encode($this->data);				
      }
    }	
	}

	public function cadastre_se(){
		$this->load->view('cadastro');	
	}

	public function do_cadastro(){
		
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[beneficiarios.email]');
		$this->form_validation->set_rules('matricula', 'Matrícula', 'required');
		$this->form_validation->set_rules('cpf', 'CPF', 'is_unique[beneficiarios.cpf]');
		$this->form_validation->set_rules('senha', 'Senha', 'required|min_length[6]');
		$this->form_validation->set_rules('confirme_senha', 'Digite Novamente Sua Senha', 'required|min_length[6]|matches[senha]');
		
    if ($this->form_validation->run() == FALSE) {
			$this->output->set_status_header('412');
			$this->data['message'] = validation_errors();
			echo json_encode($this->data);
			exit;
    } else {
      
      $result = $this->beneficiario_model->cadastro($this->input->post());
      
      if ($result['status'] == '201') {
      	echo 'OK';
      } else {
      	$this->output->set_status_header($result['status']);
				$this->data['message'] = $result['message'];
				$this->data['object'] = $result['object'];
				echo json_encode($this->data);				
      }
    }	
	}

	public function trocar_senha(){
		$this->isLogged();		
		$this->load->view('trocar_senha');		
	}

	public function do_trocar_senha(){
		$this->isLogged();

		$this->form_validation->set_rules('senha', 'Nova Senha', 'required|min_length[6]');
		$this->form_validation->set_rules('confirme_senha', 'Confirme Sua Nova Senha', 'required|min_length[6]|matches[senha]');
		
    if ($this->form_validation->run() == FALSE) {
			$this->output->set_status_header('412');
			$this->data['message'] = validation_errors();
			echo json_encode($this->data);
			exit;
    } else {
      
      $matricula = $this->session->userdata('matricula');
      $result = $this->beneficiario_model->updateSenha($this->input->post(), $matricula);
      
      if ($result['status'] == '201') {
      	echo 'Senha atualizada com sucesso.';
      } else {
      	$this->output->set_status_header($result['status']);
				$this->data['message'] = $result['message'];
				echo json_encode($this->data);				
      }
    }	
	}

	public function esqueci_minha_senha(){	
		$this->load->view('esqueci_senha');		
	}

	public function do_esqueci_minha_senha(){	
		
		$this->form_validation->set_rules('matricula', 'Matrícula', 'required');
		
    if ($this->form_validation->run() == FALSE) {
			$this->output->set_status_header('412');
			$this->data['message'] = validation_errors();
			echo json_encode($this->data);
			exit;
    } else {
      
      $result = $this->beneficiario_model->reenviarSenha($this->input->post('matricula'));
      
      if ($result['status'] == '201') {
      	echo 'Um email foi enviado para você com sua nova senha.';
      } else {
      	$this->output->set_status_header($result['status']);
				$this->data['message'] = $result['message'];
				echo json_encode($this->data);				
      }
    }		
	}
}
