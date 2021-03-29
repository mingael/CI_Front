상속 문제

<pre>
	<code>
class Parent{
	int compute(int num) {
		if(num &lt;= 1) return num;
		return compute(num-1) + compute(num-2);
	}
}

class Child extends Parent {
	int compute(int num) {
		if(num &lt;= 1) return num;
		return compute(num-1) + compute(num-3);
	}
}

class Test {
	public statuc void main(String[] args) {
		Parent obj = new Child();
		System.out.print(obj.compute(4));
	}
}
	</code>
</pre>

<pre>
1
</pre>

Child 함수 실행
