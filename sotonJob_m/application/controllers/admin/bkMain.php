<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BkMain extends MY_Controller
{ 

	public function __construct(){

		    parent::__construct();
		    $this->load->model('BkIssue/BkIssue_model');
			$this->load->helper('captcha');
			$this->load->library('form_validation');
			// $this->output->enable_profiler(true);
			$this->load->library('session');
	}  

	public function index(){	  
			$page_num = '7';//每页的数据
			$data= $this->BkIssue_model->page('job_list',$page_num,$this->uri->segment(4));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/admin/bkmain/index/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			
			// echo $this->pagination->create_links();
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
			$this->load->view('BkIssue/admin',$data);

	}
	public function show_issue(){//进入查看事务的具体消息
			$id = $this->uri->segment(4);
			// var_dump($id);
			$query['data']= $this->BkIssue_model->load_issue($id);
			// var_dump($query['data']);
			$data['userinf'] = $this->BkIssue_model->load_name($query['data'][0]['userid']);
			// if ($query['data'][0]['hidden']==1) {
			// 	$query['nickname'] = "匿名";
			// }else{
			// 	$query['nickname'] = $data['userinf']['studentName'];
			// }
			
			$query['phone'] = $data['userinf']['phone'];
			// var_dump($query);
			$this->load->view('BkIssue/show_issue',$query);
	}
	public function unreply_issue(){
			$page_num = '7';//每页的数据
			$data= $this->BkIssue_model->unrepage('job_list',$page_num,$this->uri->segment(4));
			$total_nums=$data['total_nums']; //这里得到从数据库中的总页数
			// var_dump($data);
			$data['query']=$data[0]; //把查询结果放到$data['query']中
			$this->load->library('pagination');
			$config['base_url'] = $this->config->item('base_url').'/admin/bkmain/unreply_issue/';
			$config['total_rows'] = $total_nums;//总共多少条数据
			$config['per_page'] = $page_num;//每页显示几条数据
			
			// // echo $this->pagination->create_links();
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
			// echo $this->pagination->create_links();
			// var_dump($data);
			$this->load->view('BkIssue/unreply',$data);
	}
	public function addreply(){
		// var_dump($_POST);
		date_default_timezone_set('PRC');
		$data = array(
			'checked'=>'1',
			'asso'=>'Southampton Job',
			'reply'=>$this->input->post('content'),
			// 'responder'=>'2013010115',
			// 'replyTime'=>time(),			
			);
		$id = $this->input->post('id');
		// var_dump($data);
		$this->BkIssue_model->add_reply($data,$id);
	}
	public function logout(){//用户退出，把session注销

			$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			redirect('admin/login/');
		}
}
 ?>