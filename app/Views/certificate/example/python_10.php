<?php
$title = '배열';
$code = '
a = [4, 2, 7, 3, 5]
print(a[-2])	# 뒤에서 두번째 위치에 있는 데이터
print(a[4])	# index가 4인 데이터
print(a[0:2])	# 0 <= index < 2 범위에 있는 데이터
print(a[::-1])
';
$result = '
3
5
[4, 2]
[5, 3, 7, 2, 4]
';
codeConvert($code, $title, $result);
?>