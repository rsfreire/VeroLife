<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busca_avancada extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Busca_model", "busca");
	}	

	public function index()
	{	
		$this->load->view('busca_avancada');
	}

	public function get_data(){
		$data = $this->busca->buscar();
		echo json_encode($data);
	}

	public function detalhes($id){
		$data['lat'] = '-8.062347';
		$data['lng'] = '-34.903207';

		$prestador = $this->busca->prestador($id);
		
		$data['prestador'] = $prestador;
		// var_dump($prestador);exit;
		$this->load->view('prestador_detalhes', $data);
	}

	public function resultado_busca(){
		
		$plano = $this->input->get('plano');
		$uf = $this->input->get('uf');
		$municipio = $this->input->get('municipio');
		$bairro = $this->input->get('bairro');
		$tipoPrestador = $this->input->get('tipoPrestador');
		$especialidade = $this->input->get('especialidade');
		
		$data = $this->busca->buscar($plano, $uf, $municipio, $bairro, $tipoPrestador, $especialidade);

		$this->load->view('resultado_busca', $data);
	}
}
