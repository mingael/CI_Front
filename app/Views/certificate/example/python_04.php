<?php
$title = '';
$code = '
#ps#import#pe# random
min = 1
max = 6
i = 0
while i < 3:
	num = random.randint(min, max)
	print(num, end=\'\')
	i = i + 1
';
$result = '613(실행할 때마다 다름)';
codeConvert($code, $title, $result);
?>