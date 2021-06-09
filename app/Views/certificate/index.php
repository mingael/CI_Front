<?php if(isset($list_data) && count($list_data) > 0) : ?>
<ul>
<?php foreach($list_data as $class) : ?>
	<li><a href="/certificate/study/<?=$class['idx']?>"><?=$class['title']?></a></li>
<?php endforeach; ?>
	<li><a href="/certificate/word_all">전체보기</a></li>
	<li><a href="/certificate/example/algorism/00">알고리즘</a></li>
	<li><a href="/certificate/example/c/00">C언어</a></li>
	<li><a href="/certificate/example/java/00">JAVA</a></li>
	<li><a href="/certificate/example/python/00">Python</a></li>
</ul>
<?php endif; ?>