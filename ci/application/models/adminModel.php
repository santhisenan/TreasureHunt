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
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function listAll(){
		$this->db->select("*");
		$this->db->from('challenges');
		
		$query = $this->db->get();
		$rows = array();
		$i=0;


		foreach ($query->result() as $row)
            {
            	$rows[$i]['id'] = $row->id;
                $rows[$i]['team'] = $row->team; 
                $rows[$i]['password'] = $row->password; 
                $rows[$i]['clue'] = $row->clue; 
                $rows[$i]['nextlevel'] = $row->nextlevel;
                $i+=1; 
            }   

        return $rows;
	}

	
 
}
 ?>
