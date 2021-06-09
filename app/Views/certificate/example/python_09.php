<?php
$title = 'split';
$code = '
url = \'http://love.co.kr\'
arr = url.split(\'.\')
print(arr[-1])
';
$result = 'kr';
codeConvert($code, $title, $result);

//----------------------------------

$title = 'split';
$code = '
email = \'LoveMe@gmail.com\'
email = email.lower()
id = email.split(\'@\')[0]
print(id)
';
$result = 'loveme';
codeConvert($code, $title, $result);
?>