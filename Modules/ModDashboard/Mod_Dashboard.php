<?php

require_once "Cont_Dashboard.php";
include_once "PDOConnection.php";

class ModDashboard extends PDOConnection
{
    private $controller;

    public function __construct()
    {
        $this->controller = new ContDashboard();

        switch ($this->controller->getAction()) 
        {
            case "home":
                $this->controller->home();
            break;
        }

        $this->controller->exec();
    }
}