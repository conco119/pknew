<?php

class PatientHelper extends HelpAbstract
{
    function __construct()
    {
        parent::__construct();
        $this->prefix_img_name = 'mtd-avatar';
        $this->day = [
            1 => "Hôm nay",
            2 => "Tuần này",
            3 => 'Tháng này'
        ];
        $this->video_type = array("video/quicktime", "video/mp4", "video/mpeg");
    }

    public function get_patient_code()
    {
       return time();
    }

    function get_select_day($day)
    {
        $result = '';
        foreach($this->day as $key => $value)
        {
            if($key == $day)
                $result .= "<option value='$key' selected>$value</option>";
            else
                $result .= "<option value='$key'>$value</option>";
        }
        return $result;
    }

    function check_video_type($type)
    {
        return in_array($type, $this->video_type);
    }

}
