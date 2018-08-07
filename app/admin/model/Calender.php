<?php

class Calender extends Main
{
    function __construct()
    {
        parent::__construct();
        // $this->CategoryHelper = new CategoryHelper();
        $this->table = 'calender';
    }

    public function index()
    {
        //add or edit
        //query
        $sql = "SELECT * FROM calender";
        $paging = $this->paging->get_content($this->pdo->count_rows($sql), 10);
        $sql .= $paging['sql_add'];
        $calenders = $this->pdo->fetch_all($sql);

        // smarty
        // pre($calenders);
        // return;
        $this->smarty->assign('paging', $paging);
        $this->smarty->assign('calenders', $calenders);
        $this->smarty->display(DEFAULT_LAYOUT);
    }
    //not using view from here

    public function create()
    {
        if( isset($_POST['submit']))
        {
          $data['room'] = $this->helper->slash($_POST['room']);
          $data['thu2'] = $this->helper->slash($_POST['thu2']);
          $data['thu3'] = $this->helper->slash($_POST['thu3']);
          $data['thu4'] = $this->helper->slash($_POST['thu4']);
          $data['thu5'] = $this->helper->slash($_POST['thu5']);
          $data['thu6'] = $this->helper->slash($_POST['thu6']);
          $data['thu7'] = $this->helper->slash($_POST['thu7']);
          $data['cn'] = $this->helper->slash($_POST['cn']);
          $isSucceed = $this->pdo->insert('calender', $data);
          if($isSucceed)
            $this->helper->create_notification(1, "Tạo lịch bác sỹ thành công");
          else
            $this->helper->create_notification(0, "Tạo lịch bác sỹ không thành công");
          lib_redirect_back();
        }
    }

    public function edit()
    {
        if( isset($_POST['submit']) )
        {
            $id =$this->helper->slash($_POST['id']);
            $data['room'] = $this->helper->slash($_POST['room']);
            $data['thu2'] = $this->helper->slash($_POST['thu2']);
            $data['thu3'] = $this->helper->slash($_POST['thu3']);
            $data['thu4'] = $this->helper->slash($_POST['thu4']);
            $data['thu5'] = $this->helper->slash($_POST['thu5']);
            $data['thu6'] = $this->helper->slash($_POST['thu6']);
            $data['thu7'] = $this->helper->slash($_POST['thu7']);
            $data['cn'] = $this->helper->slash($_POST['cn']);
            $isSucceed = $this->pdo->update('calender', $data, "id=$id");
            if($isSucceed)
              $this->helper->create_notification(1, "Chỉnh sửa lịch bác sỹ thành công");
            else
              $this->helper->create_notification(0, "Chỉnh sửa lịch bác sỹ không thành công");
            lib_redirect_back();
        }
    }

    public function delete()
    {
      $id =$this->helper->slash($_GET['id']);
      if($this->pdo->query("DELETE FROM calender WHERE id = $id"))
        $this->helper->create_notification(1, "Xóa thành công");
      else
        $this->helper->create_notification(0, "Xóa không thành công");
      lib_redirect_back();
    }

    public function ajax_load()
    {
        $id = $this->helper->slash($_POST['id']);
        $calender = $this->pdo->fetch_one("SELECT * FROM calender WHERE id = $id");
        echo json_encode($calender);
        exit();
    }

    public function ajax_delete()
    {
        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        if($id == 0){
            echo 0;
            exit();
        }
        if(($this->currentUser['permission'] == 1 || $this->currentUser['permission'] == 2) && $this->pdo->query("DELETE FROM categories WHERE id=$id"))
        {
            echo 1;
            exit();
        }
        echo 0;
        exit;
    }
}
