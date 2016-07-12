<?php

class Users extends CI_Model
{
    function __construct()
    {
        parent::__construct();

		// Other stuff
		$this->_prefix = $this->config->item('DX_table_prefix');
		$this->_table = $this->_prefix.$this->config->item('DX_users_table');	
		$this->_roles_table = $this->_prefix.$this->config->item('DX_roles_table');
		$this->_table_language = $this->_prefix.$this->config->item('DX_user_language_table');	
		$this->_table_language_m = $this->_prefix.$this->config->item('DX_language_m_table');	
		
		$this->language = $this->config->item('language');
		$this->db->select();
		$this->db->where('name',$this->language);
		$this->selected_language = $this->db->get($this->_table_language_m,1)->row();
		
	}
	
	// General function
	
	function get_all($offset = 0, $row_count = 0)
	{
		$users_table = $this->_table;
		$roles_table = $this->_roles_table;
		
		if ($offset >= 0 AND $row_count > 0)
		{
			$this->db->select("$users_table.*", FALSE);
			$this->db->select("$roles_table.name AS role_name", FALSE);
			$this->db->join($roles_table, "$roles_table.id = $users_table.role_id");
			$this->db->order_by("$users_table.id", "ASC");
			
			$query = $this->db->get($this->_table, $row_count, $offset); 
		}
		else
		{
			$query = $this->db->get($this->_table);
		}
		
		return $query;
	}

	function get_user_by_id($user_id)
	{
		$this->db->where('id', $user_id);
		return $this->db->get($this->_table);
	}

	function get_user_by_username($username)
	{
		$this->db->select("users.*,user_language.username");
		$this->db->join($this->_table_language,'users.id = user_language.user_id','left');
		$this->db->where('user_language.username', $username);
		$this->db->where('user_language.lang',$this->selected_language->id);
		return $this->db->get($this->_table);
	}
	
	function get_user_by_email($email)
	{
		$this->db->where('email', $email);
		return $this->db->get($this->_table);
	}
	
	function get_login($login)
	{
		// $this->db->where('username', $login);
		$this->db->select("users.*,user_language.username");
		$this->db->join($this->_table_language,'users.id = user_language.user_id','left');
		$this->db->where('users.email', $login);
		$this->db->where('user_language.lang',$this->selected_language->id);
		return $this->db->get($this->_table);
	}
	
	function check_ban($user_id)
	{
		$this->db->select('1', FALSE);
		$this->db->where('id', $user_id);
		$this->db->where('banned', '1');
		return $this->db->get($this->_table);
	}
	
	function check_username($username)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(username)=', strtolower($username));
		$this->db->where('lang',$this->selected_language->id);
		return $this->db->get($this->_table_language);
	}

	function check_email($email)
	{
		$this->db->select('1', FALSE);
		$this->db->where('LOWER(email)=', strtolower($email));
		return $this->db->get($this->_table);
	}
		
	function ban_user($user_id, $reason = NULL)
	{
		$data = array(
			'banned' 			=> 1,
			'ban_reason' 	=> $reason
		);
		return $this->set_user($user_id, $data);
	}
	
	function unban_user($user_id)
	{
		$data = array(
			'banned' 			=> 0,
			'ban_reason' 	=> NULL
		);
		return $this->set_user($user_id, $data);
	}
		
	function set_role($user_id, $role_id)
	{
		$data = array(
			'role_id' => $role_id
		);
		return $this->set_user($user_id, $data);
	}

	// User table function

	function create_user($data)
	{
		$data['created'] = date('Y-m-d H:i:s', time());
		
		// Multilanguage: separate table
		$username = $data['username'];
		unset($data['username']);
		
		$this->db->insert($this->_table, $data);
		$user_id = $this->db->insert_id();
		
		$data_language['user_id'] = $user_id;
		//get list language supported
		$this->db->select();
		$list_language = $this->db->get($this->_table_language_m)->result_array();
		
		$this->load->library('data_help_library');
		
		foreach($list_language as $row){
			$translated_username = $username;
			$data_language['translate_flag'] = 1;
			if($row['id'] != $this->selected_language->id){
				$translated_username = $this->data_help_library->translate_google_api($this->selected_language->code,$row['code'],$translated_username);
				$data_language['translate_flag'] = 0;
			}
			$data_language['username'] = $translated_username;
			$data_language['lang'] = $row['id'];
			$this->db->insert($this->_table_language, $data_language);
		}
		
		return $user_id;
	}

	function get_user_field($user_id, $fields)
	{
		$this->db->select($fields);
		$this->db->where('id', $user_id);
		return $this->db->get($this->_table);
	}

	function set_user($user_id, $data)
	{
		$this->db->where('id', $user_id);
		return $this->db->update($this->_table, $data);
	}
	
	function delete_user($user_id)
	{
		$this->db->where('id', $user_id);
		$this->db->delete($this->_table);
		return $this->db->affected_rows() > 0;
	}
	
	// Forgot password function

	function newpass($user_id, $pass, $key)
	{
		$data = array(
			'newpass' 			=> $pass,
			'newpass_key' 	=> $key,
			'newpass_time' 	=> date('Y-m-d h:i:s', time() + $this->config->item('DX_forgot_password_expire'))
		);
		return $this->set_user($user_id, $data);
	}

	function activate_newpass($user_id, $key)
	{
		$this->db->set('password', 'newpass', FALSE);
		$this->db->set('newpass', NULL);
		$this->db->set('newpass_key', NULL);
		$this->db->set('newpass_time', NULL);
		$this->db->where('id', $user_id);
		$this->db->where('newpass_key', $key);
		
		return $this->db->update($this->_table);
	}

	function clear_newpass($user_id)
	{
		$data = array(
			'newpass' 			=> NULL,
			'newpass_key' 	=> NULL,
			'newpass_time' 	=> NULL
		);
		return $this->set_user($user_id, $data);
	}
	
	// Change password function

	function change_password($user_id, $new_pass)
	{
		$this->db->set('password', $new_pass);
		$this->db->where('id', $user_id);
		return $this->db->update($this->_table);
	}
}

?>