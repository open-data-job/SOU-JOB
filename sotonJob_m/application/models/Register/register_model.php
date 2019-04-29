<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model{ 
	 

	public function __construct()
	{
	  	parent::__construct();
		$this->load->database();
	}
	public function check_if_registered($data)
	{
		// var_dump($data['studentNo']);
		$this->db->where(array('studentNo' => $data['studentNo']));
		$query = $this->db->get('stu_user')->result_array();
		return $query;
	}
	public function add_user($data){
		# 已经存在与否？
		// var_dump($data['studentNo']);
		// $this->db->where(array('studentNo' => $data['studentNo']));
		// $query = $this->db->get('stu_user')->result_array();
		// if($query) {
		// 	echo 'Your have registered';
		// }else{
		$this->db->insert('stu_user',$data);//new
			// redirect('issue');
		// }
	}
	
}