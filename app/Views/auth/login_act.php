<script>
<?php if($res_code !== 'P000'): ?>
	<?php if($res_code === '0001'): ?>
	alert('존재하지 않는 유저입니다.');
	<?php elseif($res_code === '0003'): ?>
	alert('지속적인 로그인 시도가 감지되었습니다.\n관리자에게 문의바랍니다.');
	<?php else: ?>
	alert('로그인을 실패했습니다.');
	<?php endif ?>
<?php endif ?>
location.href = '/auth/login';
</script>