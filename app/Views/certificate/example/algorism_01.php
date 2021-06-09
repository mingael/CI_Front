
<div class="clearfix">
	<span class="title">거품정렬 (Bubble Sort)</span>
	인접한 두 데이터를 비교하여 기준을 만족하면 서로의 위치를 바꾼다.<br>
	한 회전이 끝날 때마다 <span class="point">뒤에서부터 정렬이 완료</span>된다.<br>
	<div class="item">
<?php
$title = '오름차순 PHP';
$code = '
$list = [ 9, 10, 1, 5, 12, 11, 4 ];
$size = count($list);

for($i=0; $i<$size-1; $i++)
{
    for($j=1; $j<#ps#$size-$i#pe#; $j++)
    {
        if($list[$j] < $list[$j-1])
        {
            $tmp = $list[$j - 1];
            $list[$j - 1] = $list[$j];
            $list[$j] = $tmp;
        }
    }
}

echo print_r($list, true);
';
$result = '
Array
(
    [0] => 1
    [1] => 4
    [2] => 5
    [3] => 9
    [4] => 10
    [5] => 11
    [6] => 12
)
';
codeConvert($code, $title, $result);
?>
	</div>
	<div class="item">
<?php
$title = '오름차순 C';
$code = '
#include <stdio.h>

int main(void) {
	int i, j;
	int temp;
	int a[5] = {14, 22, 53, 45, 1};
	
	for(i=0; i<4; i++)
	{
		for(j=0; j<#ps#4-i#pe#; j++)
		{
			if(a[j] > a[j + 1])
			{
				temp = a[j];
				a[j] = a[j + 1];
				a[j + 1] = temp;
			}
		}
	}
	
	for(i=0; i<5; i++)
	{
		printf("%d\n", a[i]);
	}
	return 0;
}
';
$result = '
1
14
22
45
53
';
codeConvert($code, $title, $result);
?>
	</div>
</div>


<div class="clearfix">
	<span class="title">선택정렬(Selection Sort)</span>
	<span class="point">처리되지 않은 데이터 중에서</span> 가장 작은 데이터를 <span class="point">선택</span>해 맨 앞에 있는 데이터와 바꾸는 것을 반복<br>
	<div class="item">
<?php
$title = '오름차순 PHP';
$code = '
// i = 처리된 데이터
for($i=0; $i<#ps#$size#pe#; $i++)
{
	// j = 처리되지 않은 데이터
	for(#ps#$j=$i+1#pe#; $j<#ps#$size#pe#; $j++)
	{
		// 처리된 데이터(i)보다 작으면 위치 바꾸기
		if($list[$i] > $list[$j])
		{
			$tmp = $list[$i];
			$list[$i] = $list[$j];
			$list[$j] = $tmp;
	}
}
';
$result = '
';
codeConvert($code, $title, $result);
?>
	</div>
	<div class="item">
<?php
$title = '오름차순 Python';
$code = '
list = [7, 5, 9, 0, 3, 1, 6, 2, 4, 8]

for i in range(len(list)):
	min_idx = i	# 가장 작은 데이터의 인덱스
	for j in range(#ps#i + 1#pe#, len(list)):
		if list[min_idx] > list[j]:
			min_idx = j
	list[i], list[min_idx] = list[min_idx], list[i]

print(list)
';
$result = '[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]';
codeConvert($code, $title, $result);
?>
	</div>
</div>


<div class="clearfix">
	<span class="title">삽입 정렬(insertion sort) 알고리즘</span>
	처리되지 않은 데이터를 하나씩 골라 적절한 위치에 삽입<br>
	첫 번째 데이터는 그 자체로 정렬되어 있다고 판단하고, 두 번째 데이터부터 <span class="point">앞에 정렬된 데이터와 비교</span>하여 삽입할 위치를 판단한다.</br>
	<span class="point">처음 KEY 값은 두 번째 자료부터 시작한다.</span><br>
	<div class="item">
<?php
$title = '오름차순 Python';
$code = '
array = [7, 5, 9, 0, 3, 1, 6, 2, 4, 8]

for i in range(#ps#1#pe#, len(array)):
	# 뒤에서부터 정렬
	for j in range(i, 0, #ps#-1#pe#):
		if array[j] < array[j - 1]:
			array[j], array[j - 1] = array[j - 1], array[j]
		else:
			break

print(array)
';
$result = '[0, 1, 2, 3, 4, 5, 6, 7, 8, 9]';
codeConvert($code, $title, $result);
?>
	</div>
	<div class="item">
<?php
$title = '오름차순 C';
$code = '
#include <stdio.h>

int main(void) {
	int i, j, min_key;
	int list[5] = {14, 22, 53, 45, 1};
	
	for(i=#ps#1#pe#; i<5; i++)
	{
		min_key = list[i];
	
		for(j=#ps#i-1#pe#; j>=0 && list[j]>min_key; #ps#j--#pe#)
		{
			list[j+1] = list[j];
		}
		list[j+1] = min_key;
	}
	
	for(i=0; i<5; i++)
	{
		printf("%d\n", list[i]);
	}
	return 0;
}
';
$result = '
1
14
22
45
53
';
codeConvert($code, $title, $result);
?>
	</div>
	<div class="item">
<?php
$title = '오름차순 C';
$code = '
#include <stdio.h>

int main(void) {
	
	int i, j, min_key;
	int list[5] = {14, 22, 53, 45, 1};

	for(i=#ps#1#pe#; i< 5; i++)
	{
		min_key = list[i];

		for(j=#ps#i-1#pe#; j>=0; #ps#j--#pe#)
		{
			if(list[j] > min_key)
			{
				list[j+1] = list[j];
			}
			else
			{
				break;
			}
		}
		list[j+1] = min_key;
	}

	for(i=0; i<5; i++)
	{
		printf("%d\n", list[i]);
	}
	return 0;
}
';
$result = '
';
codeConvert($code, $title, $result);
?>
	</div>
	<div class="item">
<?php
$title = '내림차순 C';
$code = '
#include <stdio.h>
#define MAX_SIZE 5
 
void insertion_sort(int list[], int n) {
	int i, j, key;
	for(i=#ps#1#pe#; i<n; i++)
	{
		key = list[i];
		for(j=#ps#i-1#pe#; j>=0 && list[j]<key; #ps#j--#pe#)
		{
			list[j + 1] = list[j];
		}
		list[j + 1] = key;
	}
}
int main(void) {
	int i;
	int n = MAX_SIZE;
	int list[MAX_SIZE] = {8, 5, 6, 2, 4};
	insertion_sort(list, n);
 
	for(i=0; i<n; i++)
	{
		printf("%d ", list[i]);
	}
 
	return 0;
}
';
$result = '
';
codeConvert($code, $title, $result);
?>
	</div>
</div>
<a href="https://freedeveloper.tistory.com/274">링크1</a>