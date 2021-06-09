<?=view('/common/header')?>

<?=include('func.php')?>

<?=view('/certificate/example/nav')?>

<div class="content">
    <?php if(intval($num) > 0) : ?>
    <?=view('/certificate/example/'. $type .'_' . $num)?>
    <?php endif ?>
</div>

<?=view('/common/footer')?>