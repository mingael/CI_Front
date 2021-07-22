<!doctype html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="author" content="promessa">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DRAGON</title>
    <link rel="stylesheet" type="text/css" href="/css/common.css?time=<?=date('Ymd')?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;600;700&amp;display=swap">
	<?php if(isset($link_list) && is_array($link_list)): ?>
	<?php foreach($link_list as $link): ?>
	<link rel="stylesheet" type="text/css" href="/css/<?=$link?>.css?time=<?=date('Ymd')?>">
	<?php endforeach; ?>
	<?php endif; ?>
</head>
<body>