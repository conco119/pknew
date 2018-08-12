<?php

class Post extends Main
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $sql = "SELECT p.*, m.path, m.name FROM posts p
        LEFT JOIN media_post mp ON mp.post_id = p.id
        LEFT JOIN media m ON m.id = mp.media_id
        WHERE mp.is_showed = 1 AND p.status = 1";
        $posts = $this->pdo->fetch_all($sql);

        $this->smarty->assign('posts', $posts);
        $this->smarty->display('home.tpl');
    }


}