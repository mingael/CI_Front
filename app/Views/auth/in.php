<?php view('/common/header'); ?>
<form name="frm" method="POST" action="/auth/in_act">
    <input type="text" name="email" value="">
    <input type="password" name="pwd" value="">
    <button>signin</button>
</form>
<?php view('/common/footer'); ?>
