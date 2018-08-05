<?php

class Post extends Main
{
    function __construct()
    {
        parent::__construct();
        $this->PostHelper = new PostHelper();
        $this->table = "posts";
    }

    public function index()
    {
        //query customer
        // $cat_id = isset($_GET['category']) ? intval($_GET['category']) : 0;
        // $key = isset($_GET['key']) ? trim($_GET['key']) : '';
        // $sql_filter = '';

        // if($cat_id != 0)
        //     $sql_filter .= " AND a.category_id = $cat_id";

        // if($key != '')
        //     $sql_filter .= " AND (a.code LIKE  '%$key%' OR a.name LIKE '%$key%' )";
        // $out['categories'] =  $this->helper->get_option(1, 'product_categories', $cat_id);
        // $out['key'] = $key;
        $sql = "SELECT id, slug, title, status, category_id, created_at, updated_at FROM posts";
        $paging = $this->paging->get_content($this->pdo->count_rows($sql), 20);
        $sql .= $paging['sql_add'];
        $posts = $this->pdo->fetch_all($sql);
        foreach ($posts as $key => $value)
        {
            $sql ="SELECT m.path, m.name FROM media_post mp LEFT JOIN media m ON m.id = mp.media_id   WHERE mp.post_id = {$value['id']} AND mp.is_showed = 1";
            $posts[$key]['media'] = $this->pdo->fetch_one($sql);
            $posts[$key]['category'] =  $this->pdo->fetch_one("SELECT * FROM categories WHERE id = {$value['category_id']}");
        }
        $categories = $this->pdo->fetch_all("SELECT * FROM categories");
        //smarty
        // $this->smarty->assign('out', $out);
        $this->smarty->assign('paging', $paging);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('posts', $posts);
        $this->smarty->display(DEFAULT_LAYOUT);
    }
    //not using view from here

    public function create()
    {
        if( isset($_POST['submit']) && $_POST['id'] == 0 )
        {
            $data['name'] = $_POST['name'];
            $data['code'] = $_POST['code'];
            $data['category_id'] = $_POST['category_id'];
            $data['trademark_id'] = $_POST['trademark_id'];
            $data['unit_id'] = $_POST['unit_id'];
            $data['is_discount'] = isset($_POST['is_discount']) ? 1 : 0;
            $data['discount_type'] = isset($_POST['discount_type']) ? $_POST['discount_type'] : 1;
            $data['discount'] = isset($_POST['discount']) ? $_POST['discount'] : 0;
            $data['price_import'] = $this->dstring->convert_price_to_int($_POST['price_import']);
            $data['price'] = $this->dstring->convert_price_to_int($_POST['price']);
            $data['price_sale'] = $this->dstring->convert_price_to_int($_POST['price_sale']);
            $data['description'] = $_POST['description'];
            $data['warranty'] = $_POST['warranty'];
            $data['number_warning'] = $_POST['number_warning'];
            $data['status'] = isset($_POST['status']) ? 1 : 0;
            $data['created_at'] = time();
            $data['updated_at'] = time();
            $isSucceed = $this->pdo->insert($this->table, $data);
            if($isSucceed)
                {
                    $notification = [
                        'status' => 'success',
                        'title'  => 'Thêm thành công',
                        'text'   => "Thêm sản phẩm thành công"
                    ];
                    $this->smarty->assign('notification', $notification );
                }
            else
                {
                    $notification = [
                        'status' => 'error',
                        'title'  => 'Thêm không thành công',
                        'text'   => "Thêm sản phẩm không thành công"
                    ];
                    $this->smarty->assign('notification', $notification);
                }

        }
    }
    public function edit()
    {

        if( isset($_POST['submit']) && $_POST['id'] != 0)
        {
            // pre($_POST);
            // die();
            $data['name'] = $_POST['name'];
            $data['code'] = $_POST['code'];
            $data['category_id'] = $_POST['category_id'];
            $data['trademark_id'] = $_POST['trademark_id'];
            $data['unit_id'] = $_POST['unit_id'];
            $data['is_discount'] = isset($_POST['is_discount']) ? 1 : 0;
            $data['discount_type'] = isset($_POST['discount_type']) ? $_POST['discount_type'] : 1;
            $data['discount'] = isset($_POST['discount']) ? $_POST['discount'] : 0;
            $data['price_import'] = $this->dstring->convert_price_to_int($_POST['price_import']);
            $data['price'] = $this->dstring->convert_price_to_int($_POST['price']);
            $data['price_sale'] = $this->dstring->convert_price_to_int($_POST['price_sale']);
            $data['description'] = $_POST['description'];
            $data['warranty'] = $_POST['warranty'];
            $data['number_warning'] = $_POST['number_warning'];
            $data['status'] = isset($_POST['status']) ? 1 : 0;
            $data['updated_at'] = time();
            $post['slug'] = $this->dstring->str_convert($data['name'] . $data['code']);
            $post['title'] = $data['name'];
            $this->pdo->update("posts", $post, "product_id=".$_POST['id']);
            try {
                $updateStatement = $this->slim_pdo->update($data)->table($this->table)->where('id', '=', $_POST['id']);
                $isSucceed = $updateStatement->execute();
            }
            catch(PDOException $e) {
                $text = $e->getMessage();
                $isSucceed = false;
            }

            if($isSucceed)
            {
                $notification = [
                    'status' => 'success',
                    'title'  => 'Sửa thành công',
                    'text'   => "Sửa sản phẩm thành công"
                ];
                $this->smarty->assign('notification', $notification );
            }
          else
            {
                $notification = [
                    'status' => 'error',
                    'title'  => 'Sửa không thành công',
                    'text'   => $text
                ];
                $this->smarty->assign('notification', $notification);
            }
        }
    }
    public function active_status()
    {
        $item = $this->pdo->fetch_one("SELECT status FROM " . $this->table . " WHERE id=" . $_GET['id']);
        $status = $item['status'] == 1 ? 0 : 1;
        $this->pdo->query("UPDATE " . $this->table. " SET status = '$status' WHERE id=" . $_GET['id']);
        lib_redirect_back();
    }

