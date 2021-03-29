<script>
<?php if($result === 'F'): ?>
	<?php if($err_cd === '0000'): ?>
	alert('로그인 실패');
	<?php elseif($err_cd === '0001'): ?>
	alert('지속적인 로그인 시도가 감지되었습니다.\n관리자에게 문의바랍니다.');
	<?php else: ?>
	alert('로그인 실패');
	<?php endif ?>
<?php endif ?>
location.href = '/auth/login';
</script>