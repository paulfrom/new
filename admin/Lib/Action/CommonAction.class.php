<?php
   class CommonAction extends Action {
   	//判断是否登录
   	function _initialize() {
   		//header("Content-Type:text/html; charset=utf-8");
   		if (!isset($_SESSION[C("USER_AUTH_KEY")])) {
   			$this->redirect("Public/login");
   		}else {
   			 $this->assign('jumpUrl', PHP_FILE . C('USER_AUTH_GATEWAY'));
   		}
   	}
    function index(){
    	import('@.ORG.Util.Cookie');
    	   //鍒楄〃杩囨护鍣紝鐢熸垚鏌ヨMap瀵硅薄
        $map = $this->_search();
        if (method_exists($this, '_filter')) {
            $this->_filter($map);
        }
        $this->_list();
        $this->display();
    }
    /*
     * map 鏂规硶
     */
    protected function _search($name = '') {
    	//鐢熸垚鏌ヨ鏉′欢
    	if (empty($name)) {
    		$name = "article";//$this->getActionName();
    	}
    	$name = "article";// $this->getActionName();
    	$model = D($name);
    	$map = array();
    	foreach ($model->getDbFields() as $key => $val) {
    		if (isset($_REQUEST [$val]) && $_REQUEST [$val] != '') {
    			$map [$val] = $_REQUEST [$val];
    		}
    	}
    	return $map;
    }
    /**
     +----------------------------------------------------------
     * 鏍规嵁琛ㄥ崟鐢熸垚鏌ヨ鏉′欢
     * 杩涜鍒楄〃杩囨护
     +----------------------------------------------------------
     * @access protected
     +----------------------------------------------------------
     * @param Model $model 鏁版嵁瀵硅薄
     * @param HashMap $map 杩囨护鏉′欢
     * @param string $sortBy 鎺掑簭
     * @param boolean $asc 鏄惁姝ｅ簭
     +----------------------------------------------------------
     * @return void
     +----------------------------------------------------------
     * @throws ThinkExecption
     +----------------------------------------------------------
     */
    protected function _list() {
//     	//鎺掑簭瀛楁 榛樿涓轰富閿悕
    	$name ="article"; //$this->getActionName();
    	$model = D($name);
    	if (isset($_REQUEST ['_order'])) {
    		$order = $_REQUEST ['_order'];
    	} else {
    		$order = !empty($sortBy) ? $sortBy : $model->getPk();
    	}
    	//鎺掑簭鏂瑰紡榛樿鎸夌収鍊掑簭鎺掑垪
    	//鎺ュ彈 sost鍙傛暟 0 琛ㄧず鍊掑簭 闈�閮�琛ㄧず姝ｅ簭
    	if (isset($_REQUEST ['_sort'])) {
    		$sort = $_REQUEST ['_sort'] ? 'asc' : 'desc';
    	} else {
    		$sort = $asc ? 'asc' : 'desc';
    	}
//     	//鍙栧緱婊¤冻鏉′欢鐨勮褰曟暟
    	$count = $model->count();
    	if ($count > 0) {
    		if(empty($_GET["p"]))
    			$this->assign('p', 1);
    		else
    			$this->assign('p', $_GET["p"]);
    		import("ORG.Util.Page");    		
    		$p = new Page($count, 3);
    		$page = $p->show();
    		$list = $model->order('Id ASC')->limit($p->firstRow.','.$p->listRows)->select();
    		 
    		$this->assign('page', $page);
    		$this->assign("list",$list);
//     		$sortImg = $sort; //鎺掑簭鍥炬爣
//     		$sortAlt = $sort == 'desc' ? '鍗囧簭鎺掑垪' : '鍊掑簭鎺掑垪'; //鎺掑簭鎻愮ず
//     		$sort = $sort == 'desc' ? 1 : 0; //鎺掑簭鏂瑰紡
//     		//妯℃澘璧嬪�鏄剧ず
//     		$this->assign('list', $voList);
//     		$this->assign('sort', $sort);
//     		$this->assign('order', $order);
//     		$this->assign('sortImg', $sortImg);
//     		$this->assign('sortType', $sortAlt);
//     		$this->assign("page", $page);
    	}
     	Cookie::set('_currentUrl_', __SELF__);
    	
    	return;
    }
    function insert(){
    	$name = "article";
    	$model = D($name);
    	if (false === $model->create()) {
    		$this->error($model->getError());
    	}
    	//淇濆瓨褰撳墠鏁版嵁瀵硅薄
    	$list = $model->add();
    	if ($list !== false) { //淇濆瓨鎴愬姛
    		$this->assign('jumpUrl',U('Index/index'));
    		$this->success('鏂板鎴愬姛!');
    	} else {
    		//澶辫触鎻愮ず
    		$this->error('鏂板澶辫触!');
    	}
    }
    /*
     * add 鍑芥暟
     */
    function add(){
    	$this->display();
    }
    
    
    function getReturnUrl() {
        return __URL__ . '?' . C('VAR_MODULE') . '=' . MODULE_NAME . '&' . C('VAR_ACTION') . '=' . C('DEFAULT_ACTION');
    }
   }
   
   ?>
