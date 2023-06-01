<?php
session_start();
require('../__database__/__DB__.php');

$DB = new __database__();
$arr = array();
$msg;
$role;


if ($_POST['user_name']) {
  $user_name = trim($_POST['user_name']);
  $user_password = trim($_POST['user_password']);
  $has_password = sha1($user_password);

  echo $user_name."  ".$user_password;
  /*
if ($user_name && $has_password) {
  $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND user_password = '$has_password'";
  $data = $DB->Login($sql);
  if ($data['user_password'] === $has_password) {
    if (trim($data['user_name']) == $user_name) {
      $_SESSION['user_info'] = $data;
      $msg = "Login successfully !";
      $role = true;
    } else {
      $msg = 'Wrong Username !';
      $role = false;
    }
  } else {
    $msg = 'Wrong Password !';
    $role = false;
  }
}
*/
  $arr[] = array (
    "message" => $msg,
    "role" => $role,
  );
  //echo json_encode($arr);
}
?>