<?php

require_once('Model_Landing.php');
require_once('View_Landing.php');

class ContLanding 
{
    private $view;
    private $model;
    private $action;

    public function __construct() 
    {
        $this->view = new ViewLanding();
        $this->model = new ModelLanding();
        $this->action = isset($_GET['action']) ? $_GET['action'] : "main";
    }

    public function getAction() {
        return $this->action;
    }

    // Main page
    public function main() {
        $this->view->sitePresentation();
    }

    public function exec() {
        $this->view->view();
    }
}