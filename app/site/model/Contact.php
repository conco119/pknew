<?php

class Contact extends Main {

    function index()
    {
        $this->smarty->display('home2.tpl');
    }

    function create()
    {
        $data['name'] = $this->helper->slash($_POST['name']);
        $data['phone'] = $this->helper->slash($_POST['phone']);
        $data['description'] = $this->helper->slash($_POST['content']);
        $data['email'] = "";
        $data['status'] = 0;
        $data['created_at'] = time();
        $this->pdo->insert("contacts", $data);
        lib_redirect_back();
    }

}