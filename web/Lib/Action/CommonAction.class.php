<?php
   class CommonAction extends Action{
   	function index(){
   		import('@.ORG.Util.Cookie');
   		$map = $this->_search();
   		if (method_exists($this, '_filter')) {
   			$this->_filter($map);
   		}
   		$this->_list();
   		$this->display();
   		return;
   	}

   	/*
   	 * map 閺傝纭�
   	*/
   	protected function _search($name = '') {
   		//閻㈢喐鍨氶弻銉嚄閺夆�娆�
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
   	 * 閺嶈宓佺悰銊ュ礋閻㈢喐鍨氶弻銉嚄閺夆�娆�
   	 * 鏉╂稖顢戦崚妤勩�鏉╁洦鎶�
   	 +----------------------------------------------------------
   	 * @access protected
   	 +----------------------------------------------------------
   	 * @param Model $model 閺佺増宓佺�纭呰杽
   	 * @param HashMap $map 鏉╁洦鎶ら弶鈥叉
   	 * @param string $sortBy 閹烘帒绨�
   	 * @param boolean $asc 閺勵垰鎯佸锝呯碍
   	 +----------------------------------------------------------
   	 * @return void
   	 +----------------------------------------------------------
   	 * @throws ThinkExecption
   	 +----------------------------------------------------------
   	 */
   	protected function _list() {
   		//     	//閹烘帒绨�妤侇唽 姒涙顓绘稉杞板瘜闁款喖鎮�
   		$name ="article"; //$this->getActionName();
   		$model = D($name);
   	    $list = $model->order('Id ASC')->limit(0,20)->select();   			 
   		//$this->assign('page', $page);
   		$this->assign("list",$list);
   			//     		$sortImg = $sort; //閹烘帒绨崶鐐垼
   			//     		$sortAlt = $sort == 'desc' ? '閸楀洤绨幒鎺戝灙' : '閸婃帒绨幒鎺戝灙'; //閹烘帒绨幓鎰仛
   			//     		$sort = $sort == 'desc' ? 1 : 0; //閹烘帒绨弬鐟扮础
   			//     		//濡剝婢樼挧瀣拷閺勫墽銇�
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