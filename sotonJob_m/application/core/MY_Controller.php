<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


#后台父控制器
class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$v = $this->session->userdata('admin');
		if(!$v){
		redirect('admin/login');}
	}
}
class MY_Home extends CI_Controller{
	public function __construct(){

		parent::__construct();
		$v = $this->session->userdata('studentNo');
		if(!$v){
	
		redirect('bind');
	
	}
}
}

