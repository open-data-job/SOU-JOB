<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Backstage_model extends CI_Model{ 
	 

	public function __construct()
	{
	  	parent::__construct();
		$this->load->database();
	}
	public function check($name,$password)
	{
		$this->db->where(array('name' => $name));
		$query = $this->db->get('admin')->row_array();
		//是否为空，是否用户名密码都匹配
		if ($query && $name == $query['name'] && $password == $query['password'])
		{
			// echo '欢迎你'.$name;
			return $query;
		}
	}
	public function load_unreIssue()
	{
		$this->db->order_by('submitTime','desc');
		$this->db->where(array('replied' =>0));
		$query = $this->db->get('stu_issue')->result_array();
		return $query;	
	}
	public function load_all($num, $offset)
	{
		$this->db->order_by('submitTime','desc');
		 // limit(每页显示数量，偏移量)
		
		$query = $this->db->get('stu_issue',$num, $offset)->result_array();
		return $query;	
		}
	public function page($tablename,$per_nums,$start_position){
	//传入3个参数，表名字，每页的数据量，其实位置
		$this->db->limit($per_nums,$start_position);
		// $this->db->where(array('replied' =>0));
		$query=$this->db->get($tablename);
		$data=$query->result_array();
		$data2['total_nums']=$this->db->count_all($tablename);
		$data2[]=$data; //这里大家可能看的有点不明白，可以分别将$data和$data2打印出来看看是什么结果。
  		return $data2;
	}
}