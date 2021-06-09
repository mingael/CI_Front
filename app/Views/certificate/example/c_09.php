<?php
$title = 'C++ 소스 코드';
$code = '
#include <iostream>
class A {
	public:
		A() {
			std::cout << "A ";
		}
		~A() {
			std::cout << "~A ";
		}
};
class B : public A {
	public:
		B() {
			std::cout << "B ";
		}
		~B() {
			std::cout << "~B ";
		}
};

void main() {
	A* a = new B();
	delete a;
	std::cout << std::endl;
	B* b = new B();
	delete b;
}
';
$result = '
A B ~A 
A B ~B ~A 
';
codeConvert($code, $title, $result);
?>