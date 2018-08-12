<?php

class Patient extends Main
{
  function __construct()
  {
    parent::__construct();
    $this->patientHelper = new PatientHelper();
    $this->table = "patient";
  }

  public function index()
  {

    $key = isset($_GET['key']) ? $_GET['key'] : "";
    $day = isset($_GET['day']) ? $_GET['day'] : 0;
    $sql_where = "WHERE 1 = 1 ";
    if($key != "")
    {
      $key_custom = trim($key);
      $sql_where .= " AND ( name LIKE '%$key_custom%' OR phone LIKE '%$key_custom%')";
    }
    if($day != 0)
    {
      if($day == 1)
        $sql_where .= " AND latest_day = CURDATE()";
      if($day == 2)
        $sql_where .= " AND WEEK(latest_day) = WEEK(CURDATE()) AND YEAR(latest_day) = YEAR(CURDATE())";
      if($day == 3)
        $sql_where .= " AND MONTH(latest_day) = MONTH(CURDATE()) AND YEAR(latest_day) = YEAR(CURDATE())";
    }
    $sql_where .= " ORDER BY id DESC";
    $out = [];
    $out['key'] = $key;
    $out['day'] = $this->patientHelper->get_select_day($day);

    //query
    $sql = "SELECT * FROM patient " . $sql_where;
    $paging = $this->paging->get_content($this->pdo->count_rows($sql), 10);
    $sql .= $paging['sql_add'];
    $users = $this->pdo->fetch_all($sql);
    foreach($users as $key => $user)
    {
      $users[$key]['created_at'] = gmdate('d.m.Y', $user['created_at'] + 7 * 3600);
      $users[$key]['updated_at'] = gmdate('d.m.Y', $user['updated_at'] + 7 * 3600);
    }
    //smarty

    $this->smarty->assign('out', $out);
    $this->smarty->assign('paging', $paging);
    $this->smarty->assign('users', $users);
    $this->smarty->display(DEFAULT_LAYOUT);
  }

  public function create()
  {
      $data['code'] = $this->patientHelper->get_patient_code();
      $data['name'] = $_POST['name'];
      $data['age'] = $_POST["age"];
      $data["gender"] = $_POST["gender"];
      $data["address"] = $_POST["address"];
      $data["email"] = $_POST["email"];
      $data["phone"] = $_POST["phone"];
      $data['latest_day'] =  gmdate('Y-m-d');
      $data['created_at'] = time();
      $isSucceed = $this->pdo->insert('patient', $data);
      if($isSucceed)
          $this->helper->create_notification(1, "Thêm bệnh nhân {$data['name']} thành công");
      else
          $this->helper->create_notification(0, "Thêm bệnh nhân {$data['name']} không thành công");
      lib_redirect('./admin?mc=patient');
  }


  public function edit()
  {
      $id = $_POST['id'];
      $data['name'] = $_POST['name'];
      $data['age'] = $_POST["age"];
      $data["gender"] = $_POST["gender"];
      $data["address"] = $_POST["address"];
      $data["email"] = $_POST["email"];
      $data["phone"] = $_POST["phone"];
      $data['updated_at'] = time();
      $isSucceed = $this->pdo->update('patient', $data, 'id='.$id);
      if($isSucceed)
          $this->helper->create_notification(1, "Chỉnh sửa bệnh nhân {$data['name']} thành công");
      else
          $this->helper->create_notification(0, "Chỉnh sửa bệnh nhân {$data['name']} không thành công");
      lib_redirect('./admin?mc=patient');
  }


  public function delete()
  {
    $id = $_GET['id'];
    $patient = $this->pdo->fetch_one("SELECT * FROM patient WHERE id = $id");
    //xóa bệnh nhân
    $this->pdo->query("DELETE FROM patient WHERE id = $id");
    $media_patient = $this->pdo->fetch_all("SELECT * FROM media_patient WHERE patient_id = $id");
    foreach ($media_patient as $key => $value)
    {
        $media = $this->pdo->fetch_one("SELECT * FROM media WHERE id = {$value['media_id']}");
        unlink(base_path($media['path'] . "/" . $media['name']));
        $this->pdo->query("DELETE FROM media WHERE id = {$value['media_id']}");
    }
    $this->pdo->query("DELETE FROM media_patient WHERE patient_id = $id");
    $this->helper->create_notification(1, "Xóa bệnh nhân {$patient['name']} thành công");
    lib_redirect('./admin?mc=patient');
  }

