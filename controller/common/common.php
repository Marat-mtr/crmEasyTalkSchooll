<?php


class Common extends Controller {


    public function __construct() {
        echo ' - require class Common, actions: __construct';
    }


    
    public function index() {
        
    }



    public function notFound() {

        $this->index();
        echo '<br> Некоректне посилання!';
        
    }








}

?>