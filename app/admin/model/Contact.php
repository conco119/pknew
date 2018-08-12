<?php

class Contact extends Main
{
    public function index()
    {
        $sql = "SELECT * FROM contacts";
        $paging = $this->paging->get_content($this->pdo->count_rows($sql), 10);
        $sql .= $paging['sql_add'];
        $contacts = $this->pdo->fetch_all($sql);
        foreach($contacts as $key => $contact)
        {
            // $contacts[$key]['status'] = $this->helper->help_get_text_status($contact['status'], 'contacts', $contact['id']);
            $contacts[$key]['created_at'] =  gmdate("H:i A d/m/Y", time() + 7 * 3600);
        }
        $this->smarty->assign('paging', $paging);
        $this->smarty->assign('contacts', $contacts);
        $this->smarty->display(DEFAULT_LAYOUT);
    }

    public function active()
    {
        $id = isset($_GET['id']) ? $this->helper->slash($_GET['id']) : 0;
        $contact = $this->pdo->fetch_one("SELECT * FROM contacts WHERE id=$id");
        $data['status'] = $contact['status'] == 1 ? 0 : 1;
        $this->pdo->update('contacts', $data, "id=$id");
        lib_redirect_back();
    }

    function ajax_get_detail_contact()
    {
        $id = $_POST['id'];
        $sql = "SELECT * FROM contacts WHERE id = $id";
        $contact = $this->pdo->fetch_one($sql);
        echo json_encode($contact);
        exit();
    }

}