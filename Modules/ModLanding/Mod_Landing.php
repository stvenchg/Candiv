<?php

require_once "Cont_Landing.php";
include_once "PDOConnection.php";

class ModLanding extends PDOConnection
{
    private $controller;

    public function __construct()
    {
        $this->controller = new ContLanding();

        switch ($this->controller->getAction()) 
        {
            case "main":
                $this->controller->main();
            break;
        }

        $this->controller->exec();
    }
}