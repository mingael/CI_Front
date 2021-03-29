<pre>
	<code>
class Test {
	public static void main (String[] args) throws java.lang.Exception {
		int[] a = makeArray(5);
		for(int i=0; i&lt;a.length; i++)
		{
			if(i % 2 == 0) continue;
			System.out.print(a[i] + " ");
		}
	}
	
	public static int[] makeArray(int n) {
		int[] arr = new int[n];
		
		for(int i=0; i&lt;n; i++)
		{
			arr[i] = i * 2;
		}
		
		return arr;
	}
}
	</code>
</pre>

<pre>
2 6
</pre>

i가 짝수일 때만 출력