<?php
namespace Home\Controller;
use Think\Controller;

class PublicController extends Controller {

	//判断是否存在cookie
	public function login(){
		//判断是否存在cookie 是否存在
		if(empty(I('cookie.UserName')) || empty(I('cookie.UserPassWords'))){
			$this->display('Public/login');
		}else{
			$UserInfo = $this->getUserInfo(I('cookie.UserName'),I('cookie.UserName'));			
			//判断是否有效
			if($UserInfo){
				$_SESSION['user'] = $UserInfo;
				$this->redirect('Index/index');
			}else{
				$this->display('Public/login');
			}
		}
		
	}

	//登录操作
	public function doLogin(){
	
		//判断表单提交方式
		if(!IS_POST){
			$this->error('请使用正确姿势登录');
		}

		//采集登录表单信息 建议使用自动完成和自动验证
		$UserName = I('post.UserName');
		$UserPassWord = md5(I('post.UserPassWord'));
		$remember = I('post.remember');

		//根据表单数据搜索数据库匹配
		$UserInfo =  $this->getUserInfo($UserName,$UserPassWord);


		//登录信息不正确
		if(!empty($UserInfo)){
			$this->error('登录信息不正确');
		}

		$_SESSION['user'] = $UserInfo;
		
		// //记住功能 将信息放置本地cookie 并 在此控制器路径下访问
		if($remember == 'on'){
			setcookie('UserName',$UserName,time()+3600*365,null,null,null,true);
			setcookie('UserPassWord',$UserPassWord,time()+3600*365,null,null,null,true);
		}

		//跳转前台首页
		$this->redirect('Index/index');
	}

	public function doLogout(){
		//销毁session并跳转至登陆页
		unset($_SESSION['user']);
		if(!empty(I('cookie.'))){
			setcookie('UserName','',time()-1);
			setcookie('UserPassWord','',time()-1);
		}
		$this->redirect('Public/login');
	}

	//根据用户名和密码查找对应数据并返回
	protected function getUserInfo($UserName,$UserPassWord){
		$model = M('user');
		$where = array();
		$where['UserName'] = $UserName;
		$where['UserPassWord'] = $UserPassWord;

		return $model->where($where)->find();
	}



	public function doRegister(){
		dump(I('post.'));
		//判断表单提交方式
		if(!IS_POST){
			$this->error('请使用正确姿势注册');
		}
		
	}

}