<?=view('/common/header')?>

<div class="glass-bg">
	<div class="glass-box" id="login-box">
		<div class="box-center">
			<form name="frm" method="POST" action="/auth/login_act">
				<input class="glass-border" type="text" name="email" value=""><br>
				<input class="glass-border" type="password" name="pwd" value="" onkeyup="enter('end');"><br>
				<button class="glass-border" type="button" onclick="sendit();">Sign In</button>
			</form>
		</div>
	</div>
</div>

<script>
function sendit()
{
    if(isEmpty(frm.email, '이메일을 입력해주세요.'))
    {
        return false;
    }
    else if(isEmpty(frm.pwd, '비밀번호를 입력해주세요.'))
    {
        return false;
    }

    frm.submit();
}
</script>

<?=view('/common/footer')?>
