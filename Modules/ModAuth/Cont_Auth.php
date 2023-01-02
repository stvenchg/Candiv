<?php

require_once('Model_Auth.php');
require_once('View_Auth.php');

class ContAuth 
{
    private $view;
    private $model;
    private $action;

    public function __construct() 
    {
        $this->view = new ViewAuth();
        $this->model = new ModelAuth();
        $this->action = isset($_GET['action']) ? $_GET['action'] : "check";
    }

    public function getAction() {
        return $this->action;
    }

    // Register
    public function check() {
        $this->view->form_check();
    }

    public function exec() {
        $this->view->view();
    }
}