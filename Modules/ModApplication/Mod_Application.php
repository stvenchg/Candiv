<?php

require_once "Cont_Application.php";
include_once "PDOConnection.php";

class ModApplication extends PDOConnection
{
    private $controller;

    public function __construct()
    {
        $this->controller = new ContApplication();

        switch ($this->controller->getAction()) 
        {
            case "list":
                $this->controller->list();
            break;
        }

        $this->controller->exec();
    }
}