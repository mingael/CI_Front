<?php
$title = 'range(시작, 끝,스텝) : 시작 <= idx < 끝';
$code = '
#ps#for#pe# x #ps#in range#pe#(1, 11):
	print(x, end=\' \')
';
$result = '1 2 3 4 5 6 7 8 9 10 ';
codeConvert($code, $title, $result);

//-----------------------------------------------

$title = '구구단';
$code = '
base = int(input(\'출력할 단을 입력하세요\'));
#ps#for#pe# i in range(1, 10):
	print(base, \'*\', i, \'=\', base * i);
';
$result = '
출력할 단을 입력하세요2 * 1 = 2
2 * 2 = 4
2 * 3 = 6
2 * 4 = 8
2 * 5 = 10
2 * 6 = 12
2 * 7 = 14
2 * 8 = 16
2 * 9 = 18
';
codeConvert($code, $title, $result);

//-----------------------------------------------

$title = 'lower';
$code = '
#ps#for#pe# a #ps#in#pe# [\'A\', \'B\', \'C\']:
	b = a.#ps#lower()#pe#
	print("결과 : ", b)
';
$result = '
결과 :  a
결과 :  b
결과 :  c
';
codeConvert($code, $title, $result);

//-----------------------------------------------

$title = '역순';
$code = '
alphabet = [\'A\', \'B\', \'C\']
#ps#for#pe# a #ps#in#pe# alphabet[::-1]:
    print(a)
';
$result = '
C
B
A
';
codeConvert($code, $title, $result);