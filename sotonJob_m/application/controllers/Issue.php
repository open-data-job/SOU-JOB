<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Issue extends MY_Home{

    
    public function __construct()
    {   
	    parent::__construct();
	    $this->load->model('Issue/issue_model');
	    // $this->_check_user('issue');
    }
	public function index(){//加载所有的事务并通向事务列表页面
		echo "deng";
		$page_num = '9';//每页的数据
		$data= $this->issue_model->page('job_list',$page_num,$this->uri->segment(3));
		$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
		$data['data']=$data[0]; //把查询结果放到$data['data']中
		$this->load->library('pagination');
		$config['base_url'] = $this->config->item('base_url').'/issue/index/';
		$config['total_rows'] = $total_nums;//总共多少条数据
		$config['per_page'] = $page_num;//每页显示几条数据
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = '首页';
		$config['first_tag_open'] = '<li>';//“第一页”链接的打开标签。
		$config['first_tag_close'] = '</li>';//“第一页”链接的关闭标签。
		$config['last_link'] = '尾页';//你希望在分页的右边显示“最后一页”链接的名字。
		$config['last_tag_open'] = '<li>';//“最后一页”链接的打开标签。
		$config['last_tag_close'] = '</li>';//“最后一页”链接的关闭标签。
		$config['next_link'] = '下一页';//你希望在分页中显示“下一页”链接的名字。
		$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
		$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
		$config['prev_link'] = '上一页';//你希望在分页中显示“上一页”链接的名字。
		$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
		$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
		$config['cur_tag_open'] = '<li class="current">';//“当前页”链接的打开标签。
		$config['cur_tag_close'] = '</li>';//“当前页”链接的关闭标签。
		$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$this->load->helper('url');
		$data['data']=$this->shortenData($data['data']);
		$this->load->view('issue/issue_view',$data);

			// test for the data importing 
		// $this->issue_model->add_issue1();
		
		

}
	public function show(){//进入查看事务的具体消息
		$id = $this->uri->segment(3);
		//var_dump($id);
		$query['data']= $this->issue_model->load_issue($id);
		// var_dump($query['data'][0]['responder']);
		// $data['userinf'] = $this->issue_model->load_name($query['data'][0]['responder']);
		// // var_dump($data['userinf']);
		// if ($query['data'][0]['hidden']==1) {
		// 	$query['nickname'] = "匿名";
		// }else{
		// 	$query['nickname'] = $data['userinf']['studentName'];
		// 	// $query['nickname'] = "匿名";
		// }
		// $query['phone'] = $data['userinf']['phone'];
		// var_dump($query);
		$this->load->view('issue/show_issue',$query);
		}

	public function my_issue(){//查看我的事务，根据studentNo
		$studentNo=$this->session->studentNo;
		$query['data']= $this->issue_model->my_issue($studentNo);
		$query['data']=$this->shortenData($query['data']);
		// var_dump($userid);
		$this->load->view('issue/issue_result',$query);
	}

	public function add(){//链接通向添加页面
		$userid=$this->session->studentNo;
		$data['userinfo'] = $this->issue_model->load_name($userid);
		$this->load->view('issue/add_issue',$data);
	}
	public function add_issue(){//添加事务咨询
		// var_dump($_POST);
		$userid=$this->session->studentNo;
		date_default_timezone_set('PRC');
		$data = array(
			'title'=>$_POST['title'],
			'userid'=>$userid,
			'content' =>$_POST['content'],
			'postcode' =>$_POST['postcode'],
			'submitTime'=>time(date('Y-m-d H:i:s',time())),//时间戳
			'phone'=>$_POST['phone']
			);
		// $q['phone']=$_POST['phone'];
		$this->issue_model->add_issue($data);
	}
	public function search(){//链接通向搜索页面
		// var_dump($_POST);
		$data = $this->input->post('searchFor');
		$q['data'] = $this->issue_model->search_issue($data);
		if($q['data']){$this->load->view('issue/search_issue',$q);
		}
		else{echo "<h1>Sorry the content does not exist</h1>";}
		
	}
	
//精简数据
	public function shortenData($arr){
		$arr2=$arr;
		for($x=0;$x< count($arr);$x++){
			$arr2[$x]['submitTime']=date('Y-m-d', (int)$arr[$x]['submitTime']);
			if(strlen($arr[$x]['content'])>38)
				$arr2[$x]['content']=mb_substr($arr[$x]['content'],0,38)."...";
		}
		return $arr2;
	}

}