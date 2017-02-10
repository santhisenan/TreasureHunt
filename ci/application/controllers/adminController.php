<?php 
class AdminController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('adminModel');
	}
	public function index(){
		$this->load->view('adminLoginView');
	}
	public function adminLoginValidate(){
		//validation
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'Passowrd', 'required');
		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('adminView');
			}
			else{

			$this->load->view('loginErrorView');
		    }
		} 
		else {
			$data = array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				);

			$result = $this->adminModel->adminLoginAuth($data);
			if($result){ 
				$session_data = array(
					'username'=>$data['username'],
					'logged_in'=>TRUE );
				$this->session->set_userdata($session_data);
				$this->load->view('adminView');
			}
			else{
			echo $data['username'];

			$this->load->view('loginErrorView');

			}
		}
	}
	public function logout(){
		$sess_array = array('username' =>'','logged_in'=>FALSE);
		$this->session->unset_userdata('logged_in', $sess_array);
		$this->load->view('loggedOut');
	}
}

 ?>