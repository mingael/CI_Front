<?php
$title = 'for문';
$code = '
class Test
{
	public static void main (String[] args)
	{
		String week[] = {"일", "월", "화", "수", "목", "금", "토"};

		for(String w : week)
		{
			System.out.print(w + "요일");
		}
	}
}
';
$result = '일요일월요일화요일수요일목요일금요일토요일';
codeConvert($code, $title, $result);

//-------------------------------------------------------------------------------------

$title = '1';
$code = '
class Test
{
	public static void main (String[] args)
	{
		int[] arr = {1, 2, 3, 4, 5};
		int sum = 0;

		for(int i : arr)
		{
			sum+= i;
			if(i != arr.length)
				System.out.print(i + "+");
			else
				System.out.print(i + "=");
		}
		System.out.println(sum);
	}
}
';
$result = '1+2+3+4+5=15';
codeConvert($code, $title, $result);

//-------------------------------------------------------------------------------------

$title = '숫자 배열 길이는 length';
$code = '
class Test
{
	public static void main (String[] args)
	{
		int k[] = {1, 2, 3, 4, 5};
		System.out.println(sum(k));
	}

	public static int sum(int arr[])
	{
		int n, s = 0;
		for(n=0; n<#ps#arr.length#pe#; n++)
			s += arr[n];
		return s;
	}
}
';
$result = '15';
codeConvert($code, $title, $result);


//-------------------------------------------------------------------------------------

$title = '문자열 배열 길이는 length() / charAt';
$code = '
class Test
{
	public static void main (String[] args)
	{
		String text = "Love is a variety of different feelings , states, and"
		+ "attitudes that ranges from interpersonal affection to pleasure.";

		int cnt = 0;
		for(int i=0; i<#ps#text.length()#pe#; i++)
			if(#ps#text.charAt(i)#pe# == \'a\') cnt++;

		System.out.println("a문자: " + cnt);
	}
}
';
$result = 'a문자: 10';
codeConvert($code, $title, $result);
?>