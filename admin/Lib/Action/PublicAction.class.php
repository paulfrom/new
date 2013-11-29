<?php
 class PublicAction extends Action{
 	// 检查用户是否登录
 	
 	protected function checkUser() {
 		if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
 			$this->assign('jumpUrl','Public/login');
 			$this->error('没有登录');
 		}
 	}
 	// 用户登录页面
 	public function login() {
//  		if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
//  			$this->display();
//  		}else{
//  			$this->redirect('Index/index');
//  		}
 		$this->display();
 	}
 	public function index()
 	{
 		//如果通过认证跳转到首页
 		redirect(__APP__);
 	}
 	public function checkLogin() {
//  		echo $_POST['userName']."</br>mi";
//  		echo $_POST['password'];
//  		$this->display("test");
 		if(empty($_POST['userName'])) {
 			$this->error('帐号错误！');
 		}elseif (empty($_POST['password'])){
 			$this->error('密码必须！');
 		}
 		//生成认证条件
  		$map=array();
 		//上面这二行是错误的，it动力更改了如下：
 		$map['where']['username'] = $_POST['userName'];
 		$map['where']['status'] = 0;
 		$accountDao = M('User');
 		$account = $accountDao->find($map);
 		if(false === $account) {
 			$this->error('帐号不存在或已禁用！');
 			//$this->display("test");
 		}else {
 			if($account['password'] != md5($_POST['password'])) {
 				$this->success('密码错误！');
 			}
 			$_SESSION[C('USER_AUTH_KEY')]	=	$account['id'];
 			$_SESSION['email']	=	$account['email'];
 			$_SESSION['loginUserName']		=	$account['nickname'];
 			$_SESSION['lastLoginTime']		=	$account['last_login_time'];
 			$_SESSION['login_count']	=	$account['login_count'];
 			if($account['account']=='admin') {
 				$_SESSION['administrator']		=	true;
 			}
 			//保存登录信息
 			$User	=	M('User');
 			$ip		=	get_client_ip();
 			$time	=	time();
 			$data = array();
 			$data['id']	=	$account['id'];
 			$data['last_login_time']	=	$time;
 			$data['login_count']	=	array('exp','login_count+1');
 			$data['last_login_ip']	=	$ip;
 			$User->save($data);
 			//dump($data);
 			$this->success('登录成功！',U('Index/index')); 	
 		}
 	}
 	public function logout() {
 		if (isset($_SESSION[C("USER_AUTH_KEY")])) {
 			unset($_SESSION[C("USER_AUTH_KEY")]);
 			$this->success("成功退出！");
 		}else {
 			$this->error("已经注销登录！");
 		}
 	}
  }