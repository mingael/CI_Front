<pre>
	<code>
#include &lt;stdio.h&gt;

#define SIZE 4

void main() {
	int list[SIZE] = {7, 2, 4, 1};
	bubble_sort(list);
}

void bubble_sort(int* list)
{
	int i, j, temp;
	
	for(i=0; i&lt;SIZE-1; i++)
	{
		for(j=0; j&lt;(SIZE-1)-i; j++)
		{
			if(list[j] &gt; list[j+1])
			{
				temp = list[j];
				list[j] = list[j+1];
				list[j+1] = temp;
			}
		}
	}
	
	for(i=0; i&lt;SIZE; i++)
	{
		printf("%d ", list[i]);
	}
}
	</code>
</pre>

<pre>
	<code>
1 2 4 7 
	</code>
</pre>