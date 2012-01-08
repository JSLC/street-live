<div data-role="page">
<div data-role="header">
<h2>ログイン</h2>
</div>

<div data-role="content" style="margin:10px;">
<?php 
if ($session->check('Message.auth'))echo $session->flash('auth');
echo $form->create('User', array('action' => 'login'));
echo $form->input('username',array('class'=>'','label'=>'ログインID','div'=>false));
echo $form->input('password',array('label'=>'パスワード'));
echo $form->input('deviceid',array('type'=>'hidden','value'=>$deviceid));
echo $form->input('device',array('type'=>'hidden','value'=>$device));
echo $form->end('ログイン');
?>
<a href="/Users/add/<?php echo $device.'?deviceid='.$deviceid?>" data-transition="flip" data-role="button">会員登録</a>
</div>
</div>
