<?php

class Calender extends Main
{

    public function index()
    {
        $calender = $this->pdo->fetch_all("SELECT * FROM calender");
        $this->smarty->assign('calender', $calender);
        $this->smarty->display('home.tpl');
    }

}
