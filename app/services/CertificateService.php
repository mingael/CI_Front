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
		return BackClient::of()->getCertificateStudyList($seg);
	}

	public function getWordAll(): array
	{
		return BackClient::of()->getCertificateWordAll();
	}
}
?>