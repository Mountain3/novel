<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	// 前台首页
    public function index(){
    	$model = M('cate');
    	// $data = $model->select();
    	$man = $model->where('catepid=1')->select();
    	$girl = $model->where('catepid=2')->select();
    	$this->assign('man', $man);
    	$this->assign('girl', $girl);

    	$model = M('Book');
    	$manBooks = $model->select();
    	dump($manBooks);
    	$this->assign('manBooks',$manBooks);
    	// dump($man);
    	// exit;
    	$this->display();
    }
    public function add(){
    	
    }
}