<?php
date_default_timezone_set("Asia/Tashkent");
//error_reporting(E_ALL & ~E_NOTICE);
ob_start();
session_start();
//ini_set('error_reporting', 1);
ini_set('display_errors', 0);

$_SESSION['lang'] = 'en';
$template_path = './core/template_evo/';
$template_path_peges = '/pages/';
$path = '/core/lib';
$path_f = '/core/lib/footer';
$path_h = '/core/lib/header';
class db {


    static function conn()
    {
        $conn = new mysqli('localhost','root','','evosoft');
        //$conn = new mysqli('localhost', 'med', 'evosoft050', 'med');
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            die('Connection faield:' . $conn->connect_error);
        } else {
            $rs = $conn;
        }
        return $rs;
    }

    static function query($sql) {
        $conn = db::conn();
        if ($conn->query($sql)===TRUE) {$rs['stat']='success';$rs['ID']=$conn->insert_id;}else{$rs=$conn->error;}
        return $rs;}

    static function arr($sql) {
        $conn = db::conn();
        $q = $conn->query($sql);
        if ($q===FALSE) {$rs=$conn->error;}
        if ($q->num_rows>0) {while ($row = $q->fetch_assoc()) {$rs[] = $row;}}
        if ($q->num_rows==0) {$rs='empty';}
        return $rs;}

    static function arr_s($sql) {
        $conn = db::conn();
        $q = $conn->query($sql);
        if ($q===FALSE) {$rs=$conn->error;}
        if ($q->num_rows>0) {while ($row = $q->fetch_assoc()) {$rs = $row;}}
        if ($q->num_rows==0) {$rs='empty';}
        return $rs;}

    static function auth_log_manager() {
        $pass = '7416414';
        $login = 'superadmin';
        if ($_POST['login']==$login AND $_POST['pass']==$pass){
            $rs = 'success';
            $data = ['ID'=>'admin','NAME'=>'super','SURNAME'=>'admin','POSITION'=>'superadmin','PHOTO_LINK'=>''];
            $_SESSION['user']['id']=$data['ID'];
            $_SESSION['user']['name']=$data['NAME'];
            $_SESSION['user']['surname']=$data['SURNAME'];
            $_SESSION['user']['pos']=$data['POSITION'];
            $_SESSION['user']['photo']=$data['PHOTO_LINK'];
            LocalRedirect('index.php?page=main');}
        return $rs;}

}

?>