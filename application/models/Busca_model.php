<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busca_model extends CI_Model {

	public function __construct() {
		parent::__construct();		
	}

	public function buscar($plano, $uf, $municipio, $bairro, $tipoPrestador, $especialidade) {

// codigoTipoPrestador
// nomePrestador
// nomeFantasia
// razaoSocial
// codigoUf
// codigoMunicipio
// nomeBairro
// codigoPlano
// codigoEspecialidade
// _offset
// _limit

		$query = "?";

		if ($plano != "") {
			$query .= "codigoPlano=".$plano."&";
		}
		if ($uf != "") {
			$query .= "codigoUf=".$uf."&";
		}
		if ($municipio != "") {
			$query .= "codigoMunicipio=".$municipio."&";
		}
		if ($bairro != "") {
			$query .= "nomeBairro=".$bairro."&";
		}
		if ($tipoPrestador != "") {
			$query .= "codigoTipoPrestador=".$tipoPrestador."&";
		}
		if ($especialidade != "") {
			$query .= "codigoEspecialidade=".$especialidade."&";
		}

		if ($query == "?") {
			$query = "";
		}

		$url = URL_SERVICO.CODIGO_ANS_OPERADORA.'/prestadores'.$query;
		$prestadores = json_decode(file_get_contents($url),true);

		$result = array();
		$result['data'] = array();

		foreach ($prestadores as $key => $prestador) {
			$data = array(
				'id' => $prestador['codigo'],
				'tipo' => $prestador['tipoPrestador'],
				'nome' => $prestador['nomeFantasia'],
				'mapa' => 'teste',
				);

			array_push($result['data'], $data);
		}

		return $result;
	}

	public function prestador($id) {
		$url = URL_SERVICO.CODIGO_ANS_OPERADORA.'/prestadores/'.$id;
		$prestador = json_decode(file_get_contents($url),true);

		return $prestador;
	}
}
