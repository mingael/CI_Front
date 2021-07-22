<?=view('/common/header')?>

<div class="wrap" style="height:auto !important; margin-top:16px;">
	<header class="header bg-alp">
		<a class="box-center" href="/certificate">HOME</a>
		<a class="box-right" href="/auth/logout">OUT</a>
	</header>
	<main class="container">
		<?=view($view_name)?>
	</main>
</div>

<?=view('/common/footer')?>