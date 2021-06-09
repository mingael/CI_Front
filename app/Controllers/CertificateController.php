<?php
#
#	정보처리기사
#

namespace App\Controllers;

use Services\CertificateService;

class CertificateController extends BaseController
{
	private static $certificate;

	function __construct()
	{
		self::$certificate = new CertificateService();
	}

	function __destruct()
	{
	}

	// 목차
	public function index()
	{
		$list_data = self::$certificate->getIndexMenu();

		$pade_data = Array(
			'template_title' => '정보처리기사',
			'view_name' => '/certificate/index',
			'list_data' => $list_data
		);

		return view('certificate/template', $pade_data);
	}

	public function study($seg=false)
	{
		if($seg !== false)
		{
			$list_data = self::$certificate->getStudyList($seg);

			$pade_data = Array(
				'template_title' => '정보처리기사 과목',
				'view_name' => '/certificate/study',
				'list_data' => $list_data
			);

			return view('certificate/template', $pade_data);
		}
		else
		{
			return view('certificate');
		}
	}

	// 단어 전체 보기
	public function getWordAll()
	{
		$list_data = self::$certificate->getWordAll();

		$pade_data = Array(
			'template_title' => '정보처리기사 단어',
			'view_name' => '/certificate/word',
			'list_data' => $list_data
		);

		return view('certificate/template', $pade_data);
	}

	public function example($type, $num)
	{
		$num = sprintf('%02d', $num);
        $pade_data = Array(
            'type' => $type,
            'num' => $num
        );
		return view('certificate/example/common', $pade_data);
	}

	public function algorism_sort()
	{
		if(!empty($_POST['list']))
		{
			$list = explode(',', $_POST['list']);
			$size = sizeof($list);

			$idx = 0;

			// Bubble Sort
			if($_POST['type'] === 'B')
			{
				for($i=0; $i<$size-1; $i++)
				{
					for($j=1; $j<$size-$i; $j++)
					{
						$plan[$idx]['list'] = $list;
						$plan[$idx]['i'] = $j;
						$plan[$idx]['j'] = $j-1;

						if($list[$j] < $list[$j-1])
						{
							$tmp = $list[$j-1];
							$list[$j-1] = $list[$j];
							$list[$j] = $tmp;

							$plan[$idx]['swamp'] = TRUE;
						}
						else
						{

							$plan[$idx]['swamp'] = FALSE;
						}

						$idx++;
					}
				}
			}
			// Selection Sort
			else if($_POST['type'] === 'S')
			{
				for($i=0; $i<$size; $i++)
				{
					for($j=$i+1; $j<$size; $j++)
					{
						$plan[$idx]['arr'] = $list;
						$plan[$idx]['i'] = $i;
						$plan[$idx]['j'] = $j;

						if($list[$i] > $list[$j])
						{
							$tmp = $list[$i];
							$list[$i] = $list[$j];
							$list[$j] = $tmp;

							$plan[$idx]['swamp'] = TRUE;
						}
						else
						{

							$plan[$idx]['swamp'] = FALSE;
						}

						$idx++;
					}
				}
			}
		}
		else
		{
			$list = NULL;
			$plan = NULL;
		}

		$pade_data = Array(
			'list' => $list,
			'plan' => $plan
		);

		return view('certificate/example/algorism_sort', $pade_data);
	}

	public function edit($num)
	{
		return view('certificate/edit');
	}
}
?>
