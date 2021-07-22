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
	#	로그인
	#
	#--------------------------------------------------
	// 차단 IP 확인
	public function getAuthCheckBadIp($param): array
	{
		return self::post('auth/bad_ip', $param);
	}
	// 로그인
	public function getAuthlogin($param): array
	{
		return self::post('auth/login', $param);
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
	public function getCertificateStudyList($params): array
	{
		return self::post('certificate/study', $params);
	}
	// 단어
	public function getCertificateWordInfo($params): array
	{
		return self::post('certificate/word', $params);
	}
	// 단어 전체
	public function getCertificateWordAll(): array
	{
		return self::get('certificate/word_all');
	}
}
?>