<?php

class Home extends Main
{

    public function __construct()
    {
        parent::__construct();
        $this->HomeHelper = new HomeHelper();
    }

    public function index()
    {
        $sql = "SELECT p.*, m.path, m.name FROM posts p
                LEFT JOIN media_post mp ON mp.post_id = p.id
                LEFT JOIN media m ON m.id = mp.media_id
                WHERE mp.is_showed = 1
                ";
        $posts = $this->pdo->fetch_all($sql);
        // pre($posts);
        // pre($posts);
        $this->smarty->assign('posts', $posts);
        $this->smarty->display('home.tpl');
    }

    public function payment()
    {
        $this->smarty->display('home.tpl');
    }

    public function contact()
    {
        if (isset($_POST['submit'])) {
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['phone'] = $_POST['phone'];
            $data['description'] = $_POST['description'];
            $data['status'] = 0;
            $data['created_at'] = time();
            $this->pdo->insert('contacts', $data);
            lib_alert('Gửi thành công');
        }
        $this->smarty->display('contact.tpl');
    }

    public function intro()
    {
        $this->smarty->display('home.tpl');
    }

    public function about()
    {
        $this->smarty->display('home.tpl');
    }

}
