<?php



class AdminHome extends Controller{

    public function __construct () {

        echo '<br> - require class AdminHome. action: __construct';
    }

    public function index () {

        echo '<br> - require class AdminHome. action: index';
    }

    public function notFound () {

        $this->index();
        echo '<br> - некоректне посилання! (AdminHome)';
    }

















}
?>