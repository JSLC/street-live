<?php
class AppController extends Controller {
	var $helpers = array('Html', 'Session','Ajax','Javascript','Form');
	var $components = array( 'Session', 'Email');
	function afterFilter(){
		// $this->set('title_for_layout','abc');
	}
	function beforeFilter() {
		parent::beforeFilter();
	}
	function beforeRender(){   
		parent::beforeRender();
		/*
		$data=explode(',',$_SERVER['HTTP_USER_AGENT']);
		$userinfo=array();
		foreach($data as $d){
			$temp=explode(":",$d);
			$userInfo[]=array($temp[0]=>$temp[1]);
		}*/
		$userInfo=null;
		$this->set('userInfo',$userInfo);
	}
}
?>             
