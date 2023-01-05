<?php

require_once('Model_Dashboard.php');
require_once('View_Dashboard.php');

class ContDashboard 
{
    private $view;
    private $model;
    private $action;

    public function __construct() 
    {
        $this->view = new ViewDashboard();
        $this->model = new ModelDashboard();
        $this->action = isset($_GET['action']) ? $_GET['action'] : "home";
    }

    public function getAction() {
        return $this->action;
    }

    // Main page
    public function home() {
        $this->view->view_home();
    }

    public function exec() {
        $this->view->view();
    }
}