<?php

namespace App\Controllers;

use Services\AuthService;

class AuthController extends BaseController
{
	private static $auth;

	function __construct()
	{
		self::$auth = new AuthService();
	}

	function __destruct()
	{
	}

	/**
	 *	로그인 화면
	 */
	public function login_view()
	{
		
			$pade_data = [
				'link_list' => ['login'],
			];
			return view('auth/login', $pade_data);
//		$bad_chk = self::$auth->checkBadIp($_SERVER['REMOTE_ADDR']);
//		if($bad_chk)
//		{
//			$pade_data = [
//				'link_list' => ['login'],
//			];
//			return view('auth/login', $pade_data);
//		}
//		else
//		{
//			return view('errors');
//		}
	}

	/**
	 *	로그인 처리
	 */
	public function login_act()
	{
		$data = self::$auth->login($_POST, $_SERVER['REMOTE_ADDR']);
		if($data['res_code'] === 'P000')
		{
			$this->session->email = $data['email'];
			$this->session->permit = $data['permit'];
			$this->response->redirect('/main');
		}

		return view('auth/login_act', $data);
	}

	/**
	 *	로그아웃
	 */
	public function logout()
	{
		$this->session->destroy();
		$this->response->redirect('/auth/login');
	}
}
?>
