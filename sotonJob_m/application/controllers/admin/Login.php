<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{ 

	public function __construct(){

		    parent::__construct();
		    $this->load->model('Login/Login_model');
			$this->load->helper('captcha');
			$this->load->library('form_validation');
			// $this->output->enable_profiler(true);
			$this->load->library('session');


	}  

	public function index(){	  
			$this->load->view('Login/login');
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

			if ($captcha === $code){
				#验证码正确，则需要验证用户名和密码
				$admin_name = $this->input->post('username',true);
				$password = $this->input->post('password',true);
				if ($this->Login_model->check($admin_name,$password)){
						# OK，保存session信息,然后跳转到首页
						$this->session->set_userdata('admin',$admin_name);
						$this->session->set_userdata('logintime',time());
						
						redirect('admin/BkMain');
						
						
					} else{
						# error
						$data['url'] = base_url('admin/login');
						$data['message'] = '用户名和密码错误，请重新填写';
						$data['wait'] = 3;
						$this->load->view('message.html',$data);
					}
				}
			else{
				$data['url'] = base_url('admin/login');
				$data['message'] = '验证码错误，请重新填写';
				$data['wait'] = 3;
				$this->load->view('message.html',$data);
			}
		}
	
		
			
}


?>