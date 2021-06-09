<?php $idx = 0; ?>
<select class="w100" onchange="example()">
	<option value="">선택</option>
	<?php if($type == 'java') : ?>
	<option value="java/<?=++$idx?>"><?=$idx?>.정렬</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.진수 변환</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.상속</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.for문</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.홀짝</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.?</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.static</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.함수</option>
	<option value="java/<?=++$idx?>"><?=$idx?>.2차원 배열</option>
	<?php elseif($type == 'c') : ?>
	<option value="c/<?=++$idx?>"><?=$idx?>.스택 연산 프로그램</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.자릿수의 합</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.거품정렬</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.포인터</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.짝수 합계</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.최솟값과 최댓값</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.배수에 해당하는 요소의 개수</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.연산</option>
	<option value="c/<?=++$idx?>"><?=$idx?>.생성자와 소멸자</option>
	<?php elseif($type == 'python') : ?>
	<option value="python/<?=++$idx?>"><?=$idx?>.for</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.사용자 정의 함수</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.연산</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.포함</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.딕셔너리</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.리스트</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.셋</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.튜플</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.split</option>
	<option value="python/<?=++$idx?>"><?=$idx?>.배열</option>
	<?php elseif($type == 'algorism') : ?>
	<option value="algorism/<?=++$idx?>"><?=$idx?>.정렬</option>
	<?php elseif($type == 'optionst') : ?>
	<option value="optionst/02">정렬 알고리즘</option>
	<?php endif ?>
</select>

<script>
function example()
{
	var url = event.srcElement.value;
	location.href = '/certificate/example/' + url;
}
</script>