<?php
$title = '최솟값과 최댓값 구하기';
$code = '
#include <stdio.h>

void main()
{
	int arr[5] = {70, 60, 55, 90, 85};
	int min = 99;
	int max = 0;

	int i;
	for(i=0; i<5; i++)
	{
		if(min > arr[i]) min = arr[i];
		if(max < arr[i]) max = arr[i];
	}

	printf("최솟값 : %d\n", min);
	printf("최댓값 : %d\n", max);
}
';
$result = '
최솟값 : 55
최댓값 : 90
';
codeConvert($code, $title, $result);
?>