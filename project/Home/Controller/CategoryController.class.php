<?php
namespace Home\Controller;
use Think\Controller;

class CategoryController extends controller{
	public function category(){
		// 接收类型
		$id = I("get.bookid");
		// dump($id);
		$model = M('book');
		// 接收当前类型所有的书籍
		$books = $model->where("bookcid='{$id}'")->select();
		$this->assign('books',$books);
		dump($books);
		$this->display('Category/category');
	}

}