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

    // Check if account exist
    public function check() {
        $this->view->form_check();
    }

    // Check if account exist
    public function sendCheck() {
        $this->model->sendCheck();
    }

    // Login
    public function login() {
        $this->view->form_login();
    }

    // Login
    public function register() {
        $this->view->form_register();
    }

    public function exec() {
        $this->view->view();
    }
}