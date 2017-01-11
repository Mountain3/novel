<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	// 前台首页
    public function index(){
    	// 查询分类
    	$model = M('cate');
    	// $data = $model->select();
    	// 男生、女生
    	$man = $model->where('catepid=1')->select();
    	$girl = $model->where('catepid=2')->select();
    	$this->assign('man', $man);
    	$this->assign('girl', $girl);
    	// 查询两本男生书籍
    	$model = M('Book');
    	$manBooks = $model->where("BookSex='1'")->limit(2)->select();
    	// dump($manBooks);
    	$this->assign('manBooks',$manBooks);
    	// dump($man);
    	// exit;
    	$this->display();
    }
    public function add(){
    	
    }

    public function getCookie(){

		dump($_COOKIE['password']);

	}
	public function orderList(){
		$model = M('cate');
		$data = $model->select();
		$this->assign('data',$data);

		$model = M('book');
		$lists = $model->order('bookmark desc')->select();
		$this->assign('lists',$lists);


		$this->display('orderList');

	}

}