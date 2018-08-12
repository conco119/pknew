<?php

class User extends Main
{

    function __construct()
    {
        parent::__construct();
    }

    function get_login()
    {
        $this->smarty->display('home2.tpl');
    }

    function detail()
    {
        $id = $_GET['id'];
        $patient = $this->pdo->fetch_one("SELECT * FROM patient WHERE id = $id");
        $media_patient = $this->pdo->fetch_all("SELECT * FROM media_patient WHERE patient_id = $id");
        foreach ($media_patient as $key => $value)
        {
        $media_patient[$key]['media'] = $this->pdo->fetch_one("SELECT * FROM media WHERE id = {$value['media_id']}");
        $media_patient[$key]['date'] = gmdate("d-m-Y", strtotime($value['date']) + 7*3600);
        }
        // pre($media_patient);
        $this->smarty->assign('media_patient', $media_patient);
        $this->smarty->assign('patient', $patient);
        $this->smarty->display('home2.tpl');
    }

    function post_login()
    {
        $username = $this->helper->slash(trim($_POST['code']));
        $password = $this->helper->slash(trim($_POST['phone']));
        $user = $this->pdo->fetch_one("SELECT * FROM patient WHERE code ='$username' and phone ='$password' ");
        if(!$user)
        {
            $this->helper->create_notification(0, "Tài khoản hoặc mật khẩu không hợp lệ");
            lib_redirect('./?mc=user&site=get_login');
        }
        $_SESSION["LOGIN_PATIENT"] = $user;
        lib_redirect('/');
    }

    function logout()
    {
        unset($_SESSION['LOGIN_PATIENT']);
        lib_redirect('/');
    }


}