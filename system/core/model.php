<?php



abstract class Model{
    protected $mysqls;

    public function __construct()
    {

    }


    public function connectBD()
    {
        $mysqls = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

        self::connectBDError($mysqls);

        $this->mysqls = $mysqls->query("SELECT * FROM `est_users`");

        return $this;
    }


    public static function connectBDError($mysql)
    {


        if ($mysql !== null) {
            if ($mysql->connect_error) {
                echo '<b>1)Проблема з підключенням Бази даних. Номер помилки:</b>' . $mysql->connect_errno, '<br>';
                echo '<b>2)Проблема з підключенням Бази даних. Помилка:</b>' . $mysql->connect_error, '<br>';
            } else if ($mysql->error) {
                echo '<b>3)Проблема з підключенням Бази даних. Номер помилки:</b>' . $mysql->errno, '<br>';
                echo '<b>4)Проблема з підключенням Бази даних. Помилка:</b>' . $mysql->error, '<br>';
                echo '<b>5)Проблема з підключенням Бази даних. Номер помилки:</b> . $mysql->error_list', '<br>';
            } else {
                echo '<b>Connect Baza - OK!</b>', '<br>';
            }
        } else {
            echo 'ERROR. Перевірка підключення бази непройдена!';
        }
    }


}

?>