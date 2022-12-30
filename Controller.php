<?php

require_once("GenericView.php");

require_once("Components/CompNav/Comp_Nav.php");
require_once("Components/CompFooter/Comp_Footer.php");

class Controller
{

    private $view;
    private $module;

    public function __construct()
    {
        $this->view = new GenericView();
        $this->module = isset($_GET['module']) ? $_GET['module'] : "landing";
    }

    public function nav()
    {
        new CompNav();
    }

    public function footer()
    {
        new CompFooter();
    }

    public function exec()
    {
        switch ($this->module) {
            case 'landing':
                new ModLanding();
            break;
            case 'auth':
                new ModAuth();
            break;
            default :
                die("Le module demandé n'existe pas.");
            break;
        }
    }
}