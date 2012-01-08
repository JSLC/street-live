<div data-role="page">
<div data-role="header">
<h2>会員登録</h2>
</div>
<div data-role="content">
<div class='error-message'><h3><?php echo $this->Session->flash('inputError'); ?></h2></div>
<?php echo $deviceid;?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php __('会員登録'); ?></legend>
    <?php
        //echo $this->Form->input('name');
        echo $this->Form->input('username',
				array('class'=>'email hankaku required',
					'div'=>false,
					'label'=>'ログインID (E-mail)',
				));
		echo $this->Form->input('name',
					array('div'=>false,
						'label'=>'ニックネーム(全角10文字以内)')
		);
  
		echo $this->Form->input('password',
							array('class'=>'',
								  'div'=>false,
								  'label'=>'パスワード入力(半角英数字)'));
		echo $this->Form->input('deviceid',array('type'=>'hidden','value'=>$deviceid));
		echo $this->Form->input('device',array('type'=>'hidden','value'=>$device));
    ?>  
    </fieldset>
<?php echo $this->Form->end(__('会員登録', true));?>
</div>
