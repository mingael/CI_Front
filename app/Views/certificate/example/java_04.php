상속 문제

<pre>
	<code>
class SuperObject {
	public void paint()
	{
		draw();
	}
	
	public void draw() {
		draw();
		System.out.println("Super Object");
	}
}

class SubObject extends SuperObject {
	public void paint()
	{
		super.draw();
	}
	
	public void draw()
	{
		System.out.println("Sub Object");
	}
}

class Test {
	public static void main (String[] args) {
		SuperObject b = new SubObject();
		b.paint();
	}
}
	</code>
</pre>

<pre>
Sub Object
Super Object
</pre>

super.draw() 가 실행되서 부모 클래스의 draw에 있는 draw가 재정의된 함수로 실행됨?