<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{ 
	public function __construct(){
		    parent::__construct();
		    $this->load->model('Register/register_model');
			$this->load->helper('captcha');
			$this->load->library('form_validation');
			// $this->output->enable_profiler(true);
			$this->load->library('session');
	}  

	public function index(){	  
			
			$this->load->view('Register/register.php');

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
	public function register(){
			#获取表单数据
			$captcha = strtolower($this->input->post('captcha'));
			#获取session中保存的验证码
			$code = strtolower($this->session->userdata('code'));
			// var_dump($this->input->post('studentNo'));
			// var_dump($this->input->post('password'));
			// var_dump($this->input->post('re_password'));
			// var_dump($this->input->post('studentName'));


			date_default_timezone_set('PRC');
			$data = array(
				'studentNo'=>$this->input->post('studentNo'),
				'studentName'=>$this->input->post('studentName'),
				'phone'=>$_POST['phone'],
				'password'=>$_POST['password']
				);

			$ifRe = $this->register_model->check_if_registered($data);

			if ($_POST['password'] !=$_POST['re_password']) {
				echo "Password is not confirmed";
				// sleep(5);
				// redirect('showboard');
			}
			elseif ($captcha === $code){
				#验证码正确，则需要验证用户名和密码
				if(!$ifRe){
					# 如果未存在该用户
					$this->register_model->add_user($data);
					redirect('showboard');
					}else{
					echo 'You have registered';
				}
			}else{
			// 	$data1['url'] = base_url('bind');
			// 	$data1['message'] = 'the captcha is wrong';
			// 	$data1['wait'] = 3;
			// 	$this->load->view('message.html',$data1);
				echo'the captcha is wrong';
			}
		}

	public function logout(){//用户退出，把session注销

			$this->session->unset_userdata('studentNo');
			$this->session->sess_destroy();
			redirect('showboard');
		}
		
			
}


?>