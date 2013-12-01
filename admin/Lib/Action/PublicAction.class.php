<?php
 class PublicAction extends Action{
 	
 	protected function checkUser() {
 		if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
 			$this->assign('jumpUrl','Public/login');
 			$this->error('没有登录');
 		}
 	}
 	public function login() {
 		$this->display();
 	}
 	public function index()
 	{
 		redirect(__APP__);
 	}
 	public function checkLogin() {
 		if(empty($_POST['userName'])) {
 			$this->error('�ʺŴ���');
 		}elseif (empty($_POST['password'])){
 			$this->error('������룡');
 		}
 		//�����֤����
  		$map=array();
 		$map['where']['username'] = $_POST['userName'];
 		$map['where']['status'] = 0;
 		$accountDao = M('User');
 		$account = $accountDao->find($map);
 		if(false === $account) {
 			$this->error('�ʺŲ����ڻ��ѽ��ã�');
 		}else {
 			if($account['password'] != md5($_POST['password'])) {
 				$this->success('�������');
 			}
 			$_SESSION[C('USER_AUTH_KEY')]	=	$account['id'];
 			$_SESSION['email']	=	$account['email'];
 			$_SESSION['loginUserName']		=	$account['nickname'];
 			$_SESSION['lastLoginTime']		=	$account['last_login_time'];
 			$_SESSION['login_count']	=	$account['login_count'];
 			if($account['account']=='admin') {
 				$_SESSION['administrator']		=	true;
 			}
 			//�����¼��Ϣ
 			$User	=	M('User');
 			$ip		=	get_client_ip();
 			$time	=	time();
 			$data = array();
 			$data['id']	=	$account['id'];
 			$data['last_login_time']	=	$time;
 			$data['login_count']	=	array('exp','login_count+1');
 			$data['last_login_ip']	=	$ip;
 			$User->save($data);
 			$this->success('��¼�ɹ���',U('Index/index')); 	
 		}
 	}
 	public function logout() {
 		if (isset($_SESSION[C("USER_AUTH_KEY")])) {
 			unset($_SESSION[C("USER_AUTH_KEY")]);
 			$this->success("�ɹ��˳���");
 		}else {
 			$this->error("�Ѿ�ע���¼��");
 		}
 	}
  }