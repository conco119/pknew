<?php

class Home extends Main
{

    public function index()
    {
        $this->smarty->display('home.tpl');
    }

}
