<?php

require_once("GenericView.php");
require_once("Model_Dashboard.php");

class ViewDashboard extends GenericView
{

    public function __construct()
    {
        parent::__construct();
    }

    public function view_home()
    {
        if (isset($_SESSION['login'])) {
            echo 'Page uniquement accessible si connecté. <a href="./?module=auth&action=sendLogout">Se déconnecter<a/>';
        }
    }
}