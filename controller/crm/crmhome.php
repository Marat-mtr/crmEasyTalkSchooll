<?php

class CrmHome extends Controller {


    public function __construct() {
        echo '<br> - require class CrmHome. action: construct';

    }



    public function index() {
        echo '<br> - require class CrmHome, action: index';
    }



    public function notFound () {

        $this->index();
        echo '<br> Некоректне посилання! (crmHome)';

    }










}
?>