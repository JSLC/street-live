<div  data-role='page' >
	<div data-role='header'>
		<a href="" data-rel="back" data-direction="reverse" data-icon="home">リストを見る</a>
		<h3><?php echo $movie['Performance']['title']; echo $movie['Movie']['title'];?></h3>
	</div>
	<div data-role="content" style="padding:5px;">
	<?php echo $movie['Movie']['url']; ?>
	</div>
</div>
