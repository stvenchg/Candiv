<?php

require_once("GenericView.php");
require_once("Model_Application.php");

class ViewApplication extends GenericView
{

    public function __construct()
    {
        parent::__construct();
    }

    public function application_list()
    {
        if (isset($_SESSION['login'])) {

            global $title;
            $title ='Mes candidatures - Candiv';

            echo '<h1>Mes candidatures</h1>
            
            <p>a.</p>';
        }
    }
}