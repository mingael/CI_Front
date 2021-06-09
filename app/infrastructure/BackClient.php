<?php

namespace Infrastructure;

use Infrastructure\Core\GuzzleClient;

class BackClient extends GuzzleClient
{
	private static ?BackClient $instance = NULL;

	private function __construct()
	{
		$this->guzzleInit($_ENV['BACKSERVER']);
	}

    public static function of(): BackClient
	{
		if (is_null(self::$instance))
		{
			self::$instance = new static();
		}

        return self::$instance;
	}

	#--------------------------------------------------
	#
	#	정보처리기사 
	#
	#--------------------------------------------------
	// 과목 목록
	public function getCertificateClassListAll(): array
	{
		return self::get('certificate/index');
	}
	// 과목 내용
	public function getCertificateStudyList($seg): array
	{
		return self::get('certificate/study');
	}
	// 단어
	public function getCertificateWordAll(): array
	{
		return self::get('certificate/word_all');
	}
}
?>