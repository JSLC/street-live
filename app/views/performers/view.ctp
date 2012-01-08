<div data-role='page'  data-theme='b'>
	<div data-role="header" >
	<a href="" style="margin-top:5px;" data-rel="back" data-direction="reverse" data-icon="back" data-iconpos="notext"></a>
	<h1 style="padding:0;margin:10px 0 10px 0;font-size:1.1em"><?php echo $performer['Performer']['name'] ?></h1>
	<a  style="margin-top:5px;" data-role="button"  data-icon="plus" data-iconpos="notext"></a>
	</div>
	<div data-role="content" style="margin:0;padding:5px;">
		<div>	
		<img src="<?php echo $performer['Performer']['midimg']; ?>" width="315px;" height="300px;">
		</div>
		<ul data-role="listview" data-theme="c">
			<li data-role="list-divider">メンバー紹介</li>
			<?php foreach($performer['Member'] as $member):?>
			<li><a href="/Members/view/<?php echo $member['id']?>"><?php echo $member['name']?></a></li>
			<?php endforeach;?>
			<li data-role="list-divider">活動開始日</li>
			<li><?php echo date('Y年m月d日',strtotime($performer['Performer']['begin'])) ?></li>
			<li data-role="list-divider">紹介</li>
			<li><?php echo $performer['Performer']['comment'] ?></li>
		</ul>
	</div>
	<div data-role="footer">
	</div>
</div>
