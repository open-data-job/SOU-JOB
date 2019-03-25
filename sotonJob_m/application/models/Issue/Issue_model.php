   <?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class issue_model extends CI_Model{


	public function __construct()
	  { 
	  	parent::__construct();
		$this->load->database();
	  }
	public function load_all($num, $offset)
	{
		$this->db->order_by('submitTime','desc');
		 // limit(每页显示数量，偏移量)
		
		$query = $this->db->get('job_list',$num, $offset)->result_array();
		return $query;	
		}
	public function load_issue($id)
	{
		$this->db->order_by('submitTime','desc');
		$this->db->where(array('id' => $id));
		$query = $this->db->get('job_list')->result_array();
		return $query;	
		}
	public function load_name($userid){
		$this->db->where(array('studentNo' => $userid));
		$query = $this->db->get('stu_user')->row_array();
		return $query;	
	}
	public function my_issue($userid){
		$this->db->order_by('submitTime','desc');
		$this->db->where(array('userid' => $userid));
		$query = $this->db->get('job_list')->result_array();
		return $query;	
	}
	public function add_issue($data){
		if( $data['title']&&$data['content'])
		{
			$this->db->insert('job_list',$data);//new
			redirect('issue');
		}
		else{echo "请输入完整信息";}}

	public function add_issue1(){

		$json_string = file_get_contents('C:/Users/86137/Desktop/SOJ/souJob.json');  

		$JsonData = json_decode($json_string, true);
		var_dump($JsonData[1]);
		var_dump(count($JsonData));
		// 显示出来看看
		$userid = 10000000;
		$title = 'School/Education';
		$postcode = 'SO16 7PP';
		$phone =  '02380595000';
		$i = 1;
		for ($i=0; $i < count($JsonData); $i++) { 
			$data = array(
				// 'title'=>$title,
				'title'=>$JsonData[$i]['label'],
				'userid'=>$userid,
				'content' =>$JsonData[$i]['comment'],
				'postcode' =>$postcode,
				'submitTime'=>time(date('Y-m-d H:i:s',time())),//时间戳
				'phone'=>($phone)
				);

				$this->db->insert('job_list',$data);//new
		}
		echo "dc213";


		// redirect('issue');

		// if( $data['title']&&$data['content'])
		// {
		// 	$this->db->insert('job_list',$data);//new
		// 	redirect('issue');
		// }
		// else{echo "请输入完整信息";}
	}

	public function search_issueddddddd($data,$num, $offset){
		$this->db->order_by('submitTime','aesc');
		$this->db->like('title', $data)->or_like('content', $data);
		$query = $this->db->get('job_list',$num, $offset)->result_array();
		return $query;	
	}
	public function search_issue($data){
			$this->db->order_by('submitTime','aesc');
			$this->db->like('title', $data)->or_like('content', $data);
			$query = $this->db->get('job_list')->result_array();
			// var_dump($query);	
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