<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class BkIssue_model extends CI_Model{ 
	 

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
		$this->db->where(array('checked' =>0));
		$query = $this->db->get('job_list')->result_array();
		return $query;	
	}
	public function load_all($num, $offset)
	{
		$this->db->order_by('submitTime','desc');
		 // limit(每页显示数量，偏移量)
		$query = $this->db->get('job_list',$num, $offset)->result_array();
		return $query;	
		}
	public function page($tablename,$per_nums,$start_position){
	//传入3个参数，表名字，每页的数据量，其实位置
		$this->db->limit($per_nums,$start_position);
		$query=$this->db->get($tablename);
		$data=$query->result_array();
		$data2['total_nums']=$this->db->count_all($tablename);
		$data2[]=$data; 
  		return $data2;
	}public function unrepage($tablename,$per_nums,$start_position){
	//传入3个参数，表名字，每页的数据量，其实位置
		$this->db->limit($per_nums,$start_position);
		$this->db->where(array('checked' =>0));
		$query=$this->db->get($tablename);
		$data=$query->result_array();
		$v=$this->db->where(array('checked' =>0))->get('job_list')->result_array();

		$data2['total_nums']= $this->db->count_all($tablename) ;
		$data2['nums']= count($v) ;
		// var_dump($data2['total_nums']);
		$data2[]=$data; 
  		return $data2;
	}
	public function load_issue($id)
	{
		$this->db->order_by('submitTime','desc');
		$this->db->where(array('id' => $id));
		$query = $this->db->get('job_list')->result_array();
		return $query;	
		}
	public function load_name($userid){
		$this->db->where(array('userid' => $userid));
		$query = $this->db->get('stu_user')->row_array();
		return $query;	}
	public function add_reply($data,$id){
		$this->db->where(array('id' => $id));
		$v = $this->db->update('job_list',$data);
		redirect('admin/BkMain');
		}
}