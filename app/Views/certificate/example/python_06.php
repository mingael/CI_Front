순서가 있는 가변의 객체들의 모임
<?php
$title = 'List';
$code = '
a = [10, 20]
b = [30, 40]

print(a + b)
print(a * 2)

a.append([10, 2]); print(a)	# 뒤에 추가
a.extend([10, 2]); print(a)	# 뒤에 병합
a.insert(1, 8); print(a)	# index 1에 값 삽입 (변경 X)
a.remove(10); print(a)	# 값 삭제 (여러 개이면 첫 번째만 삭제)
a.remove(10); print(a)
a.reverse(); print(a)	# 역순 정렬
a[0] = 5; print(a)	# index 5에 값 변경
';
$result = '
[10, 20, 30, 40]
[10, 20, 10, 20]
[10, 20, [10, 2]]
[10, 20, [10, 2], 10, 2]
[10, 8, 20, [10, 2], 10, 2]
[8, 20, [10, 2], 10, 2]
[8, 20, [10, 2], 2]
[2, [10, 2], 20, 8]
[5, [10, 2], 20, 8]
';
codeConvert($code, $title, $result);

//----------------------------------------

$title = '';
$code = '
a = list(range(1, 10, 2))
a.append(a[2])
a.append(a[4])
a.remove(a[1])
a.remove(a[3])
for i in a:
	print(i, end=\'\')
';
$result = '15759';
codeConvert($code, $title, $result);

//----------------------------------------

$title = '';
$code = '
country = []
country.append(\'한국@korea\')
country.append(\'영국@britain\')
country.append(\'캐나다@canade\')

eng = list()
for str in country:
	str = str.upper()
	eng.append(str.split(\'@\')[0])

print(eng)
';
$result = '[\'한국\', \'영국\', \'캐나다\']';
codeConvert($code, $title, $result);

//----------------------------------------

$title = '';
$code = '
def func(items):
	result = []
	for item in items:
		if item % 2 == 0:
			result.append(item)
	return result;

print(func([9, 2, 5, 4, 1, 6]))
';
$result = '[2, 4, 6]';
codeConvert($code, $title, $result);
?>