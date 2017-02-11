<?php 
class ListAllTeams extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('adminModel');
	}
	public function show(){
		$data['rows'] = $this->adminModel->listAll();
		$this->load->view('listAllTeamsView',$data);
	}


}

 ?>