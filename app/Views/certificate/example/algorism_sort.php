<html>
<head>
<style>
.title { font-weight:bold; }
ul { clear:both; margin:0; padding:0; list-style:none; }
li { float:left; padding:6px; }
.target { color:white; background-color:#6EBE21; }
.check { color:white; background-color:gray; }
.swamp { color:white; background-color:#18A8DB; }
</style>
</head>
<body>
<form name="frm" method="POST" action="/certificate/algorism/sort">
	<select name="type">
		<option value="B">거품정렬</option>
		<option value="S">선택정렬</option>
	</select>
	<select name="order">
		<option value="ASC">오름차순</option>
		<option value="DESC">내림차순</option>
	</select>
	<input type="text" name="list" value="<?=$_POST['list'] ?? '4, 8, 2, 7, 6'?>">
	<button type="submit">실행</button>
</form>
<br>
<?php
if(!empty($list) && !empty($plan))
{
	echo '<fieldset><legend>결과</legend>';
	listPrint($list);
	echo '</fieldset>';

	foreach($plan as $idx => $arr)
	{
		echo '<fieldset><legend>'.$idx.'회차 ('.$arr['i'].', '.$arr['j'].')</legend>';
		listPrint($arr['list'], $arr['i'], $arr['j'], $arr['swamp']);
		echo '</fieldset>';
	}
}
?>
</body>
</html>
<?php
function listPrint($list, $i=NULL, $j=NULL, $swamp=FALSE)
{
	echo '<ul>';
	foreach($list as $idx => $num)
	{
		if($idx === $i)
		{
			echo '<li class="target">'.$num.'</li>';
		}
		else if($idx === $j)
		{
			if($swamp)
			{
				echo '<li class="swamp">'.$num.'</li>';
			}
			else
			{
				echo '<li class="check">'.$num.'</li>';
			}
		}
		else
		{
			echo '<li>'.$num.'</li>';
		}
	}
	echo '</ul>';
}
?>