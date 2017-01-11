<?php
namespace Home\Controller;
use Think\Controller;

class DetailController extends controller{
	public function detail(){
		$id = I("get.id");
		$model = M('book');
		$book = $model->find($id);
		$this->assign('book',$book);
		// dump($book);
		// die;
		$this->display('Details/details');
	}
}