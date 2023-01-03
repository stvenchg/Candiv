<?php

require_once "Cont_Auth.php";
include_once "PDOConnection.php";

class ModAuth extends PDOConnection
{
    private $controller;

    public function __construct()
    {
        $this->controller = new ContAuth();

        switch ($this->controller->getAction()) 
        {
            case "check":
                $this->controller->check();
            break;
            case "sendCheck":
                $this->controller->sendCheck();
            break;
            case "login":
                $this->controller->login();
            break;
            case "sendLogin":
                $this->controller->sendLogin();
            break;
            case "register":
                $this->controller->register();
            break;
            case "sendRegister":
                $this->controller->sendRegister();
            break;
        }

        $this->controller->exec();
    }
}