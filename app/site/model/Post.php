<?php

class Post extends Main
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sql = "SELECT p.*, m.path, m.name FROM posts p
        LEFT JOIN media_post mp ON mp.post_id = p.id
        LEFT JOIN media m ON m.id = mp.media_id
        WHERE mp.is_showed = 1 AND p.status = 1 ORDER BY p.id DESC";
        $paging = $this->paging->get_content($this->pdo->count_rows($sql), 10);
        $sql .= $paging['sql_add'];
        $posts = $this->pdo->fetch_all($sql);

        //noi bat
        $sql = "SELECT p.*, m.path, m.name FROM posts p
        LEFT JOIN media_post mp ON mp.post_id = p.id
        LEFT JOIN media m ON m.id = mp.media_id
        WHERE mp.is_showed = 1 AND p.status = 1 AND p.is_hot = 1 ORDER BY p.id DESC LIMIT 10";

        $posts1 = $this->pdo->fetch_all($sql);
        foreach ($posts as $key => $value) {
            $posts[$key]['created_at'] = gmdate('d-m-Y', $value['created_at'] + 7 * 3600);
        }

        $sql = "SELECT * FROM categories";
        $categories = $this->pdo->fetch_all($sql);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('posts', $posts);
        $this->smarty->assign('paging', $paging);
        $this->smarty->assign('posts1', $posts1);
        $this->smarty->display('home.tpl');
    }

    public function detail()
    {
        $slug = slash_trim($_GET['slug']);

        $sql = "SELECT p.*, m.path, m.name, c.name as category_name FROM posts p
        LEFT JOIN media_post mp ON mp.post_id = p.id
        LEFT JOIN media m ON m.id = mp.media_id
        LEFT JOIN categories c ON p.category_id = c.id
        WHERE mp.is_showed = 1 AND p.status = 1 AND p.slug = '$slug'";
        // $sql = "SELECT * FROM posts WHERE slug = " . $_GET['slug'];
        // echo $sql;
        $post = $this->pdo->fetch_one($sql);
        $post['created_at'] = gmdate('d-m-Y', $post['created_at'] + 7 * 3600);
        $sql = "SELECT * FROM categories";
        $categories = $this->pdo->fetch_all($sql);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('post', $post);
        $this->smarty->display('home.tpl');
    }

}
