<?php 
class CreateTeam extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('adminModel');
	}
	public function index(){
		$this->load->view('createTeamView');
	}
	public function addTeam(){
		$data = array(
				'team'=>$this->input->post('teamName'),
				'password'=>$this->input->post('answer'),
				'clue'=>$this->input->post('question'),
				'nextlevel'=>$this->input->post('nextLevel'),
				);
		$this->adminModel->insertTeam($data);

	}
}

 ?>