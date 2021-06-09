상속: 상위 레벨 그룹의 모든 특성을 하위 레벨 그룹이 이어받는 것<br>
구체화: 하위 레벨이 상위 레벨 그룹의 추상적인 부분을 구현시키는 것<br>
<br>
생성 객체가 부모, 자식 순으로 실행된다.<br>
매개변수가 있는 생성자로 초기화할 경우, 부모의 기본 생성자를 실행하고, 자식은 매개변수 생성자를 실행한다.
<?php
$title = '오버라이딩(Overriding) 1';
$code = '
class Parent
{
	int compute(int num)
	{
		if(num <= 1) return num;
		return compute(num-1) + compute(num-2);
	}
}

class Child extends Parent
{
	@Override
	int compute(int num)
	{
		if(num <= 1) return num;
		return compute(num-1) + compute(num-3);
	}
}

class Test {
	public statuc void main(String[] args) {
		Parent obj = new Child();
		System.out.print(obj.compute(4));	// Child 함수 실행
	}
}
';
$result = '1';
codeConvert($code, $title, $result);

//--------------------------------------------------------------

$title = '오버라이딩(Overriding) 2';
$code = '
class SuperObject
{
	public void paint()
	{
		draw();
	}
	
	public void draw()
	{
		draw();
		System.out.println("Super Object");
	}
}

class SubObject extends SuperObject
{
	public void paint()
	{
		super.draw();
	}
	
	public void draw()
	{
		System.out.println("Sub Object");
	}
}

class Test
{
	public static void main (String[] args)
	{
		SuperObject b = new SubObject();
		b.paint();	// super 참조 변수로 부모 클래스의 메서드를 호출했는데, 재귀함수였을 draw가 재정의되어 자식 클래스의 draw 호출
		SubObject d = new SubObject();
		d.paint();
	}
}
';
$result = '
Sub Object
Super Object
Sub Object
Super Object
';
codeConvert($code, $title, $result);

//--------------------------------------------------------------

$title = '상속';
$code = '
class Parent {
	int x = 10;
	int y = 20;
	public void add() {
		System.out.printf("%d + %d = %d\n", x, y, x+y);
	}
}
class Child extends Parent {
	int z = 30;
	public void add() {
		System.out.printf("%d + %d + %d = %d\n", x, y, z, x+y+z);
	}
}
public class Test {
	public static void main(String[] args) {
		Parent a = new Parent();
		a.add();

		Child b = new Child();
		b.add();

		Parent c = new Child();
		c.add();

		//Child c = new Parent();	// ERROR
	}
}
';
$result = '
10 + 20 = 30
10 + 20 + 30 = 60
10 + 20 + 30 = 60
';
codeConvert($code, $title, $result);

//--------------------------------------------------------------

$title = '상속';
$code = '
class Super
{
	public Super()
	{
		System.out.print("Super ");
	}

	public Super(int a)
	{
		System.out.print("PSuper "+a+" ");
	}
}

class Sub extends Super
{
	public Sub()
	{
		System.out.print("Sub ");
	}

	public Sub(int a)
	{
		System.out.print("PSub "+a+" ");
	}
}

public class Test {
	public static void main(String[] args) {
		Super a = new Sub();
		Sub b = new Sub();

		System.out.println("");

		Super c = new Sub(10);
		Sub d = new Sub(20);
	}
}
';
$result = '
Super Sub Super Sub 
Super PSub 10 Super PSub 20 
';
codeConvert($code, $title, $result);
?>