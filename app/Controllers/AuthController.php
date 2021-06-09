<?php

namespace App\Controllers;

class AuthController extends BaseController
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

	/**
	 *	로그인 화면
	 */
	public function login()
	{
		$sql_chk = "SELECT idx FROM bad_ip WHERE ip=?";
		$query = $this->db->query($sql_chk, [$_SERVER['REMOTE_ADDR']]);
		$bad_chk = $query->getRow();
		if(empty($bad_chk->idx))
		{
			return view('auth/login');
		}
		else
		{
			return view('errors');
		}
	}

	/**
	 *	로그인 처리
	 */
	public function login_act()
	{
		$sql = "SELECT idx FROM customer WHERE email=? AND password=? AND status='Y' AND login_fail_cnt<5";
		$query = $this->db->query($sql, [$_POST['email'], md5($_POST['pwd'])]);
		$customer = $query->getRow();
		if(!empty($customer->idx))
		{
			$sql_ok = "UPDATE customer SET login_fail_cnt=0 WHERE email=? AND status='Y'";
			$this->db->query($sql_ok, [$_POST['email']]);

			$this->session->email = $_POST['email'];
			$this->response->redirect('/main');
		}
		else
		{
			$data = Array(
				'result' => 'F',
				'err_cd' => '0000'
			);

			$sql_chk = "SELECT idx, login_fail_cnt FROM customer WHERE email=? AND status='Y'";
			$query = $this->db->query($sql_chk, [$_POST['email']]);
			$chk = $query->getRow();
			if(!empty($chk->idx))
			{
				if($chk->login_fail_cnt < 5)
				{
					$sql_fail = "UPDATE customer SET login_fail_cnt=login_fail_cnt+1 WHERE idx=?";
					$this->db->query($sql_fail, [$chk->idx]);
				}
				else
				{
					$data['err_cd'] = '0001';
				}
			}
			else
			{
				$sql_bad = "INSERT INTO bad_ip (ip, email, pwd) VALUES (?, ?, ?)";
				$this->db->query($sql_bad, [$_SERVER['REMOTE_ADDR'], $_POST['email'], $_POST['pwd']]);

				$data['err_cd'] = '0002';
			}
			return view('auth/login_act', $data);
		}
	}

	/**
	 *	로그아웃
	 */
	public function logout()
	{
		$this->session->destroy();
		return view('auth/login');
	}
}
?>
