<?php 
class LoginController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('loginModel');
	}

	public function loginValidate(){
		//validation
		
		$this->form_validation->set_rules('teamName', 'username', 'required');
		$this->form_validation->set_rules('teamPass', 'Passowrd', 'required');
		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('nextClue');
			}
			else{
			$this->load->view('loginErrorView');
		    }
		} 
		else {
			$data = array(
				'username'=>$this->input->post('teamName'),
				'password'=>$this->input->post('teamPass'),
				);
			$result = $this->loginModel->loginAuth($data);
			if($result){
				$session_data = array(
					'username'=>$data['username'],
					'logged_in'=>TRUE );
				$this->session->set_userdata($session_data);
				$this->load->view('nextClue');
			}
			else{
			$this->load->view('loginErrorView');

			}
		}

	}


}
 ?>
