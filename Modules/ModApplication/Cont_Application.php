<?php

require_once('Model_Application.php');
require_once('View_Application.php');

class ContApplication 
{
    private $view;
    private $model;
    private $action;

    public function __construct() 
    {
        $this->view = new ViewApplication();
        $this->model = new ModelApplication();
        $this->action = isset($_GET['action']) ? $_GET['action'] : "list";
    }

    public function getAction() {
        return $this->action;
    }

    public function list() {
        $this->view->application_list();
    }

    public function exec() {
        $this->view->view();
    }
}