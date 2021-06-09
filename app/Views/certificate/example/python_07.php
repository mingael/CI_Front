임의의 순서를 가진 중복되지 않은 요소들의 가변 모임
<?php
$title = 'Set';
$code = '
travel = {\'서울\', \'제주\', \'대전\', \'부산\'}
print("제주" in travel)
print("춘천" in travel)
travel.add(\'제주\'); print(travel)
travel.add("군산"); print(travel)
travel.remove(\'대전\'); print(travel)
travel.remove("부산"); print(travel)
travel.update([\'강화\',\'순천\']); print(travel)
travel.clear()
print(travel)
';
$result = '
True
False
{\'대전\', \'서울\', \'제주\', \'부산\'}
{\'부산\', \'제주\', \'군산\', \'대전\', \'서울\'}
{\'부산\', \'제주\', \'군산\', \'서울\'}
{\'제주\', \'군산\', \'서울\'}
{\'제주\', \'군산\', \'서울\', \'순천\', \'강화\'}
set()
';
codeConvert($code, $title, $result);

//------------------------------------------------------------------------

$title = '';
$code = '
a = set()
a.add(1)
a.add(9)
a.add(5)
a.add(1)
print(a)

b = {3, 5, 1}

print(a | b)	# 합집합
print(a & b)	# 교집합
print(a - b)	# a 에서 b의 요소 제거
print(a ^ b)	# a 와 b 공통 요소 제거
print(a.union(b))
print(a.intersection(b))
print(a.difference(b))
print(a.symmetric_difference(b))
';
$result = '
{1, 5, 9}
{1, 3, 5, 9}
{1, 5}
{9}
{9, 3}
{1, 3, 5, 9}
{1, 5}
{9}
{9, 3}
';
codeConvert($code, $title, $result);
?>