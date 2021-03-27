<?php view('/common/header'); ?>
<?php foreach($list as $item): ?>
<h5><?=$item['title']?></h5>
<?=$item['summary'] ?? ''?>
    <?php if(isset($item['contents'])): ?>
    <ul>
        <?php foreach($item['contents'] as $conts): ?>
            <li><?=$conts['content']?></li>
        <?php endforeach ?>
    </ul>
    <?php endif ?>
<?php endforeach ?>
<?php view('/common/footer'); ?>