<?php

namespace controller;


use model\bdConnect;

class mailSend extends bdConnect
{


    public function mailgoo()
    {

        echo '<br>' . $this->gmm2 = 'uuuu22u' . '<br';
    }

}


//class mailSend extends yBDconnect {
//protected $masiv;
//protected $mailfor;
//protected $mailfrom;
//protected $temamail;
//protected $textmail;
//
//public function __construct($mailfor, $mailfrom, $temamail, $textmail)
//{
//  $this->mailfor = $mailfor;
//  $this->mailfrom = $mailfrom;
//  $this->temamail = $temamail;
//  $this->textmail = $textmail;
//
//}




//
//    public function mailSends($gmm, $gmm2){
//
//        echo 'vse ok mailsend';
//        echo $gmm;
//        echo $gmm2;
//    }
//
////public function mailSends($mailfor, $mailfrom, $temamail, $textmail, $gmm, $gmm2){
////  $mysql = new mysqli("localhost", "root", "root", "crmtest", "3306");
////
////  $mysql->query("INSERT INTO `mail_sends` (`id`, `mailfor`,`mailfrom`,`temamail`,`textmail`)
////                       VALUES (null, '$mailfor', '$mailfrom', '$temamail', '$textmail') ");
////  $mysql->close();
////  echo 'vse ok mailsend';
////  echo $gmm;
////  echo $gmm2;
//// }
//
// //$mailfor = trim($_POST['mailfor']);
//// public $mailfrom = trim($_POST['mailfrom']);
//// public $temamail = trim($_POST['temamail']);
//// public $textmail = trim($_POST['textmail']);
//// public $mailServerSend = $_POST['mailServerSend'];
//
//
//
// public function gooo($mailfor,  $mailfrom, $temamail, $textmail, $mailServerSend){
//
//$masiv = ['mailfor' => $mailfor,
//                  'mailfrom' => $mailfrom,
//                  'temamail' => $temamail,
//                  'textmail' => $textmail];
//
//
//  if (strlen($mailfor) <5 || strpos($mailfor ,'@') == false)
//      $error_mailfor = 'Введіть коректну адресу відправника!';
//    else $error_mailfor1 = 1;
//
//  if (strlen($mailfrom) <5 || strpos($mailfrom , '@') == false)
//      $error_mailfrom = 'Введіть коректну адресу отримувача!';
//    else $error_mailfrom2 = 1;
//
//  if (strlen($temamail) <5)
//      $error_temamail = 'Введіть коректно тему повідомлення!';
//    else $error_temamail3 = 1;
//
//  if (strlen($textmail) <8)
//      $error_textmail = 'Введіть текст повідомлення';
//    else $error_textmail4 = 1;
//
//  if ($mailServerSend ==0)
//      $error_mailServerSend = 'Виберіть сервер!';
//     else $error_mailServerSend5 = 1;
//
//
//  if ($error_mailfor1 == 1 && $error_mailfrom2 ==1 && $error_temamail3 ==1 && $error_textmail4 ==1 && $error_mailServerSend5 ==1){
//      $vse_ok = 'vse ok';
//      sendMessageLocal ();
//      require_once ('mail_send.html');
//
//  } else require_once ('mail_send.html');
//    //trim - видалення пробіла перед і в кінці строки
//    //strlen - перевіряє кількість символів
//    //strpos - перевіряє наявність символа
// }
//
//  function sendMessageLocal (){
//
//      $mysql = new mysqli('localhost', 'root' , 'root' , 'less_php' , '3306');
//
//      global $mailfor;
//      global $mailfrom;
//      global $temamail;
//      global $textmail;
//
//
//
//
//
//
//  }
//
//
//
//}
//
//
//
//$mailfor = trim($_POST['mailfor']);
//$mailfrom = trim($_POST['mailfrom']);
//$temamail = trim($_POST['temamail']);
//$textmail = trim($_POST['textmail']);
//$mailServerSend = $_POST['mailServerSend'];
//
//
//
//  //    session_destroy();   видалення сесії