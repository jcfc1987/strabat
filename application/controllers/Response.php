<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Response extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('public_m');
		$this->load->model('generic_m');
	}

	public function get_countries(){
		$data = $this->public_m->get_country();
		header('Content-Type: application/json');
		echo json_encode($data);
		die();	
	}

	public function get_categoria($id_profissao){
		$data = $this->public_m->get_categoria_by_id($id_profissao);
		header('Content-Type: application/json');
		echo json_encode($data);
		die();
	}

	public function insert_profession($prof){
		$data = array('status' => 0, 'msg' => '');
		if(isset($prof)) {
			$res = $this->generic_m->select_where("profissao", $prof);
			 if(count($res) == 0) {
			 	if($res = $this->generic_m->insert("profissao",array("id" => NULL, "profissao" => $prof ))){
			 		$data['status'] = 1;
			 		$data['msg'] = "Profissao inserida com sucesso!";
			 	} else {
			 		$data['status'] = 0;
			 		$data['msg'] = "Erro de insersão na db";
			 	}
			 } else {
			 	$data['status'] = 0;
			 	$data['msg'] = "dados invalidos";
			 }
			
		}
		header('Content-Type: application/json');
		echo json_encode($data);
		die();
	}

}