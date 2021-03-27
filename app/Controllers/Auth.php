<?php

namespace App\Controllers;

class Auth extends BaseController
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

    public function in()
    {
        return view('auth/in');
    }

    public function in_act()
    {
        $sql = "SELECT idx FROM customer WHERE email=? AND password=?";
        $query = $this->db->query($sql, [$_POST['email'], md5($_POST['pwd'])]);
        $row = $query->getRow();
        if(!empty($row->idx))
        {
            $this->session->email = $_POST['email'];
            $this->response->redirect('/certificate');
        }
        else
        {
            return view('auth/in');
        }
    }
}
?>
