<?php

class Contact extends Main
{

    public function index()
    {
        $this->smarty->display('home2.tpl');
    }

    public function create()
    {
        $data['name'] = $this->helper->slash($_POST['name']);
        $data['phone'] = $this->helper->slash($_POST['phone']);
        $data['description'] = $this->helper->slash($_POST['content']);
        $data['email'] = "";
        $data['status'] = 0;
        $data['created_at'] = time();
        $this->pdo->insert("contacts", $data);
        lib_alert("Liên hệ của quý khách đã được gửi");
        lib_redirect_back();
    }

}
