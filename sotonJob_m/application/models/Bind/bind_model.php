<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Bind_model extends CI_Model{ 
	 

	public function __construct()
	{
	  	parent::__construct();
		$this->load->database();
	}
	public function check($name,$password)
	{
		$this->db->where(array('studentNo' => $name));
		$query = $this->db->get('stu_user')->row_array();
		//是否为空，是否用户名密码都匹配
		if ($query && $name == $query['studentNo'] && $password == $query['password'])
		{
			// echo '欢迎你'.$name;
			return $query;
		}
	}

}