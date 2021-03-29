<?php
#
#	정보처리기사
#

namespace App\Controllers;

class Certificate extends BaseController
{
	var $db;

	function __construct()
	{
		$this->db = db_connect();
	}

	function __destruct()
	{
		$this->db->close();
	}
	
	public function index()
	{
		$query = $this->db->query("SELECT idx, title FROM class WHERE status='Y'");
		$res = (Array) $query->getResult();

		$data = Array(
			'v' => $res
		);

		return view('certificate/index', $data);
	}

	public function study($seg=false)
	{
		if($seg !== false)
		{
			$sql = "SELECT idx, title FROM subject WHERE class_idx=? AND status='Y'";
			$query = $this->db->query($sql, [$seg]);
			foreach($query->getResult() as $subject)
			{
				$idx = $subject->idx;

				$list[$idx]['idx'] = $idx;
				$list[$idx]['title'] = $subject->title;

				$sql_cont = "SELECT * FROM contents WHERE class_idx=? AND subject_idx=? AND status='Y'";
				$qry_cont = $this->db->query($sql_cont, [$seg, $idx]);
				foreach($qry_cont->getResult() as $contents)
				{
					$list[$idx]['sub'][] = (Array) $contents;
				}
			}

			$data = Array(
				'list' => $list
			);

			return view('certificate/study', $data);
		}
	}
	
	public function getWordAll()
	{
		$query = $this->db->query("SELECT * FROM word WHERE status='Y'");
		foreach($query->getResult() as $word)
		{
			$idx = $word->idx;

			$en_title = '';
			if(isset($en_title))
			{
				$en_title.= $word->english;
			}
			if(isset($word->abbreviation))
			{
				$en_title = !empty($en_title) ? $word->abbreviation.', '.$en_title : $word->abbreviation;
			}
			
			$title = $idx.'. ';
			if(isset($word->hangul))
			{
				$title.= $word->hangul;
				if(!empty($en_title))
				{
					$title.= ' ('.$en_title.')';
				}
			}
			else
			{
				$title.= $en_title;
			}

			$list[$idx]['title'] = $title;
			$list[$idx]['summary'] = $word->summary;

			$sql = "SELECT idx, content FROM word_content WHERE word_idx=? AND status='Y'";
			$qry_cont = $this->db->query($sql, [$idx]);
			foreach($qry_cont->getResult() as $word_cont)
			{
				$list[$idx]['contents'][$word_cont->idx]['content'] = $word_cont->content;
			}

			$data = Array(
				'list' => $list
			);
		}
		return view('certificate/word', $data);
	}

	public function example($lan, $num)
	{
		$num = sprintf('%02d', $num);

		return view('certificate/example/' . $lan . '_' . $num);
	}
}
?>
