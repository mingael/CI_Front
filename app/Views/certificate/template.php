<?=view('/common/header')?>

<div class="wrap" style="height:auto !important;">
	<header class="header">
		<a class="box-center" href="/certificate">HOME</a>
		<a class="box-right" href="/auth/logout">X</a>
	</header>
	<main class="container">
		<?=view($view_name)?>
	</main>
</div>

<?=view('/common/footer')?>