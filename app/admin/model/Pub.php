<?php
class Pub extends Main
{
    public function denied()
    {
      $this->smarty->display( "error.tpl" );
    }

    public function login()
    {
      global $login_id;
      // redirect if logged in -
      $user = $this->pdo->fetch_one("SELECT status FROM users WHERE id=$login_id");
      if($login_id != 0 && $user['status'] == 1)
      {
          lib_redirect(HOME_PAGE);
      }
      $this->smarty->display('login.tpl');
    }

    function postLogin()
    {
      if(isset($_POST['submit']))
      {
          $username = $this->helper->slash(trim($_POST['username']));
          $password = $this->helper->slash(trim($_POST['password']));
          $user = $this->pdo->fetch_one("SELECT * FROM users WHERE username ='$username' and password ='$password' ");
          if(!$user)
          {
              $this->helper->create_notification(0, "Tài khoản hoặc mật khẩu không hợp lệ");
              lib_redirect_back();
          }
          if($user['status'] == 0)
          {
              $this->helper->create_notification(0, "Tài khoản bị vô hiệu hóa");
              lib_redirect_back();
          }
          $_SESSION["LOGIN_MEMBER"] = $user['id'];
          lib_redirect(HOME_PAGE);
      }
    }

    public function check_user()
    {
      return 1;
    }
}
 ?>
