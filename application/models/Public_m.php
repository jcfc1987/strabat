<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_m extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	public function get_country() {
		return $this->db->get('country')->result();		
	}

	public function get_identification_type() {
		return $this->db->get('identificacao')->result();		
	}

	public function get_profission() {
		return $this->db->get('profissao')->result();		
	}

	public function get_categoria() {
		return $this->db->get('categoria')->result();		
	}

	function get_categoria_by_id($id_profissao){
		return $this->db->from("categoria")
				       ->where('id_profissao', $id_profissao)
				       ->get()->result();
		

	}
}