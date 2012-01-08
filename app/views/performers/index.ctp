<div data-role='page'  data-theme='b'>
	<div data-role="header">
	<a data-icon="refresh" href="Performers/index/" data-transition="flip">更新</a>
	<h1>公演者リスト</h1>
	</div>
	<div data-role="content">
		<div class="content-primary">	
		<ul data-role="listview" data-theme="c">
		<?php foreach ($performers as $performer):?>
		<li><a href="/Performers/view/<?php echo  $performer['Performer']['id'] ?>">
				<img src="/img/<?php echo  $performer['Performer']['thumbnail']?>" />
				<h3><?php echo $performer['Performer']['name'] ?></h3>
			</a>
		</li>
		<?php endforeach; ?>
		</ul>
		</div>
	</div>
	<div data-role="footer">
	</div>
</div>