    public function ajax_load()
    {
        if( isset($_POST['id']) )
        {
          $item = $this->pdo->fetch_one("SELECT * FROM {$this->table} WHERE id = " . $_POST['id']);
          $item['category'] = $this->PostHelper->get_category_option($_POST['category_id']);
          echo json_encode($item);
        }
        $this->pdo->close();
        exit();
    }

    public function delete()
    {
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        $media_post = $this->pdo->fetch_all("SELECT * FROM media_post WHERE post_id=$id");
        foreach ($media_post as $key => $value)
        {
            $media = $this->pdo->fetch_one("SELECT * FROM media WHERE id = {$value['media_id']}");
            unlink(base_path($media['path']) . "/" . $media['name'] );
            $this->pdo->query("DELETE FROM media WHERE id={$value['media_id']}");
            $this->pdo->query("DELETE FROM media_post WHERE id={$value['id']}");
        }
        $this->pdo->query("DELETE FROM {$this->table} WHERE id=$id");
        lib_redirect_back();
    }



    function imagepost()
    {
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $post = $this->pdo->fetch_one("SELECT * FROM posts WHERE id = $id");
        $media_post = $this->pdo->fetch_all("SELECT * FROM media_post WHERE post_id = $id");
        foreach ($media_post as $key => $value)
        {
            $media_post[$key]['media'] = $this->pdo->fetch_one("SELECT * FROM media WHERE id = {$value['media_id']}");
        }
        //post
        $sql = "SELECT * FROM posts WHERE id =$id";
        $post = $this->pdo->fetch_one($sql);
        $this->smarty->assign('media_post', $media_post);
        $this->smarty->assign('post', $post);
        $this->smarty->display(DEFAULT_LAYOUT);
    }

    public function add_post()
    {
        $data['category_id'] = $_POST['category_id'];
        $data['title'] = $_POST['title'];
        $data['content'] = "";
        $data['slug'] = $this->dstring->str_convert($_POST['title'] . "-" .time());
        $data['status'] = 1;
        $data['created_at'] = time();
        $this->pdo->insert('posts', $data);
        lib_redirect_back();
    }

    public function edit_post()
    {
        $data['category_id'] = $_POST['category_id'];
        $data['title'] = $_POST['title'];
        $data['slug'] = $this->dstring->str_convert($_POST['title'] . "-" .time());
        $data['updated_at'] = time();
        $this->pdo->update('posts', $data, "id=" . $_POST['id']);
        lib_redirect_back();
    }

    public function add_image()
    {
      if(isset($_POST['avatar_change']))
      {

        $data = array();
        $avatar = new Zebra();
        if ( !isset($_FILES['avatar_file']) && !$this->helper->check_type($_FILES['avatar_file']['type']) )
        {
            $this->helper->create_notification(0, "Thêm ảnh không thành công");
        }

          $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
          $post = $this->pdo->fetch_one("SELECT * FROM posts WHERE id= $id");
          $avatar->source_path = $_FILES['avatar_file']['tmp_name'];
          $upload_file_name = $this->PostHelper->get_image_name_upload_from_dollar_files($post['id'], $_FILES['avatar_file']['type']);
          $avatar->target_path = base_path($this->arg['post_path']) . "/" . $upload_file_name;
          $avatar->jpeg_quality = 100;
          $avatar->preserve_aspect_ratio = true;
          if($_FILES['avatar_file']['type'] == "image/gif")
          {
            move_uploaded_file($_FILES['avatar_file']['tmp_name'], $avatar->target_path);
          }

          else
          {
            move_uploaded_file($_FILES['avatar_file']['tmp_name'], $avatar->target_path);
          }

          $data['name'] = $upload_file_name;
          $data['path'] = $this->arg['post_path'];
          $data['is_slider'] = 0;
          $data['is_video'] = 0;
          $media_id = $this->pdo->insert('media', $data);
          unset($data);
          $data['post_id'] = $id;
          $data['media_id'] = $media_id;
          $data['is_showed'] = 0;
          $this->pdo->insert('media_post', $data);
          lib_redirect_back();
        }
    }

    public function delete_image()
    {
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $media_id = isset($_GET['media_id']) ? intval($_GET['media_id']) : 0;

        $media = $this->pdo->fetch_one("SELECT * FROM media WHERE id=$media_id");
        $this->pdo->query("DELETE FROM media WHERE id=$media_id");
        $this->pdo->query("DELETE FROM media_post WHERE id=$id");
        unlink(base_path($media['path']) . "/" . $media['name'] );
        lib_redirect_back();
    }

    public function set_main_avatar()
    {
        $media_post = isset($_GET['media_post']) ? intval($_GET['media_post']) : 0;
        $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
        $data['is_showed'] = 0;
        $this->pdo->update('media_post', $data, "post_id = $post_id AND is_showed = 1 ");

        $data['is_showed'] = 1;
        $this->pdo->update('media_post', $data, "id = $media_post");
        lib_redirect_back();
    }

    function save_post()
    {
        $id = $_POST['id'];
        $data['content'] = $_POST['content'];
        $this->pdo->update('posts', $data, "id=$id");
        lib_redirect_back();
    }
}
