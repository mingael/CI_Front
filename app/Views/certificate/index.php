<?php if(isset($list_data) && count($list_data) > 0) : ?>
<div class="white-box">
	<div class="list_title">
		Word
	</div>
	<ul class="list">
		<?php foreach($list_data as $class) : ?>
		<li><a href="/certificate/study/<?=$class['idx']?>"><?=$class['title']?></a></li>
		<?php endforeach; ?>
		<li><a href="/certificate/word_all">전체보기</a></li>
	</ul>
</div>
<?php endif; ?>

<div class="white-box">
	<div class="list_title">
		Code
	</div>
	<ul class="list">
		<li><a href="/certificate/example/algorism/1">알고리즘</a></li>
		<li><a href="/certificate/example/c/1">C언어</a></li>
		<li><a href="/certificate/example/java/1">JAVA</a></li>
		<li><a href="/certificate/example/python/1">Python</a></li>
	</ul>
</div>