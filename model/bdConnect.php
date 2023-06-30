<?php

namespace model;

class bdConnect extends model
{
    protected $hostname = DB_HOSTNAME;

   public function __construct()
   {
        echo $this->proverka1;
        echo $this->masiv;

        $mysql = @new \mySqli (DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

       if ($mysql !== null )
       {
           if ($mysql->connect_error)
           {
               echo '<b>1)Проблема з підключенням Бази даних. Номер помилки:</b>' . $mysql->connect_errno, '<br>';
               echo '<b>2)Проблема з підключенням Бази даних. Помилка:</b>' . $mysql->connect_error, '<br>';
           } else if ($mysql->error) {
               echo '<b>3)Проблема з підключенням Бази даних. Номер помилки:</b>' . $mysql->errno, '<br>';
               echo '<b>4)Проблема з підключенням Бази даних. Помилка:</b>' . $mysql->error, '<br>';
               echo '<b>5)Проблема з підключенням Бази даних. Номер помилки:</b> . $mysql->error_list', '<br>';
           } else {
               echo '<b>Connect Baza - OK!</b>', '<br>';
           }
       } else { echo 'ERROR. Перевірка підключення бази непройдена!'; }

         $mysql -> close();

   }
//
//
//   public function mailSends($masiv){
//    $mysql = new mysqli("localhost", "root", "root", "crmTest", "3306");
//
//    $mysql->query("INSERT INTO `mail_sends` (`id`, `mailfor`,`mailfrom`,`temamail`,'textmail',`date_add`)
//                         VALUES (null , '$masiv[mailfor]', $masiv[mailfrom], '$masiv[temamail]', '$masiv[textmail]'   CURRENT_TIMESTAMP) ");
//    $mysql->close();
//   }
//
// //Інформація про користувачів
// function infoUsers()
// {
//    global $mysql;
//    //перевірка підключення
//     conectBaza();
//
//    //вивід інформації про користувачів
//    $resultat = $mysql->query("SELECT * FROM  `oc_users` ");
//    while ($row_user = $resultat->fetch_assoc()) {
//        $i = 0;
//        $i = $i + 1;
//        echo $i . ' ';
//        echo '<b>id: </b>' . $row_user['id'] . '.';
//        echo '<b>name: </b>' . $row_user['name'] . '.';
//        echo '<b>email: </b>' . $row_user['email'] . '.';
//        //echo '<b>password:</b>' . $row_user['key'] . '.';
//        echo '<b>data: </b>' . $row_user['date_add'] . '.' . '<br>';
//    }
//    $mysql->close();
// }
//
//
// //Реєстрація користувачів
// function registrationUser()
// {
//    $mysql = new mysqli("localhost", "root", "root", "crmTest", "3306");
//
//    $oc_name=1;
//    $oc_email=1;
//    $oc_key=1;
//    //поля id, date add необовязкові
//    $mysql->query("INSERT INTO `oc_users` (`id`, `name`,`email`,`key`,`date_add`)
//                         VALUES (null , '$oc_name', '$oc_email', '$oc_key', CURRENT_TIMESTAMP) ");
//    $mysql->close();
// }


}