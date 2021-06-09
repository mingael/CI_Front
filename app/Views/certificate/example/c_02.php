<?php
$title = '입력받은 자연수(N)의 각 자릿수의 합을 구하는 프로그램';
$code = '
#include <stdio.h>

void main() {
	int input;
	int output = 0;
	printf("자연수 입력: ");	# 자연수 입력: 1234567
	scanf("%d", &input);
	
	while(input)
	{
		output += #ps#input#pe# % 10;
		input /= #ps#10#pe#;
	}
	
	printf("자릿수 합계: %d\n", output);
}
';
$result = '자연수 입력: 자릿수 합계: 28';
codeConvert($code, $title, $result);
?>