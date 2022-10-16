<?php
include '../auto/php54n/mysql.class.php';
include '../auto/php54n/config.php';
$send_cards=json_decode(file_get_contents('php://input'), true);
$db=array();
$data=array();
$db = new Mysql($host, $username, $password, $dbname);
$user = $db->getOne("select * from jz_user where id_key='" . $db->s($send_cards['password']) . "'");
if (!$user) {
    $data['code']=-1;
    $data['msg']="登录错误";
    echo json_encode($data,true);
}
if ($user) {
    $data['code']=200;
    $data['msg']="登录成功";
    $data['returnUrl']="/index.php?token=".$user['token']."&s=".$send_cards['s'];
    echo json_encode($data,true);
}

