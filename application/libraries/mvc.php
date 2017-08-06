<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MVC
{
	private $ci;
	private $file_name;
	public function __construct(){
		$this->ci = & get_instance();
	}

	/** Views loader */
	public function view(array $params) {
		for ($i = 0; $i < count($params['files']); $i++) {
			count(explode('.', $params['files'][$i])) > 0 ? $this->file_name[$i] = $params['files'][$i].'.php' : $this->file_name[$i] = $params['files'][$i];
		}
		
		if(isset($params['path'])) {
			for ($i = 0; $i < count($params['files']); $i++) {
				if(file_exists('application/views/template/'.$params['template']."/".$params['path']."/".$this->file_name[$i])) {
					if(isset($params['data'])){
						$this->ci->load->view('template/'.$params['template']."/".$params['path']."/".$this->file_name[$i],$params['data']);	
					}
					else{
						$this->ci->load->view('template/'.$params['template']."/".$params['path']."/".$this->file_name[$i]);	
					}
				} else {

				}
				
			}
		} else {
			for ($i = 0; $i < count($params['files']); $i++) {
				if(file_exists('application/views/template/'.$params['template']."/".$this->file_name[$i])) {
					if(isset($params['data'])) {
						$this->ci->load->view('template/'.$params['template']."/".$this->file_name[$i], $params['data']);
					}
					else {
						$this->ci->load->view('template/'.$params['template']."/".$this->file_name[$i]);
					}
				}				
			} 
		}
	}
}