  public function add_video()
  {
    if ( !isset($_FILES['video']) || !$this->patientHelper->check_video_type($_FILES['video']['type']) )
    {
        $this->helper->create_notification(0, "Chưa nhập video hoặc video không hợp lệ");
        lib_redirect("./admin?mc=patient");
    }

    $id = !empty($_POST['id']) ? $_POST['id'] : 0;
    $patient_name = $this->pdo->fetch_one("SELECT * FROM patient WHERE id = $id");
    $patient_count = $this->pdo->count_rows("SELECT * FROM  media_patient WHERE patient_id = $id");
    $extension = explode('.', $_FILES['video']['name'])[1];
    $videoNameDate = implode("_", explode("-", gmdate('d-m-Y')));
    $videoName = $id . "_" . $patient_count . "_" . $videoNameDate . "." . $extension;
    $path_day_mon_year = explode("-", gmdate('d-m-Y'));
    $full_path =  base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2] . "/" . $path_day_mon_year[1] . "/" . $path_day_mon_year[0]) . "/" . $videoName;
    // tạo folder nếu chưa tồn tại
    if(!is_dir(base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2])))
      mkdir(base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2]), 0700);
    if( !is_dir(base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2] . "/" . $path_day_mon_year[1])) )
      mkdir(base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2] . "/" . $path_day_mon_year[1] ), 0700);
    if( !is_dir(base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2] . "/" . $path_day_mon_year[1]) . "/" . $path_day_mon_year[0]) )
      mkdir(base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2] . "/" . $path_day_mon_year[1] . "/" . $path_day_mon_year[0] ), 0700);

    // move_uploaded_file($_FILES['video']['tmp_name'], $full_path);
    if($extension == 'mpg')
    {
      // tạo folder temp
      if(!is_dir(base_path($this->arg['video_path'] . "/" . "temp")))
        mkdir(base_path($this->arg['video_path'] . "/" . "temp"), 0700);
      $temp_path = base_path($this->arg['video_path'] . "/" . "temp" . '/' . $videoName);
      move_uploaded_file($_FILES['video']['tmp_name'], $temp_path);
      //convert
      $videoName = $id . "_" . $patient_count . "_" . $videoNameDate . "." . "mp4";
      $full_path =  base_path($this->arg['video_path'] . "/" . $path_day_mon_year[2] . "/" . $path_day_mon_year[1] . "/" . $path_day_mon_year[0]) . "/" . $videoName;
      $cmd = "/usr/local/bin/HandBrakeCLI -i " . $temp_path . " -o " . $full_path;
      exec($cmd);
      unlink($temp_path);
    }
    else
    {
      move_uploaded_file($_FILES['video']['tmp_name'], $full_path);
    }
    // thêm vào bảng media
    $data['name'] = $videoName;
    $data['path'] = $this->arg['video_path'] . "/" . $path_day_mon_year[2] . "/" . $path_day_mon_year[1] . "/" . $path_day_mon_year[0];
    $data['is_slider'] = 0;
    $data['is_video'] = 1;
    $media_id = $this->pdo->insert("media", $data);
    unset($data);
    //thêm vào bảng media_patient
    $data['patient_id'] = $id;
    $data['content'] = $_POST['note'];
    $data['media_id'] = $media_id;
    $data['date'] = gmdate("Y-m-d");
    $data['created_at'] = time();
    $this->pdo->insert('media_patient', $data);
    unset($data);
    //update bảng patient
    $data['latest_day'] = gmdate("Y-m-d");
    $this->pdo->update('patient', $data, "id=$id");
    $this->helper->create_notification(1, "Thêm video cho bệnh nhân {$patient_name['name']} thành công");
    lib_redirect("./admin?mc=patient");
  }

  public function detail()
  {
    $id = $_GET['id'];
    $patient = $this->pdo->fetch_one("SELECT * FROM patient WHERE id = $id");
    $media_patient = $this->pdo->fetch_all("SELECT * FROM media_patient WHERE patient_id = $id");
    foreach ($media_patient as $key => $value)
    {
      $media_patient[$key]['media'] = $this->pdo->fetch_one("SELECT * FROM media WHERE id = {$value['media_id']}");
      $media_patient[$key]['date'] = gmdate("d-m-Y", strtotime($value['date']) + 7*3600);
    }
    // pre($media_patient);
    $this->smarty->assign('media_patient', $media_patient);
    $this->smarty->assign('patient', $patient);
    $this->smarty->display(DEFAULT_LAYOUT);
  }

  public function ajax_load_patient()
  {
    if( isset($_POST['id']) )
    {
      $user = $this->pdo->fetch_one("SELECT * FROM patient WHERE id = " . $_POST['id']);
      echo json_encode($user);
    }
  }

  function delete_video()
  {
    $id = $_GET['id'];
    $media_patient = $this->pdo->fetch_one("SELECT * FROM media_patient WHERE id = $id");
    $media = $this->pdo->fetch_one("SELECT * FROM media WHERE id = {$media_patient['media_id']}");
    unlink(base_path($media['path'] . "/" . $media['name']));
    $this->pdo->query("DELETE FROM media_patient WHERE id = $id");
    $this->pdo->query("DELETE FROM media WHERE id = {$media_patient['media_id']}");
    lib_redirect_back();
  }

  function ajax_check_phone()
  {
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : 0;
    $patient = $this->pdo->fetch_one("SELECT * FROM patient WHERE phone='$phone' AND phone <> '123456789'");
    if($patient['id'] != 0)
      echo json_encode($patient);
    else
      echo 0;
  }

}

 ?>
