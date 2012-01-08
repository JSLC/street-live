<div data-role="page" class="type-interior">
	<div data-role="header" data-position="fixed" data-theme="a">
		<h2 class="bigSizeFont">スケジュール確認</h2>
		<a  data-icon="back" data-iconpos="notext" data-direction="reverse" data-rel="back" class="ui-btn-left">Back</a>
	</div>
	<div data-role="content">
	</div>
	<div class="performances form">
	<?php echo $this->Form->create('Performance',array('action'=>'save'));?>
	<?php echo $this->Form->input('title',array('type'=>'hidden','label'=>'','div'=>false,'value'=>$userInput['title']))?>
	<?php echo $this->Form->input('stage',array('type'=>'hidden','label'=>'','div'=>false,'value'=>$userInput['stage']))?>
	<?php echo $this->Form->input('holdingdate',array('type'=>'hidden','label'=>'','div'=>false,'value'=>$userInput['holdingdate']))?>
	<?php echo $this->Form->input('comment',array('type'=>'hidden','label'=>'','value'=>$userInput['comment']))?>
	<?php echo $this->Form->input('performer_id',array('label'=>'','div'=>false,'type'=>'hidden','value'=>$userInput['performer_id']))?>
	<ul data-role="listview">
	<li data-role="list-divider" class="bigSizeFont">公演題目</li>
	<li><?php echo  $userInput['title']?></li>
	<li data-role="list-divider" class="bigSizeFont">公演場所</li>
	<li><?php echo $userInput['stage'] ?></li>
	<li data-role="list-divider" class="bigSizeFont">公演日程</li>
	<li><?php echo date('Y年m月d日 H時i分',strtotime($userInput['holdingdate'])) ?></li>
	<li data-role="list-divider" class="bigSizeFont">公演内容</li>
	<li><?php echo $userInput['comment']?></li>
	<?php echo $this->Form->end(__('保存', true));?>
	<a data-role="button"  data-direction="reverse" data-rel="back" class="ui-btn-left">編集</a>
</ul>
</div>

</div>
</div>
</div>
