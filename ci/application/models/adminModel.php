<?php 
class AdminModel extends CI_Model{
	public function adminLoginAuth($data){
		$this->db->select('username , password');
		$this->db->from('admin');
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function insertTeam($data){
		$this->db->insert('challenges',$data);
		redirect('admin','refresh');
	}
 
}
 ?>
