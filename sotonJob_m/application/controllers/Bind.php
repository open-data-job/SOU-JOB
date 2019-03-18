<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bind extends CI_Controller
{ 
	public function __construct(){
		    parent::__construct();
		    $this->load->model('Bind/bind_model');
			$this->load->helper('captcha');
			$this->load->library('form_validation');
			// $this->output->enable_profiler(true);
			$this->load->library('session');
	}  

	public function index(){	  
			
			$this->load->view('bind/bind');

	}
	public function code(){
			#调用函数生成验证码
			$vals = array( 
				'word' => rand(1000,9999),
			);
			$code = create_captcha($vals);
			#将验证码字符串保存到session中
			$this->session->set_userdata('code',$code);
	}
	public function login(){
			#获取表单数据
			$captcha = strtolower($this->input->post('captcha'));
			#获取session中保存的验证码
			$code = strtolower($this->session->userdata('code'));
			var_dump($this->input->post('studentNo'));
			var_dump($this->input->post('password'));
			if ($captcha === $code){
				#验证码正确，则需要验证用户名和密码
				$studentNo = $this->input->post('studentNo',true);
				$password = $this->input->post('password',true);
				if ($this->bind_model->check($studentNo,$password)){
						# OK，保存session信息,然后跳转到首页
						$this->session->set_userdata('studentNo',$studentNo);
						$this->session->set_userdata('logintime',time());
						
						redirect('showboard');
						
						
					} else{
						$data['url'] = base_url('bind');
						$data['message'] = '用户名和密码错误，请重新填写';
						$data['wait'] = 3;
						$this->load->view('message.html',$data);
					}
				}
			else{
				$data['url'] = base_url('bind');
				$data['message'] = '验证码错误，请重新填写';
				$data['wait'] = 3;
				$this->load->view('message.html',$data);
			}
		}

	public function logout(){//用户退出，把session注销

			$this->session->unset_userdata('studentNo');
			$this->session->sess_destroy();
			redirect('showboard');
		}
		
			
}


?>