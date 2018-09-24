<?php

class Patient_trash extends Main
{

    public function index()
    {

        $key = isset($_GET['key']) ? $_GET['key'] : "";
        $sql_where = "WHERE 1 = 1 ";
        if ($key != "") {
            $key_custom = trim($key);
            $sql_where .= " AND ( name LIKE '%$key_custom%' OR phone LIKE '%$key_custom%')";
        }
        $sql_where .= " AND is_deleted = 1 ORDER BY id DESC";
        $out = [];
        $out['key'] = $key;

        //query
        $sql = "SELECT * FROM patient " . $sql_where;
        $paging = $this->paging->get_content($this->pdo->count_rows($sql), 15);
        $sql .= $paging['sql_add'];
        $users = $this->pdo->fetch_all($sql);
        foreach ($users as $key => $user) {
            $users[$key]['created_at'] = gmdate('d.m.Y', $user['created_at'] + 7 * 3600);
            $users[$key]['updated_at'] = gmdate('d.m.Y', $user['updated_at'] + 7 * 3600);
        }
        //smarty

        $this->smarty->assign('out', $out);
        $this->smarty->assign('paging', $paging);
        $this->smarty->assign('users', $users);
        $this->smarty->display(DEFAULT_LAYOUT);
    }

    public function restore()
    {
        $id = $_GET['id'];
        $patient = $this->pdo->fetch_one("SELECT * FROM patient WHERE id = $id");
        $data['is_deleted'] = 0;
        $data['deleted_at'] = 0;
        $isSucceed = $this->pdo->update('patient', $data, "id=$id");
        if ($isSucceed) {
            $this->helper->create_notification(1, "Khôi phục bệnh nhân {$patient['name']} thành công");
        } else {
            $this->helper->create_notification(0, "Khôi phục bệnh nhân {$patient['name']} không thành công");
        }
        lib_redirect('/admin?mc=patient_trash');
    }

}
