<?php

class CrmHome extends Controller {

    public $info = '45';


    public function __construct() {
        echo '<br> - require class CrmHome. action: construct';
        $this->load->controller('account/loginuser');

    }



    public function index() {
        echo '<br> - require class CrmHome, action: index';

        //$this->model('account/loginuser');
        //$this->load->model('account/loginuser');


    }



    public function notFound () {


        $this->index();
        echo '<br> Некоректне посилання! (crmHome)';

    }










}
?>