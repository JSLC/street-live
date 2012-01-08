<?php
class User extends AppModel {
	var $name = 'User';
	var $validate = 
		array('username' => array( 
				'isUnique' => array(     
					'rule' => 'isUnique',
					'message'=>'すでに登録されているIDです。'  
					),   
				'notEmpty' => array(  
					'rule' => 'notEmpty',         
					'required' => true, 
					'message'=>'ログインIDを入力してください。',
				'email'=>array(
					'rule'=>'email',
					'message'=>'メールアドレスを入力してください。'
				)
					)   
				),
			'name' => array( 
				'isUnique' => array(     
					'rule' => 'isUnique',
					'message'=>'すでに登録されているネームです。'  
					),   
				'notEmpty' => array(  
						'rule' => 'notEmpty',         
					'required' => true, 
					'message'=>'ニックネームを入力してください。'  
					)   
				),
			'password' => array( 
				'notEmpty' => array(  
					'rule' => 'notEmpty',         
					'required' => true, 
					'message'=>'パスワードを入力してください。'  
					)   
				),
			
				);
}
?>
