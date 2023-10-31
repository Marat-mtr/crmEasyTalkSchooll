<?php


class Common extends Controller {


    public function __construct() {
        echo '<br> - require class Common, actions: __construct';
    }


    
    public function index() {

        echo '<br> - require class Common, action: index';

        echo '<br> <a href="http://Talkschooll/crm">CRM</a>';
    }



    public function notFound() {

        $this->index();
        echo '<br> - require class Common, action: notFound';
        echo '<br> Некоректне посилання!';


    }









}

?>