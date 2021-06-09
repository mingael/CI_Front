<?php
$title = '사용자 정의 함수';
$code = '
#ps#def#pe# add(a, b):
	return a + b

print(add(2, 3))
print(add(3.14, 5.5))
print(add(1+2j, 3+4j))
print(add("abs", "def"))
';
$result = '
5
8.64
(4+6j)
absdef
';
codeConvert($code, $title, $result);

//--------------------------------------

$title = '';
$code = '
def print_reverse(string):
	print(string[::-1].upper())

print_reverse(\'python\')
';
$result = 'NOHTYP';
codeConvert($code, $title, $result);

//--------------------------------------

$title = '';
$code = '
def func1(num):
	return num + 3

def func2(num):
	num = num + 1	# 후위 증감연산자 없음
	return func1(num)

result = func2(10)
print(result)
';
$result = '14';
codeConvert($code, $title, $result);
?>