<?php

namespace Services;

use Services\Core\BaseService;
use Infrastructure\BackClient;

class AuthService extends BaseService
{
	public function checkBadIp($ip)
	{
		$params = [
			'ip' => $ip
		];

		$bad_chk = BackClient::of()->getAuthCheckBadIp($params);
		if(empty($bad_chk))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function login($data, $ip): array
	{
		$params = [
			'ip' => $ip,
			'email' => $data['email'],
			'pwd' => $data['pwd']
		];

		return BackClient::of()->getAuthLogin($params);
	}
}
?>