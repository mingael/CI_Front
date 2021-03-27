<?php view('/common/header'); ?>

<?php if(isset($v) && count($v) > 0) : ?>
<ul>
<?php foreach($v as $class) : ?>
	<li><a href="/certificate/study/<?=$class->idx?>"><?=$class->title?></a></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

<?php view('/common/footer'); ?>
