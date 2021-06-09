<?php
$title = '짝수와 홀수';
$code = '
class Test
{
	public static void main (String[] args)
	{
		int[] a = makeArray(5);
		for(int i=0; i<a.length; i++)
		{
			if(i % 2 == 0) continue;
			System.out.print(a[i] + " ");
		}
	}
	
	public static int[] makeArray(int n)
	{
		int[] arr = new int[n];
		
		for(int i=0; i<n; i++)
		{
			arr[i] = i * 2;
		}
		
		return arr;
	}
}
';
$result = '2 6';
codeConvert($code, $title, $result);
?>
- i가 짝수일 때 출력