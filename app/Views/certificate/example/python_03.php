<?php
$title = '?';
$code = '
a = 12
b = 0o14
c = 0xC
d = 0b1100
print(a, b, c, d);
';
$result = '12 12 12 12';
codeConvert($code, $title, $result);
?>
<?php
$title = '문자열 연산';
$code = '
strings = "If you come at 4 o’clock"
print(strings)
print(len(strings)) # string length

# indexing
print(strings[0])
print(strings[3])
print(strings[12])
print(strings[-1])

# slicing
print(strings[0:3])
print(strings[1:3])
print(strings[:])
print(strings[:-1])

str1 = \'If you come at 4 o’clock\'
str2 = \', I will be happy from 3 o’clock.\'
str3 = str1 + str2 # concatenation
print(str3)
str4 = str3 * 2 # repetition
print(str4)

# member check
print(\',\' in str3)
print(\'!\' in str3)
';
$result = '
If you come at 4 o’clock
24
I
y
a
k
If 
f 
If you come at 4 o’clock
If you come at 4 o’cloc
If you come at 4 o’clock, I will be happy from 3 o’clock.
If you come at 4 o’clock, I will be happy from 3 o’clock.If you come at 4 o’clock, I will be happy from 3 o’clock.
True
False
';
codeConvert($code, $title, $result);

//--------------------------------------

$title = '증감연산';
$code = '
i = 10
i+= 1
print(i)
i-= 2
print(i)
++i	# 아무 동작도 하지 않음
print(i)
#i++	# 오류 발생
';
$result = '
11
9
9
';
codeConvert($code, $title, $result);
?>