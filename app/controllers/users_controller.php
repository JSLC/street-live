<?php
class UsersController extends AppController {
    
	var $components = array( 'Auth');
	function beforeFilter() {
        $this->Auth->loginError="ログイン情報が正しくありません。";
        $this->Auth->authError = "ログインしてください。";
        $this->Auth->allow('add','login');
		$this->Auth->loginRedirect="/Users/home";
    } 
	function mylive(){
		$this->set('user',$this->Auth->user());
	}
	function myperformer(){
		$this->set('user',$this->Auth->user());
	}
	function index(){

	} 
    function login($device='pc') {
//		print_r($this->Auth->user());
		if($this->data){
		$this->set('device',$this->data['User']['device']);
		$this->set('deviceid',$this->data['User']['deviceid']);
		}else{
		$this->set('device',$device);
		$this->set('deviceid',$this->params['url']['deviceid']);
        }
		$this->layout='logout';
	
    }   
    function logout(){
        $this->redirect($this->Auth->logout());
    }   
	
	function add($device='iphone') {
		if (!empty($this->data)) {
			//ユニークユーザ確認
			$this->User->set($this->data);
			if(!$this->User->validates()){
			$this->Session->setFlash('登録情報に誤りがありました。メッセージを参考に修正してください.','default',null,'inputError');	
			$this->set('device',$this->data['User']['device']);
			$this->set('deviceid',$this->data['User']['deviceid']);
			}else{
			 
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect('login/'.$this->data['User']['device'].'?deviceid='.$this->data['User']['deviceid']);
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
				$this->redirect('login/'.$this->data['device'].'?deviceid='.$this->data['deviceid']);
				}   
			}
		}else{
			$this->set('device',$device);
			$this->set('deviceid',$this->params['url']['deviceid']);
			$this->layout='logout';
		}  
    }   
	function home(){
//		$this->redirect('http://www.street-live.net/Users/add');	
		$this->set('user',$this->Auth->user());	
	}

} 

?>
