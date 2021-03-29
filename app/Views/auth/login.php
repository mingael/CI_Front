<?=view('/common/header')?>

<div id="login-box">
	<div class="box-center">
		<form name="frm" method="POST" action="/auth/login_act">
			<ul>
				<li><input type="text" name="email" value=""></li>
				<li><input type="password" name="pwd" value=""></li>
				<li><button type="button" onclick="sendit()">Sign in</button></li>
			<ul>
		</form>
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
