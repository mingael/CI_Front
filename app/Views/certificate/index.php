<?=view('/common/header')?>

<?php if(isset($v) && count($v) > 0) : ?>
<ul>
<?php foreach($v as $class) : ?>
	<li><a href="/certificate/study/<?=$class->idx?>"><?=$class->title?></a></li>
<?php endforeach; ?>
	<li><a href="/certificate/word_all">전체보기</a></li>
</ul>
<?php endif; ?>

<?=view('/common/footer')?>
