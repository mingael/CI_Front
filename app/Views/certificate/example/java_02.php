<?php
$title = '2진수 구하기';
$code = '
import java.util.*;
import java.lang.*;
import java.io.*;

class Test
{
	public static void main (String[] args)
	{
		int[] arr = new int[8];
		
		int n = 11;
		int i = arr.length - 1;
		
		while(n != 0)
		{
			arr[i] = n % 2;
			n /= 2;
			i--;
		}
		
		for(int j=0; j<arr.length; j++)
		{
			System.out.printf("%d", arr[j]);
		}
	}
}
';
$result = '00001011';
codeConvert($code, $title, $result);
?>