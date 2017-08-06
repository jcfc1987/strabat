<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generic_m extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}


	public function insert(string $tblName, $data):bool{
		return $this->db->insert($tblName,$data);
	}

	public function select(string $tblName, int $limit=NULL, int $offset=NULL):array{
		return $this->db->get($tblName)->result_array();
	}

	public function select_where(string $tblName, string $content):array{
		return $this->db->select("id, profissao")
				 ->from("profissao")
				 ->where("profissao.profissao", $content)
				 ->get()->result_array();
		
	}

	public function update(string $tblName, int $id, $data):int{
		$this->db->update($tblName,$data);
		$this->db->where('id',$id);
		return $this->db->affected_rows();
	}

	public function delete(string $tblName,int $id):int{
		$this->db->delete($tblName, array('id'=>$id));
		return $this->db->affected_rows();
	}
}