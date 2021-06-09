<?php
$title = '비트 연산';
$code = '
#include <stdio.h>
void main()
{
	int a = 7;
	int b = 4;
	int x = a & b;
	int y = a | b;
	int z = a ^ b;
	printf("결과 x : %d\n", x);
	printf("결과 y : %d\n", y);
	printf("결과 z : %d\n", z);
}
';
$result = '
4
7
3
';
codeConvert($code, $title, $result);
?>
<pre>
7: 111
4: 100

& : 비트 AND 연산자는 같이 자리수가 둘 다 1이면 1 => 100
| : 비트 OR 연산자는 같은 자리수가 하나라도 1이면 1 => 111
^ : 비트 XOR 연산자는 같은 자리수가 둘 다 1이거나 0이면 0 => 011
</pre>