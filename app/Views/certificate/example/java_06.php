<pre>
	<code>
class Test {
	public static void main (String[] args) throws java.lang.Exception {
		int a=1, b=43, c=3;
		int temp;
		
		temp = a;
		if(b &gt; temp) temp = b;
		if(c &gt; temp) temp = c;
		
		System.out.println(temp);
	}
}
	</code>
</pre>

<pre>
43
</pre>