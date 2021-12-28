<?php
class Common_model extends CI_Model{
	/* login */
	public function check_user($username, $password){
		  $this->db->where('username',$username);
		  $this->db->where('password',$password);
		  $this->db->where('rsm_user.status',1);
		  $this->db->join('rsm_role','rsm_role.role_id = rsm_user.role_id');
		  return $this->db->get('rsm_user')->row();
	}

	public function queries($options){
		$sql = '';
		if($options['option'] == 'select'){
			$sql .= "SELECT * FROM ".$options['table']." WHERE 1=1";
			if(isset($options['where'])){
				 if(is_array($options['where'])){
					 foreach($options['where'] as $key => $val){
						 $sql .= " AND ".$key." = '".$val."'";
					 }
				 }
		    }
		}

		if($options['option'] == 'update'){
			if(is_array($options['where'])){
				foreach($options['where'] as $key => $val){
					$this->db->where($key,$val);
				}
			}
			return $this->db->update($options['table'], $options['data']); 
		}
		if($options['option'] == 'insert'){
			$this->db->insert($options['table'], $options['data']);
            return $this->db->insert_id();
		}
		if($options['option'] == 'delete'){
			if(is_array($options['where'])){
				foreach($options['where'] as $key => $val){
					$this->db->where($key,$val);
				}
			}
			return $this->db->delete($options['table']); 
		}
		if($sql){
			if($options['type'] == 'row'){
			   return $this->db->query($sql)->row();
			}else{
			   return $this->db->query($sql)->result();
			}
		}
	}
}
