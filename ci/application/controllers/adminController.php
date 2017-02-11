<?php 
class AdminController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->clear_cache();
		$this->load->library('form_validation');
		$this->load->model('adminModel');
	}
	public function clear_cache(){
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform,max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
	
	public function index(){
		$this->load->view('templates/headerTemplate.php');
		$this->load->view('adminLoginView');
		$this->load->view('templates/footerTemplate.php');
	}
	public function adminLoginValidate(){
		//validation
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'Passowrd', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->clear_cache();
			if(isset($this->session->userdata['logged_in'])){
				$data['team'] = $this->session->userdata['username'];
				$this->load->view('templates/headerTemplate.php');
				$this->load->view('nextClue',$data);
				$this->load->view('templates/footerTemplate.php');
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
				
				$this->load->view('templates/headerTemplate.php');
				$this->load->view('adminView');
				$this->load->view('templates/footerTemplate.php');
			}
			else{
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