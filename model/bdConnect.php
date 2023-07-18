<?php


class bdConnect {
    

    public function __construct() {

        $mysql =  @new \mySqli (DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
        self::infoUsers($mysql);
    }


    public static function connectBazaEroor($mysql) {

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

        //  $mysql -> close();
        
    }
    
    
    
   
    function infoUsers($mysql) {
        
      
         self::connectBazaEroor($mysql);
         
    
         $resultat = $mysql->query("SELECT * FROM  `oc_users` ");
          
         while ($row_user = $resultat->fetch_assoc()) {
            $i = 0;
            $i = $i + 1;
            echo $i . ' '.     '<b>id: </b>' . $row_user['user_id'] . '.'. 
                        '<b>User name: </b>' . $row_user['username'] . '.'.
                       '<b>First name: </b>' . $row_user['firstname']. '.'.
                        '<b>Last name: </b>' . $row_user['lastname']. '.'.
                            '<b>email: </b>' . $row_user['email'] . '.'.
                       //'<b>password: </b>' . $row_user['key'] . '.'.
                             '<b>data: </b>' . $row_user['date_add'] . '.' . '<br>';
         }
        
         $mysql->close();
    }
    
    
    

    function registrationUser($mysql, $oc_name, $oc_email, $oc_key) {
        
        $mysql = new mysqli("localhost", "root", "root", "crmTest", "3306");
        
       
        $mysql->query("INSERT INTO `oc_users` (`id`, `name`,`email`,`key`,`date_add`)
                        VALUES (null , '$oc_name', '$oc_email', '$oc_key', CURRENT_TIMESTAMP) ");
        $mysql->close();
    }





}
?>