<?php
$title = 'static 활용';
$code = '
class Test
{
	public static void main (String[] args)
	{
		Number n1 = new Number();
		Number n2 = new Number();
 
		n1.increment();
		n2.increment();
		n2.increment();
		n1.decrement();
		n1.printNumber();
		n2.printNumber();
	}
}
 
class Number
{
	static public int num1 = 0;
	public int num2 = 0;
	public void increment()
	{
		num1++;
		num2++;
	}
	public void decrement()
	{
		num1--;
		num2--;
	}
	public void printNumber()
	{
		System.out.println("num1 : " + num1);
		System.out.println("num2 : " + num2);
	}
}
';
$result = '
num1 : 2
num2 : 0
num1 : 2
num2 : 2
';
codeConvert($code, $title, $result);
?>