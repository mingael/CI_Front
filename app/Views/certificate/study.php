<?php if(isset($list_data) && count($list_data) > 0) : ?>
    <?php foreach($list_data as $subject): ?>
        <h3><?=$subject['title']?></h3>
		<?php if(isset($subject['list']) && count($subject['list']) > 0): ?>
			<?php foreach($subject['list'] as $list): ?>
				<?=$list?>
			<?php endforeach; ?>
		<?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>