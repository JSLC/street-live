<div data-role="page" class="type-interior">
	<div data-role="header" data-position="fixed" data-theme="a">
		<h2 class="bigSizeFont" style="margin:5px 0px 5px 0px;padding:0;">新規スケジュール登録</h2>
		<a data-icon="back" data-iconpos="notext" data-direction="reverse" class="ui-btn-left" data-rel="back">Back</a>
	</div>
	<div data-role="content">


<div class="performances form">
<form action="/performances/confirm" id="PerformanceAddForm" method="post" data-ajax="false" accept-charset="utf-8">
<?php echo  $this->Form->input('performer_id',array('label'=>'','div'=>false,'type'=>'hidden','value'=>1))?>
<ul data-role="listview">
	<li data-role="list-divider" class="bigSizeFont">公演題目</li>
	<li><?php echo  $this->Form->input('title',array('label'=>'','div'=>false))?></li>
	<li data-role="list-divider" class="bigSizeFont">公演場所</li>
	<li><?php echo  $this->Form->input('stage',array('label'=>'','div'=>false))?></li>
	<li data-role="list-divider" class="bigSizeFont">公演日程</li>
	<li>
		

		<select name="data[holdingdate][year]">
		<option value="2012">年を選択</option>
		<?php  
		for($i=2011;$i<2013;$i++):
			if($userInput['holdingdate']['year']==$i){
				echo "<option value=\"{$i}\" selected=\"selected\">{$i}年</option>";
			}else{
				echo "<option value=\"{$i}\" >{$i}年</option>";
			}
		endfor;
		?>
		</select>
		
		<select name="data[holdingdate][month]">
		<option value="01">月を選択</option>
		<?php
		for($i=1;$i<13;$i++):
			if($i<10)$curMonth='0'.$i;
			else $curMonth=$i;	
			
			if($userInput['month']==$curMonth){
				echo "<option value=\"{$curMonth}\" selected=\"selected\">{$curMonth}月</option>";
			}else{
				echo "<option value=\"{$curMonth}\">{$curMonth}月</option>";
			}
		endfor;?>
		</select>


		<select name="data[holdingdate][day]">
		<option value="01">日を選択</option>
		<?php
		for($i=1;$i<32;$i++):
			if($i<10)$curDay='0'.$i;
			else $curDay=$i;	
			
			if($userInput['holdingdate']['day']==$curDay){
				echo "<option value=\"{$curDay}\" selected=\"selected\">{$curDay}日</option>";
			}else{
				echo "<option value=\"{$curDay}\">{$curDay}日</option>";
			}
		endfor;?>
		</select>

		<select name="data[holdingdate][hour]">
		<option value="01">時間を選択</option>
		<?php
		for($i=0;$i<24;$i++):
			if($i<10)$curHour='0'.$i;
			else $curHour=$i;	
			
			if($userInput['holdingdate']['hour']==$curHour){
				echo "<option value=\"{$curHour}\" selected=\"selected\">{$curHour}時</option>";
			}else{
				echo "<option value=\"{$curHour}\">{$curHour}時</option>";
			}
		endfor;?>
		</select>

		<select name="data[holdingdate][min]">
		<option value="10">分を選択</option>
		<?php
		for($i=00;$i<60;$i=$i+10):
			if($i<10)$curMin='0'.$i;
			else $curMin=$i;	
			
			if($userInput['min']==$curMin){
				echo "<option value=\"{$curMin}\" selected=\"selected\">{$curMin}分</option>";
			}else{
				echo "<option value=\"{$curMin}\">{$curMin}分</option>";
			}
		endfor;?>
		</select>
	</li>
	<li data-role="list-divider" class="bigSizeFont">公演内容</li>
	<li><?php echo  $this->Form->input('comment',array('label'=>'','div'=>false))?></li>
<?php echo $this->Form->end(__('入力内容確認', true));?>
</ul>
</div>

</div>
</div>
