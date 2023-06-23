<?php
	class Admin_model extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
 
		public function login($email, $password)
		{
			$query = $this->db->get_where('admin', array('email'=>$email, 'password'=>$password));
			return $query->row_array();
		}

		function fetch_pass($session_id)
		{
			$fetch_pass=$this->db->query("select * from admin where id='$session_id'");
			$res=$fetch_pass->result();
		}
		function change_pass($session_id,$new_pass)
		{
			$update_pass=$this->db->query("UPDATE user_login set pass='$new_pass'  where id='$session_id'");
		}
		
}

?>