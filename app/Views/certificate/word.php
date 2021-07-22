<div>
	<?php foreach($list_data as $idx => $item): ?>
	<div class="box">
		<?php if(session('permit') === 'admin'): ?>
		<a role="button" onclick="edit('<?=$idx?>');">
			<b><?=$item['title']?></b>
		</a>
		<?php else: ?>
		<b><?=$item['title']?></b>
		<?php endif ?>
		<br>

		<?=$item['summary'] ?? ''?>
		<?php if(isset($item['contents'])): ?>
		<ul>
			<?php foreach($item['contents'] as $conts): ?>
				<li><?=$conts['content']?></li>
			<?php endforeach ?>
		</ul>
		<?php endif ?>
	</div>
	<?php endforeach ?>
</div>

<div id="modal" style="display:none;">
	<div id="modal-box">
		<span class="ic-close" onclick="edit_close();"></span>
		<form name="frm" method="POST" action="/certificate/word_edit">
			<div>
				<input type="hidden" name="idx" value="">
				<select name="parent_idx">
					<option value="">선택</option>
				</select>
				<br>
				<input type="text" name="hangul" placeholder="한글명" value="">
				<br>
				<input type="text" name="english" placeholder="영문명" value="">
				<input type="text" name="abbreviation" placeholder="약어" value="">
				<br>
				<input type="text" name="keyword" value="">
				<br>
				<textarea name="summary"></textarea>

				<ul>
					<li>
						<input type="hidden" name="idx[]" value="">
						<input type="text" name="content[]" value="">
						<span class="ic-add">&#43;</span>
					</li>
				<ul>
			</div>
		</form>

		<div class="bottom-box">
			<button>SAVE</button>
		</div>
	</div>
</div>

<script>
async function edit(idx)
{
	document.getElementById('modal').style.display = 'block';

	// 정보 가져오기
	let word_data = await ajax('/certificate/word/' + idx);
	console.log(word_data);

	frm.idx.value = word_data.idx;
	frm.hangul.value = word_data.hangul;
	frm.english.value = word_data.english;
	frm.abbreviation.value = word_data.abbreviation;
	frm.keyword.value = word_data.keyword;
	frm.summary.value = word_data.summary;
	return false;
}

function edit_close()
{
	document.getElementById('modal').style.display = 'none';
}
</script>