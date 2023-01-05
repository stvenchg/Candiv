<?php

require_once("GenericView.php");
require_once("Model_Landing.php");

class ViewLanding extends GenericView
{

    public function __construct()
    {
        parent::__construct();
    }

    public function sitePresentation()
    {

        echo 'Bienvenue sur Candiv.';
    }
}