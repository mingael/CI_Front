입력받은 자연수(N)의 각 자릿수의 합을 구하는 프로그램<br>

자연수 입력: 1234567

<pre>
	<code>
#include &lt;stdio.h&gt;

void main() {
	int input;
	int output = 0;
	printf("자연수 입력: ");
	scanf("%d", &input);
	
	while(input)
	{
		output += &lt;font color="red"&gt;input&lt;/font&gt; % 10;
		input /= &lt;font color="red"&gt;10&lt;/font&gt;;
	}
	
	printf("자릿수 합계: %d\n", output);
}
	</code>
</pre>
자연수 입력: 자릿수 합계: 28