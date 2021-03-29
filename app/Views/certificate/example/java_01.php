오름차순 정렬

<pre>
	<code>
import java.util.*;
import java.lang.*;
import java.io.*;

class Test
{
	public static void main (String[] args) throws java.lang.Exception
	{
		int[] E = {&lt;font color="red"&gt;95, 75, 85, 100, 50&lt;/font&gt;};
		
		for(int i=0; i&lt;4; i++)
		{
			for(int j=0; j&lt;4-i; j++)
			{
				System.out.print(i + ", " + j + " : ");
				for(int a=0; a&lt;5; a++)
				{
					if(j == a || (j+1) == a)
					{
						System.out.print("*");
					}
					System.out.print(E[a] + " ");
				}
				
				if(&lt;font color="red"&gt;E[j]&lt;/font&gt; &gt; E[j+1])
				{
					int temp = E[j];
					&lt;font color="red"&gt;E[j]&lt;/font&gt; = E[j+1];
					E[j+1] = temp;
					
					System.out.print(" !!");
				}
				
				System.out.print("\n");
			}
		}
		
		for(int i=0; i&lt;5; i++)
		{
			System.out.print(E[i] + " ");
		}
	}
}
	</code>
</pre>

<pre>
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
</pre>