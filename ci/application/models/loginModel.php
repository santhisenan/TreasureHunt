<?php 
class LoginModel extends CI_Model{
	public function loginAuth($data){
		$this->db->select('team , password ');
		$this->db->from('challenges');
		$this->db->where('team',$data['username']);
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
}

 ?>