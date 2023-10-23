<?php

class configBD
{
    public static function constantsBD()
    {
        // DB
        define('DB_DRIVER', 'mysqli');
        define('DB_HOSTNAME', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_DATABASE', 'crmeasytalk');
        define('DB_PORT', '3306');
        define('DB_PREFIX', 'est_');
    }

}