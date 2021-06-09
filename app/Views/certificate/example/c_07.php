<?php
$title = '2의 배수이면서 3의 배수에 해당하는 요소의 개수';
$code = '
#include <stdio.h>

void main()
{
	int arr[10] = {7, 6, 5, 12, 3, 2, 15, 77, 18, 10};
	int cnt = 0;

	int i;
	for(i=0; i<10; i++)
	{
		if(arr[i] % 2 == 0 &&  arr[i] % 3 == 0)
			cnt++;
	}

	printf("%d\n", cnt);
}
';
$result = '3';
codeConvert($code, $title, $result);
?>