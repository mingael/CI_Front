<?php
$title = 'C언어 문자열 상수와 포인터';
$code = '
#include <stdio.h>
 
int main(void) {
	char str[] = "KOREA";
	printf("%s\n", str);
	printf("%s\n", str + 3);
	printf("%c\n", str[0]);
	printf("%p\n", str);
	printf("%p\n", &str);
 
	char *p = "KOREA";
	printf("%s\n", p);
	printf("%s\n", p + 3);
	printf("%c\n", *p);
	printf("%c\n", *(p + 3));
	printf("%c\n", *p + 3);
	printf("%p\n", p);
	printf("%p\n", &p);
	return 0;
}
';
$result = '
KOREA
EA
K
0x7ffda8806762
0x7ffda8806762

KOREA
EA
K
E
N
0x55e14ac42010
0x7ffeda2b30a8
';
codeConvert($code, $title, $result);
?>

<pre>
문자열 상수 "KOREA"
<table>
	<tr>
		<td>K</td>
		<td>O</td>
		<td>R</td>
		<td>E</td>
		<td>A</td>
		<td>\0</td>
	</tr>
</table>
printf 함수의 포맷 %s : 주소의 내용을 '\0'(NULL)전까지 출력한다.

char *p : 문자열 상수의 시작 주소를 가진다.

printf("%s\n", p); : p 주소부터 '\0'전까지 내용 출력
printf("%s\n", p + 3); : p 위치로부터 3칸 떨어진 거리에 있는 주소부터 '\0'전까지 내용 출력
printf("%c\n", *p); : *는 포인트 연산자. 주소의 내용 출력한다. p는 K의 주소를 가지고 있으므로 K 출력
printf("%c\n", *(p + 3)); : P 위치로부터 3칸 떨어진 거리에 있는 주소의 내용을 출력
printf("%c\n", *p + 3); : p의 주소 내용(문자열 상수 시작주소 = K) + 3
</pre>
