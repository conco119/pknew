<?php

class Category extends Main
{
    function __construct()
    {
        parent::__construct();
        $this->CategoryHelper = new CategoryHelper();
        $this->table = 'categories';
    }

    public function index()
    {
        //add or edit
        //query
        $sql = "SELECT * FROM categories";
        $paging = $this->paging->get_content($this->pdo->count_rows($sql), 10);
        $sql .= $paging['sql_add'];
        $cats = $this->pdo->fetch_all($sql);
        $cat_add_new = $this->pdo->fetch_all("SELECT * FROM categories WHERE parent_id =0");
        $cats_loop = $this->pdo->fetch_all("SELECT * from categories");
        foreach($cats as $key => $cat)
        {
            $cats[$key]['name'] = $this->CategoryHelper->help_get_parent_name($cats_loop, $cat, '', 0);
        }
        // smarty
        // pre($cats);
        // return;
        $this->smarty->assign('paging', $paging);
        $this->smarty->assign('cat_add_new', $cat_add_new);
        $this->smarty->assign('cats', $cats);
        $this->smarty->display(DEFAULT_LAYOUT);
    }
    //not using view from here

    public function create()
    {
        if( isset($_POST['submit']))
        {
          $data['name'] = $_POST['name'];
          $data['parent_id'] = $_POST['parent_id'];
          $data['status'] = 1;
          $data['created_at'] = time();
          $isSucceed = $this->pdo->insert('categories', $data);
          if($isSucceed)
            $this->helper->create_notification(1, "Tạo danh mục {$data['name']} thành công");
          else
            $this->helper->create_notification(0, "Tạo danh mục {$data['name']} không thành công");
          lib_redirect_back();
        }
    }
    public function edit()
    {
        if( isset($_POST['submit']) )
        {
            $data['name'] = $_POST['name'];
            $data['parent_id'] = $_POST['parent_id'];
            $data['updated_at'] = time();
          try {
              $updateStatement = $this->slim_pdo->update($data)->table($this->table)->where('id', '=', $_POST['id']);
              $isSucceed = $updateStatement->execute();
          }
          catch(PDOException $e) {
              $text = $e->getMessage();
              $isSucceed = false;
          }
          if($isSucceed)
            $this->helper->create_notification(1, "Chỉnh sửa danh mục {$data['name']} thành công");
          else
            $this->helper->create_notification(0, "Chỉnh sửa danh mục {$data['name']} không thành công");
          lib_redirect_back();
        }
    }

    public function delete()
    {
      $id = $_GET['id'];
      $category = $this->pdo->fetch_one("SELECT * FROM categories WHERE parent_id = $id");
      $post = $this->pdo->fetch_one("SELECT * FROM posts WHERE category_id = $id");
      if(!$category && !$post)
      {
        $this->pdo->query("DELETE FROM categories WHERE id = $id");
        $this->helper->create_notification(1, "Xóa thành công");
      }
      else
      {
        $this->helper->create_notification(0, "Xóa không thành công vì còn danh mục con hoặc bài viết");
      }
      lib_redirect_back();
    }
    public function active_status()
    {
        $item = $this->pdo->fetch_one("SELECT status FROM " . $this->table . " WHERE id=" . $_GET['id']);
        $status = $item['status'] == 1 ? 0 : 1;
        $this->pdo->query("UPDATE " . $this->table. " SET status = '$status' WHERE id=" . $_GET['id']);
        lib_redirect_back();
    }

    public function ajax_load_category()
    {
        if( isset($_POST['id']) )
        {
          $cat = $this->pdo->fetch_one("SELECT * FROM categories WHERE id = " . $_POST['id'] . " and status = 1");
          if(!$cat) {
            $cat['code'] = $this->CategoryHelper->get_cat_code();
          }
          $cat['parent_option'] = $this->CategoryHelper->get_product_cat_parent_select($cat['id'], $cat['parent_id']);
          echo json_encode($cat);
        }
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
