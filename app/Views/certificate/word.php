<?php foreach($list_data as $idx => $item): ?>
<div class="box">
	<a href="/certificate/edit/<?=$idx?>"></a><b><?=$item['title']?></b><br>

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