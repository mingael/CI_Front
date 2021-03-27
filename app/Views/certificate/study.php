<?php view('/common/header'); ?>

<?php if(isset($list) && count($list) > 0) : ?>
    <?php foreach($list as $item): ?>
        <h5><?php echo $item['title']; ?></h5>
        <?php if(isset($item['sub'])) : ?>
        1
            <?php echo $item['sub']; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<?php view('/common/footer'); ?>
