<?php
class Myauth_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('language');
	}




	public function get_pref_list()
	{
		#$this->db->order_by('id desc');
		$query = $this->db->get("pref");
		return $query->result();
	}


	public function get_worktype_list()
	{
		#$this->db->order_by('id desc');
		$query = $this->db->get("work_type");
		return $query->result();
	}





	public function get_one_user_temp($username,$key)
	{
		$this->db->where('username', $username);
		$this->db->where('activation_key', $key);
		$query = $this->db->get("user_temp",1);
		if ($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}
	
	
	
	public function get_one_user_temp_by_key($key)
	{
		$this->db->where('activation_key', $key);
		$query = $this->db->get("user_temp",1);
		if ($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			return FALSE;
		}
	}
	
	





	public function get_one_user_id_by_username($username)
	{
		$lang = $this->language;
		$this->db->where('name', $lang);
		$query = $this->db->get("language_m",1);
		$language = $row = $query->row();
		
		
		$this->db->where('username', $username);
		$this->db->where('lang', $language->id);
		$query = $this->db->get("user_language",1);
		$row = $query->row();
		if($row){
			return $row->user_id;
		}else{
			return FALSE;
		}
	}






	public function get_one_user_id_by_email($email)
	{
		$this->db->where('email', $email);
		$query = $this->db->get("users",1);
		$row = $query->row();
		if($row){
			return $row->id;
		}else{
			return FALSE;
		}
	}






	public function get_one_user_profile_forgot_password($id,$year,$month,$day)
	{
		$this->db->where('user_id', $id);
		$this->db->where('birth_year', $year);
		$this->db->where('birth_month', $month);
		$this->db->where('birth_day', $day);
		$query = $this->db->get("user_profile",1);
		$row = $query->row();
		if($row){
			return $row->user_id;
		}else{
			return FALSE;
		}
	}

    public function upd_user_profile($data, $user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->set($data);
        $this->db->update('user_profile');
        return $this->db->affected_rows();
    }









}
?>
