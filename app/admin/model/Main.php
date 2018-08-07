<?php

lib_use(CORE_PDO);
lib_use(CORE_STRING);
lib_use(CORE_PAGINATION);
lib_use(CORE_FILEHANDLE);
lib_use(CORE_TIMES);
lib_use(CORE_ZEBRA);
lib_use(CORE_IMAGE);
class Main
{
  protected $arg, $conf_info, $slim_pdo;
  function __construct()
  {
    global $smarty, $tpl_file, $mc, $site, $login_id;
    $this->currentUser = '';

    $this->login_id = $login_id;
    $this->mc = $mc;
    $this->site = $site;

    $this->pdo = new DPDO(DB_INFO);
    $this->paging = new pagination();
    $this->times = new Times();
    $this->dstring = new DString();
    $this->helper = new Helper();

    $this->smarty = $smarty;
    $this->smarty->assign('tpl_file', $tpl_file);
    // config
    $this->set_setting();
    $this->set_value();
    $this->setdb();
    $this->set_user_avatar();
    // thông báo
    $this->smarty->assign('notification',[
      'status' => 'nope',
      'title' => 'nope',
      'text' => 'nope'
    ]);
    $this->notification();
  }

   public function set_value()
  {
    $this->currentUser = $this->check_user();
    $this->arg = array(
            'stylesheet' => DOMAIN . "app/webroot/",
            'avatar_path' => 'upload/avatar',
            'product_path' => 'upload/product',
            'video_path' => 'upload/video',
            'post_path' => 'upload/post',
            'today' => gmdate("d-m-Y", time() + 7 * 3600),
            'this_month' => gmdate("m", time() + 7 * 3600),
            'this_year' => gmdate("Y", time() + 7 * 3600),
            'domain' => DOMAIN,
            'this_link' => THIS_LINK,
            'mc' => $this->mc,
            'site' => $this->site,
            'user' => $this->currentUser,
            'setting' => $this->conf_info,
            'prefix_admin' => "./admin?",
    );
    //user avatar to header view
  }
  function setdb()
  {
    $content = array();
    if (file_exists(FILE_CONF_DATABASE)) {
        $content = parse_ini_file(FILE_CONF_DATABASE, true);
        $dsn = "mysql:host={$content['server']};dbname={$content['data_base']};charset=utf8";
        $usr = $content['user'];
        $pwd = $content['password'];
    }
    $this->slim_pdo = new \Slim\PDO\Database($dsn, $usr, $pwd);
  }

  function set_setting()
  {
        $content = array();
        if (file_exists(SETTING_FILE)) {
            $content = parse_ini_file(SETTING_FILE, true);
        }
        $this->conf_info = $content;
  }

  public function set_user_avatar()
  {
    if($this->currentUser['avatar'] != '')
      $this->arg['avatar'] = $this->currentUser['avatar'];
    else
      $this->arg['avatar'] = 'upload/avatar/fallback-avatar.png';
    $this->smarty->assign('arg', $this->arg);
  }

  public function check_user()
  {
      global $site, $login_id, $mc;
      $user = $this->pdo->fetch_one( "SELECT * FROM users a where id='$login_id'" );
      if($login_id == 0 || $user['status'] == 0)
      {
        lib_redirect(LOGIN_PAGE);
      }
      return $user;
  }

  function notification()
  {
    if(!empty($_SESSION['notification']))
    {
      $this->smarty->assign('notification', $_SESSION['notification']);
      unset($_SESSION['notification']);
    }
  }

  function redirectIfNotAdmin()
  {

  }


}

 ?>
