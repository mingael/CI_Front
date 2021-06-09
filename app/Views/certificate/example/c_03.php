<?php
$title = '거품정렬';
$code = '
#include <stdio.h>

#define SIZE 4

void main() {
	int list[SIZE] = {7, 2, 4, 1};
	bubble_sort(list);
}

void bubble_sort(int* list)
{
	int i, j, temp;
	
	for(i=0; i<SIZE-1; i++)
	{
		for(j=0; j<(SIZE-1)-i; j++)
		{
			if(list[j] > list[j+1])
			{
				temp = list[j];
				list[j] = list[j+1];
				list[j+1] = temp;
			}
		}
	}
	
	for(i=0; i<SIZE; i++)
	{
		printf("%d ", list[i]);
	}
}
';
$result = '1 2 4 7';
codeConvert($code, $title, $result);
?>