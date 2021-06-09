<?php
function codeConvert($code, $title, $result)
{
	// HTML 태그 인식 제외
	$check_list = Array(
		'"' => '&quot;',
		'\\\'' => '&apos;',
		'<' => '&lt',
		'>' => '&gt',
		"\t" => '    '
	);
	foreach($check_list as $target => $convert)
	{
		$code = str_replace($target, $convert, $code);
		$result = str_replace($target, $convert, $result);
	}

	// 예약여
	$reserved_word = Array(
		' ' => Array(
			'public','new','class','while','import','for',' in','len','def','if',
			'static', 'void', 'extends'
		),
		'(' => Array(
			'print','len','split','lower','list','range','for','if','else','else if','while'
		)
	);
	foreach($reserved_word as $e => $arr)
	{
		foreach($arr as $word)
		{
			$code = str_replace($word.$e, '<span class="reserved-word">'.$word.'</span>'.$e, $code);
		}
	}


	// 임의
	$code = str_replace('#ps#', '<font class="point-code">', $code);
	$code = str_replace('#pe#', '</font>', $code);

	// 템플릿
	$str = '<div class="mb24">';
	$str.= '<span class="title">'.$title.'</span>';
    $str.= '<pre class="code-block">'.$code.'</pre>';

	$str.= '<fieldset><legend>출력 결과</legend>';
	$str.= '<pre class="code-result">'.$result.'</pre>';
	$str.= '</fieldset>';
	$str.= '</div>';

	echo $str;
}
?>