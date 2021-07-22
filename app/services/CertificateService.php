<?php

namespace Services;

use Services\Core\BaseService;
use Infrastructure\BackClient;

class CertificateService extends BaseService
{
	public function getIndexMenu(): array
	{
		return BackClient::of()->getCertificateClassListAll();
	}

	public function getStudyList($seg): array
	{
		$params = [
			'class_idx' => $seg
		];
		$list_data = BackClient::of()->getCertificateStudyList($params);
		if(isset($list_data) && count($list_data) > 0)
		{
			foreach($list_data as $subject)
			{
				$res[$subject['idx']]['title'] = $subject['title'];
				if(isset($subject['list']) && count($subject['list']) > 0)
				{
					foreach($subject['list'] as $list_idx => $list)
					{
						$res[$subject['idx']]['list'][] = '<ul><li>'.$list['comment'].'</li></ul>';
					}
				}
			}
		}

		if(empty($res))
		{
			$res = [];
		}

		return $res;
	}

	public function getWordInfo($idx): array
	{
		$params = [
			'word_idx' => $idx
		];

		return BackClient::of()->getCertificateWordInfo($params);
	}

	public function getWordAll(): array
	{
		return BackClient::of()->getCertificateWordAll();
	}
}
?>