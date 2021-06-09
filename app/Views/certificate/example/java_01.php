<?php
$title = '거품정렬 오름차순';
$code = '
import java.util.*;
import java.lang.*;
import java.io.*;

class Test
{
	public static void main (String[] args)
	{
		int[] E = {#ps#95, 75, 85, 100, 50#pe#};
		
		for(int i=0; i<4; i++)
		{
			for(int j=0; j<4-i; j++)
			{
				System.out.print(i + ", " + j + " : ");
				for(int a=0; a<5; a++)
				{
					if(j == a || (j+1) == a)
					{
						System.out.print("*");
					}
					System.out.print(E[a] + " ");
				}
				
				if(#ps#E[j]#pe# > E[j+1])
				{
					int temp = E[j];
					#ps#E[j]#pe# = E[j+1];
					E[j+1] = temp;
					
					System.out.print(" !!");
				}
				
				System.out.print("\n");
			}
		}
		
		for(int i=0; i<5; i++)
		{
			System.out.print(E[i] + " ");
		}
	}
}
';
$result = '
0, 0 : *95 *75 85 100 50  !!
0, 1 : 75 *95 *85 100 50  !!
0, 2 : 75 85 *95 *100 50 
0, 3 : 75 85 95 *100 *50  !!
1, 0 : *75 *85 95 50 100 
1, 1 : 75 *85 *95 50 100 
1, 2 : 75 85 *95 *50 100  !!
2, 0 : *75 *85 50 95 100 
2, 1 : 75 *85 *50 95 100  !!
3, 0 : *75 *50 85 95 100  !!
50 75 85 95 100
';
codeConvert($code, $title, $result);
?>