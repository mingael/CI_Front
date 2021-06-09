순서가 있는 불변의 객체들의 모임
<?php
$title = 'Tuple (튜플)';
$code = '
tuple = ()
print(tuple)

tuple = (1, 2)
tuple = tuple + (3, 4)
print(tuple)

tuple = 1, 3
print(tuple)

print(tuple * 2)
print(3 in tuple)
print(type(tuple))

tuple = ("python", (1, 3, 5))
print(tuple)
print(tuple[0][0])
print(tuple[1][0])

#tuple[0] = 4	# 오류
';
$result = '
()
(1, 2, 3, 4)
(1, 3)
(1, 3, 1, 3)
True
<class \'tuple\'>
(\'python\', (1, 3, 5))
p
1
';
codeConvert($code, $title, $result);
?>