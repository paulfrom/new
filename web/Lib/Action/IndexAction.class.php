<?php
// 鏈被鐢辩郴缁熻嚜鍔ㄧ敓鎴愶紝浠呬緵娴嬭瘯鐢ㄩ�
class IndexAction extends CommonAction {
    function show(){
    header("Content-Type:text/html; charset=utf-8");
   	$model=D("article");
   	$id=$_REQUEST["id"];
   	$result=$model->where("id=".$id)->find();
   	if ($result) {
   		$this->assign('vo', $result);
   	} else {
   		$this->redirect('index');
   		return;
   	}   	
   	$this->assign("vo",$result);
   	$this->display();
   }
   function test(){
   	$id=$_get("id");
   //	$id="7";
   	echo $id;
   	$model=D("article");
   	//	$id=$_REQUEST("id");
   	$result=$model->where("id="."1")->find();
   	$this->assign("vo",$result);
   	$this->display();
   }
}