<div data-role='page'  data-theme='b'>
	<div data-role="header" >
	<a href="" style="margin-top:5px;" data-rel="back" data-direction="reverse" data-icon="back" data-iconpos="notext"></a>
	<h1 style="padding:0;margin:10px 0 10px 0;font-size:1.1em"><?php echo $member['Member']['name'] ?></h1>
	<a  style="margin-top:5px;" data-role="button"  data-icon="plus" data-iconpos="notext"></a>
	</div>
	<div data-role="content" style="margin:0;padding:5px;">
		<div>	
		<img src="<?php echo $member['Member']['midimg']; ?>" width="315px;" height="300px;">
		</div>
		<ul data-role="listview" data-theme="c" data-inset="true">
			<li>
				<h3>名前</h3>
				<p><?php echo $member['Member']['name']?></p>
				<p><?php echo $member['Member']['nameyomi']?></p>
			</li>
			<li>
				<h3>出身地</h3>
				<p><?php echo $member['City']['name']?></p>
			</li>
			<li>
				<h3>血液型</h3>
				<p><?php echo $member['Blood']['name']?>型</p>
			</li>
			<li>
				<h3>身長</h3>
				<p><?php echo $member['Member']['height']?></p>
			</li>
			<li>
				<h3>コメント</h3>
				<div><?php echo $member['Member']['comments']?></div>
			</li>
		</ul>
		<h3>紹介</h3>
		<p><?php echo $member['Member']['intro']?></p>
	</div>
	<div data-role="footer">
	</div>
</div>

