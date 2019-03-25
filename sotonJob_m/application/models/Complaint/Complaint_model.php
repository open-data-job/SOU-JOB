   <?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint_model extends CI_Model{


	public function __construct()
	  { 
	  	parent::__construct();
		$this->load->database();
	  }

	public function add_comp($data,$q){
		if( $data['title']&&$data['content'])
		{
			$this->db->insert('stu_comp',$data);//new
			echo "<h1>您的投诉已提交成功，请重新刷新进入我的投诉查看信息</h1>";
			if ($q['phone']) {
		
				$v = array('phone' => $q['phone']);

				$where = array('userid'=> $data['userid']);

				$this->db->update('stu_user', $v, $where);

				echo "<h1>用户手机更新成功</h1>";
			}
		}
		else{echo "请输入完整信息";}
	}
	  
	public function my_comp($userid){
		$this->db->order_by('submitTime','desc');
		$this->db->where(array('userid' => $userid));
		$query = $this->db->get('stu_comp')->result_array();
		return $query;	
	}
	
	public function load_all($num, $offset)
	{
		$this->db->order_by('submitTime','desc');
		 // limit(每页显示数量，偏移量)
		$query = $this->db->get('stu_comp',$num, $offset)->result_array();
		return $query;	
		}
	public function load_comp($id)
	{
		$this->db->order_by('submitTime','desc');
		$this->db->where(array('id' => $id));
		$query = $this->db->get('stu_comp')->result_array();
		return $query;	
		}
	public function load_name($userid){
		$this->db->where(array('userid' => $userid));
		$query = $this->db->get('stu_user')->row_array();
		return $query;	
	}
	public function search_issue($data,$num, $offset){
		$this->db->order_by('submitTime','aesc');
		$this->db->like('title', $data)->or_like('content', $data);
		$query = $this->db->get('stu_comp',$num, $offset)->result_array();
		return $query;	
	}
	public function page($tablename,$per_nums,$start_position){
	//传入3个参数，表名字，每页的数据量，其实位置
		$this->db->limit($per_nums,$start_position);
		$this->db->order_by('submitTime','desc');
		// $this->db->where(array('replied' =>0));
		$query=$this->db->get($tablename);
		$data=$query->result_array();
		$data2['total_nums']=$this->db->count_all($tablename);
		$data2[]=$data; 
  		return $data2;
	}

}?>