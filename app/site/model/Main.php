<?php

lib_use(CORE_PDO);
lib_use(CORE_STRING);
lib_use(CORE_PAGINATION2);
lib_use(CORE_FILEHANDLE);
lib_use(CORE_TIMES);
lib_use(CORE_ZEBRA);
lib_use(CORE_IMAGE);
class Main
{
  protected $arg, $conf_info;
  function __construct()
  {
    global $smarty, $tpl_file, $mc, $site, $login_id, $pdo;
    $this->currentUser = '';
    $this->mc = $mc;
    $this->site = $site;

    $this->slim_pdo = $pdo;
    $this->pdo = new DPDO(DB_INFO);
    $this->paging = new pagination();
    $this->times = new Times();
    $this->dstring = new DString();
    $this->helper = new Helper();

    $this->file_setting = "../../constant/setting.ini";
    $this->smarty = $smarty;
    $this->smarty->assign('tpl_file', $tpl_file);
    // config
    $this->set_value();
    $this->check_user();
  }

   public function set_value()
  {
    $dbo = new DPDO(DB_INFO);
    $content = array();
    if (file_exists($this->file_setting)) {
        $content = parse_ini_file($this->file_setting, true);
    }
    $this->conf_info = $content;
    //end content getting
    $this->arg = array(
            'stylesheet' => DOMAIN . "app/webroot/site/",
            'logo_path' => 'upload/logo',
            'today' => gmdate("d-m-Y", time() + 7 * 3600),
            'this_month' => gmdate("m", time() + 7 * 3600),
            'this_year' => gmdate("Y", time() + 7 * 3600),
            'domain' => DOMAIN,
            'this_link' => THIS_LINK,
            'mc' => $this->mc,
            'site' => $this->site,
            'user' => $this->currentUser,
            'setting' => $content['info'],
    );
    $this->smarty->assign('arg', $this->arg);
    $this->notification();
  }


  public function check_user()
  {
    if($_SESSION['LOGIN_PATIENT']['id'] != 0 )
    {
      $this->currentUser = $_SESSION['LOGIN_PATIENT'];
      $this->smarty->assign('currentUser', $_SESSION['LOGIN_PATIENT']);
    }
  }

  function notification()
  {
    if(!empty($_SESSION['notification']))
    {
      $this->smarty->assign('notification', $_SESSION['notification']);
      unset($_SESSION['notification']);
    }
  }

}

 ?>
