<?php
$title = '함수 호출 1';
$code = '
public class Test {
	public static int fun1(int n) {
		return fun2(n + 1);
	}
	public static int fun2(int n) {
		return fun3(n + 2);
	}
	public static int fun3(int n) {
		return n + 3;
	}
	public static void main(String[] args) {
		int num = 10;
		num = fun1(num);
		System.out.println(num);
	}
}
';
$result = '10';
codeConvert($code, $title, $result);

//----------------------------------------------------------

$title = '함수 호출 2';
$code = '
public class Test {
	public static int decrement(int n) {
		n = n - 1;
		return n;
	}
	public static void main(String[] args) {
		int num = 10;
		num = decrement(num);
		System.out.println(num);
	}
}
';
$result = '9';
codeConvert($code, $title, $result);
?>