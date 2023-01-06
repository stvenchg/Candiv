<?php

require_once("Components/CompNav/View_Nav.php");
require_once("Components/CompNav/Model_Nav.php");

class ContNav
{

    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new ViewNav();
        $this->model = new ModelNav();
    }

    public function exec()
    {

        // Must be moved into correct class
        if (isset($_SESSION['login'])) {
            $this->view->nav_logged();
        }
        else {
            $this->view->nav_default();
        }

        $this->view->view();
    }
}