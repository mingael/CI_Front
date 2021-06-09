<?php
$title = '스택 연산 프로그램';
$code = '
#include <stdio.h>

#define max_stack_size 3

int top = -1;
int stack[max_stack_size];

void stackFull(void);
void stackEmpty(void);
void push(int);
int pop(void);

int main(void) {
	push(8);
	push(1);
	push(0);
	push(2);
	
	printf("1: %d\n", pop());
	printf("2: %d\n", pop());
	printf("3: %d\n", pop());
	printf("4: %d\n", pop());
	
	return 0;
}

void stackFull()
{
	printf("\nStack is full, cannot add element.\n");
}

void stackEmpty()
{
	printf("\nStack is empty, cannot delete element.\n");
}

void push(int item)
{
	if(top >= max_stack_size - 1)
		stackFull();
	else
		stack[++top] = item;
}

int pop()
{
	if(top <= -1)
		stackEmpty();
	else
		return stack[top--];
}';

$result = '
Stack is full, cannot add element.
1: 0
2: 1
3: 8

Stack is empty, cannot delete element.
4: 0';

codeConvert($code, $title, $result);
?>