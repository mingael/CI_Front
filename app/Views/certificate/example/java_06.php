<?php
$title = '값 교환';
$code = '
class Test
{
	public static void main (String[] args)
	{
		int a=1, b=43, c=3;
		int temp;
		
		temp = a;
		if(b > temp) temp = b;
		if(c > temp) temp = c;
		
		System.out.println(temp);
	}
}
';
$result = '43';
codeConvert($code, $title, $result);
?>