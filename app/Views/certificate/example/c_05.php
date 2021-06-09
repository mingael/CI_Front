<?php
$title = '1부터 10까지 짝수의 합계';
$code = '
#include <stdio.h>
 
void main()
{
	int a = 0;
	int sum = 0;

	do {
		a = a + 1;
		if(a % 2 == 0)
		{
			sum += a;
		}
	} while(a <= 10);

	printf("%d\n", sum);
}
';
$result = '30';
codeConvert($code, $title, $result);
?>