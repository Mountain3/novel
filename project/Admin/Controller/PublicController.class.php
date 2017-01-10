<?php 
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {

	public function login(){
		$this->display();
	} 
	public function doLogin(){
		var_dump(I('post.'));

	}
	public function verify(){
		$config = array(
			'fontSize' => 17, // 验证码字体大小
			'length' => 4, // 验证码位数
			'useNoise' => true, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

}