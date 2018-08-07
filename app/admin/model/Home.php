<?php

class Home extends Main
{

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->smarty->display('home.tpl');
  }

}
 ?>
