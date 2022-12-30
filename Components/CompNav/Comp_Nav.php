<?php

require_once("Components/CompNav/Cont_Nav.php");

class CompNav
{

    public function __construct()
    {
        $controller = new ContNav();
        $controller->exec();
    }
}