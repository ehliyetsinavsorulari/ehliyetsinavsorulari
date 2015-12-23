<?php

class view {

    private static $ci;

    function __construct(){
        self::$ci = &get_instance();
    }

    public static $musteritipi = array(
        1 => "Bireysel",
        2 => "Kurumsal",
        3 => "Kamu",
    );

    public static function load($view,$params=array(),$layout="main"){
        $params['content'] = self::$ci->load->view($view,$params,true);
        //view::dump($params,true);
        self::$ci->load->view("layouts/{$layout}",$params);
    }

    public static function dump($data, $dumptoScreen = false)
    {
        if ($dumptoScreen) {
            pre($data);
            die;
        }
        self::add_message('<xmp>'.print_r($data,1).'</xmp>');
    }

    public static function pagination($url,$dataCount,$perPage=10){
        $paginationConfig = array(
            'base_url' => $url,
            'use_page_numbers'=>true,
            'page_query_string'=>true,
            'query_string_segment'=>"page",
            'total_rows' => $dataCount,
            'per_page' => $perPage,
            'num_tag_open'=>"<li>",
            'num_tag_close'=>"</li>",
            'prev_link'=>"&laquo;",
            'next_link'=>"&raquo;",
            'next_tag_open'=>"<li>",
            'next_tag_close'=>"</li>",
            'prev_tag_open'=>"<li>",
            'prev_tag_close'=>"</li>",
            'cur_tag_open'=>'<li class="active"><span>',
            'cur_tag_close'=>'<span class="sr-only">(current)</span></span>',
            'first_link'=>'İlk', //kapatmak için false değeri verilir
            'last_link'=>'Son',
            'first_tag_open'=>"<li>",
            'first_tag_close'=>"</li>",
            'last_tag_open'=>"<li>",
            'last_tag_close'=>"</li>",

        );

        self::$ci->load->library('pagination');
        self::$ci->pagination->initialize($paginationConfig);
        $pagination = self::$ci->pagination->create_links();

        return $pagination;
    }

    public static function validateDate($date)
    {
        $d = DateTime::createFromFormat('Y-m-d', $date);
        return $d && $d->format('Y-m-d') == $date;
    }

    public static  function cryptData($data)
    {
        self::$ci->load->library('encrypt');
        if (is_array($data)) {
            $cryptedData = array();
            if (count($data)) {
                foreach ($data as $key => $val) {
                    $cryptedData[$key] = base64_encode(self::$ci->encrypt->encode($val, CRYPT_SALT));
                }
            }else{
                $cryptedData = "";
            }
        } else {
            $cryptedData = base64_encode(self::$ci->encrypt->encode($data, CRYPT_SALT));
        }
        return $cryptedData;
    }

    public static  function decryptData($data)
    {


        self::$ci->load->library('encrypt');
        if (is_array($data)) {
            $cryptedData = array();
            if (count($data)) {
                foreach ($data as $key => $val) {
                    $cryptedData[$key] = self::$ci->encrypt->decode(base64_decode($val), CRYPT_SALT);
                }
            }
        } else {
            $cryptedData = self::$ci->encrypt->decode(base64_decode($data), CRYPT_SALT);
        }
        return $cryptedData;
    }

    public static function add_message($message, $type = "error")
    {
        self::$ci->load->library('session');
        self::$ci->session->set_flashdata($type, $message);
    }

    public static function get_messages($type)
    {
        self::$ci->load->library('session');
        return self::$ci->session->flashdata($type);
        /*$messages = Yii::app()->user->getFlashes();
        $newData = array();
        if (count($messages)) {
           foreach ($messages as $type => $message) {
              $newKey = explode("_", $type);
              $newData[$newKey[0]][] = $message;
           }
        }
        return $newData;*/
    }

    public static function format_date($date, $turkish = false)
    {
        $time = strtotime($date);
        $months = array(
            '01' => 'Ocak',
            '02' => 'Şubat',
            '03' => 'Mart',
            '04' => 'Nisan',
            '05' => 'Mayıs',
            '06' => 'Haziran',
            '07' => 'Temmuz',
            '08' => 'Ağustos',
            '09' => 'Eylül',
            '10' => 'Ekim',
            '11' => 'Kasım',
            '12' => 'Aralık'
        );
        if ($turkish) {
            $result = date('d', $time) . " " . $months[date('m', $time)] . " " . date('Y', $time);
            return $result;
        } else {
            return date("d/m/Y", $time);
        }
    }

    public static function format_db_date($date)
    {
        $dateWithSlash = array_reverse(explode('/',$date));
        $dateWithDash = array_reverse(explode('-',$date));
        $dateWithDot = array_reverse(explode('.',$date));

        if(count($dateWithSlash)==3){
            $tarih=implode('-',$dateWithSlash);
        }elseif(count($dateWithDash)==3){
            $tarih=implode('-',$dateWithDash);
        }else{
            $tarih=implode('-',$dateWithDot);
        }

        return $tarih;
    }
    public static function format_datetime($date, $turkish = false)
    {
        $time = strtotime($date);
        $months = array(
            '01' => 'Ocak',
            '02' => 'Şubat',
            '03' => 'Mart',
            '04' => 'Nisan',
            '05' => 'Mayıs',
            '06' => 'Haziran',
            '07' => 'Temmuz',
            '08' => 'Ağustos',
            '09' => 'Eylül',
            '10' => 'Ekim',
            '11' => 'Kasım',
            '12' => 'Aralık'
        );
        if ($turkish) {
            $result = date('d', $time) . " " . $months[date('m', $time)] . " " . date('Y', $time);
            return $result;
        } else {
            return date("d-m-Y H:i:s", $time);
        }
    }

    public static function format_db_datetime($date)
    {
        $time = strtotime($date);
        return date("Y-m-d H:i:s", $time);
    }


}


?>


