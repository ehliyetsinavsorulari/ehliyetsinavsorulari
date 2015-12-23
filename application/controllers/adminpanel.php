<?php
class adminpanel extends CI_Controller
{
    function admin(){

        $params = array();
       view::load('adminpanel/anasayfa', $params);
    }
}
