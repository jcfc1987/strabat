<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('public_m');
	}
	public function index() {
		$params = array('template'=>'default',
						'files' => array('header','index','footer'),
						'data' => array('pais'=>$this->public_m->get_country(), 
										'profissao'=>$this->public_m->get_profission())
			);
		$this->mvc->view($params);

	}

	public function insert(){
		$data = $this->input->post();
	}
}
