순서가 없는 불변의 키(Key)와 가변의 값(Value)의 쌍으로 이루어진 객체들의 집합
<?php

$title = 'Dictionary(딕셔너리)';
$code = '
country = {\'대한민국\':\'서울\', \'미국\':\'워싱턴\', \'독일\':\'베를린\'}
print(country.keys())
print(country.values())
print(country.items())
print(country.get(\'대한민국\'))
country[\'대한민국\'] = \'Seoul\'
print(country.get(\'대한민국\'))
';
$result = '
dict_keys([\'대한민국\', \'미국\', \'독일\'])
dict_values([\'서울\', \'워싱턴\', \'베를린\'])
dict_items([(\'대한민국\', \'서울\'), (\'미국\', \'워싱턴\'), (\'독일\', \'베를린\')])
서울
Seoul
';
codeConvert($code, $title, $result);

//------------------------------------------------------------------------

$title = '';
$code = '
members = {\'name\':\'홍길동\',\'age\':\'20\',\'email\':\'love@gmail.com\'}
print(members)
print(members[\'name\'])
print(members[\'age\'])
print(\'길이 : %d\' % len(members))
';
$result = '
{\'name\': \'홍길동\', \'age\': \'20\', \'email\': \'love@gmail.com\'}
홍길동
20
길이 : 3
';
codeConvert($code, $title, $result);

//------------------------------------------------------------------------

$title = '';
$code = '
fruits = {"banana":[500, 20], "apple":[1000, 10], "kiwi":[250, 5]}

price_amount = fruits.values()
payment = 0
for amt in price_amount:
	payment += amt[0] * amt[1]

print(\'지불금액: %d원\' % payment)
';
$result = '지불금액: 21250원';
codeConvert($code, $title, $result);

//------------------------------------------------------------------------
?>