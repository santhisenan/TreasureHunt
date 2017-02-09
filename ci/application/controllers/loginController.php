<?php 
session_start();
class LoginController extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('loginModel');
	}


}
 ?>
