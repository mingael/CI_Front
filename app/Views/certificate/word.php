<?=view('/common/header')?>

<?php foreach($list as $item): ?>
<div class="box">
	<b><?=$item['title']?></b><br>

	<?=$item['summary'] ?? ''?>
	<?php if(isset($item['contents'])): ?>
	<ul>
		<?php foreach($item['contents'] as $conts): ?>
			<li><?=$conts['content']?></li>
		<?php endforeach ?>
	</ul>
	<?php endif ?>
</div>
<?php endforeach ?>

<?=view('/common/footer')?>