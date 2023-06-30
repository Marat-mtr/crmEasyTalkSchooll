<?php

$oc_name = $_POST['name'];
$oc_email = $_POST['email'];
#$oc_key = md5($_POST['key']);
#$encrypted = password_hash($password, PASSWORD_DEFAULT);
$oc_key = password_hash($_POST['key'], PASSWORD_DEFAULT);
$oc_key_two = md5($_POST['key']);



if('' == $oc_name || '' ==$oc_email || '' ==$oc_key) {
    echo 'ERROR! Заповніть всі поля!' . '<br>';
   } else {
    reg_prov($oc_name , $oc_email);

    require_once ('../mysql_baza.php');
    registrationUser($oc_name, $oc_email, $oc_key);
  }

// Вивід інформації, яка записується в базу даних
function reg_prov($oc_name , $oc_email){
  //  global $oc_name;
  //  global $oc_email;
    global $oc_key;
    global $oc_key_two;

    echo  $oc_name . '<br>';
    echo  $oc_email . '<br>';
    echo  $oc_key. '<br>';
    echo  'vdd' , ' ' , $oc_key_two;


}






