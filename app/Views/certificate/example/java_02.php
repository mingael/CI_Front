실행 결과 쓰기

<pre>
	<code>
import java.util.*;
import java.lang.*;
import java.io.*;

class Test
{
	public static void main (String[] args) throws java.lang.Exception
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
		
		for(int j=0; j&lt;arr.length; j++)
		{
			System.out.printf("%d", arr[j]);
		}
	}
}
	</code>
</pre>

00001011