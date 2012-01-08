<div data-role="page" class="type-interior">
	<div data-role="header" data-position="fixed" data-theme="a">
		<h2 class="bigSizeFont"><?php echo $user['User']['name']?>のページ</h2>
	</div>
	<div data-role="content">
		<div class="content-primary">
			<ul data-role="listview" data-theme="c">
			<li data-role="list-divider" class="bigSizeFont">マイメニュー</li>
			<li><a href="/Users/mylive">お気に入りライブ</a></li>
			<li><a href="/Users/myperformer">お気に入りパフォーマー</a></li>
			<li data-role="list-divider" class="bigSizeFont">パフォーマーメニュー</li>
			<li><a href="/Performances/add/<?php echo $user['User']['id']?>">スケジュール登録</a></li>
			<li><a href="/Performances/edit/<?php echo $user['User']['id']?>">スケジュール編集</a></li>
			<li><a href="/Performers/edit/<?php echo $user['User']['id']?>">紹介文編集</a></li>
			</ul>
		</div>
	</div>
</div>
