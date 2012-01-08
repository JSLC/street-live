<div data-role='page'  data-theme='b'>
	<div data-role="header" >
	<a href="" style="margin-top:5px;" data-rel="back" data-direction="reverse" data-icon="back" data-iconpos="notext"></a>
	<h1 style="padding:0;margin:10px 0 10px 0;font-size:1.1em"><?php echo $performance['Performance']['title'] ?></h1>
	<a  style="margin-top:5px;" data-role="button"  data-icon="plus" data-iconpos="notext"></a>
	</div>
	<a href=""  data-rel="back" data-direction="reverse" data-icon="back"></a>
	<div data-role="content" style="margin:0;padding:5px;">
		<?php echo $performance['Movie'][0]['url']; ?>
		<br />
		<br />
		<ul data-role="listview">
		<li data-role="list-divider">公演者</li>
		<li>
			<p><?php echo $performance['Performer']['name']?>
			<br />
			<?php echo $performance['Performer']['comment']?>
		</p>

		</li>
		<li data-role="list-divider">公演内容</li>
		<li>
		<p><?php echo $performance['Performance']['comment']?></p>
		</li>
		<li data-role="list-divider">公演日時</li>
		<li><p><?php echo date('Y年m月d日 H時i分',strtotime($performance['Performance']['holdingdate']));?></p></li>
		<li data-role="list-divider">公演場所</li>
		<li><p><?php echo $performance['Performance']['stage']?></p></li>
		</ul>
	</div>
	<div data-role="footer">
	</div>
</div>
