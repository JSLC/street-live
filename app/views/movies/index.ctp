<div data-role='page'  data-theme='b' id='movies1'>
	<div data-role="header">
	<h1>最新ライブ</h1>
	</div>
	<div data-role="content">
	<ul data-role="listview"  data-theme="c" >
	<?php foreach ($movies as $movie):?>
	<li><a  href='/movies/view/<?php echo $movie['Movie']['id'];?>'><?php echo $movie['Performance']['title'];?></a></li>
	<?php endforeach; ?>
	</ul>
	</div>
	<div data-role="footer">
	</div>
</div>

