<?php if(isset($list_data) && count($list_data) > 0) : ?>
    <?php foreach($list_data as $item): ?>
        <h5><?php echo $item['title']; ?></h5>
        <?php if(isset($item['sub'])) : ?>
            <?php echo $item['sub']; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>