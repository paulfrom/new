<?php
   class CommonAction extends Action{
   	function index(){
   		import('@.ORG.Util.Cookie');
   		$map = $this->_search();
   		if (method_exists($this, '_filter')) {
   			$this->_filter($map);
   		}
   		$this->_list();
   		// $this->assign("name",$name);
   		//echo "xxx";
   		$this->display();
   		return;
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
   	    $list = $model->order('Id ASC')->limit(0,20)->select();   			 
   		//$this->assign('page', $page);
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
   		return;
   	}
   }
   ?>