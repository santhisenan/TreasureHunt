<?php 
class Main extends CI_Controller {
	public function index(){
		$this->load->view('templates/headerTemplate.php');
		$this->load->view('loginView');
		$this->load->view('templates/footerTemplate.php');	}

}
 ?>
