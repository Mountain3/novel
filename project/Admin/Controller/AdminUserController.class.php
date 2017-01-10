<?php 
namespace Admin\Controller;
use Think\Controller;
class AdminUserController extends Controller {
	//后台会员的遍历
	public function index(){
		$model = M('admin');
		$data = $model->select();
		// dump($data);
		$this->assign('data',$data);
		$this->display();
	}


}



 ?>