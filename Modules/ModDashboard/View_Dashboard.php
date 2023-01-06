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

            global $title;
            $title ='Tableau de bord - Candiv';

            echo '<h1>Bonjour, '. 'Steven' .' !</h1>
            
            <p>Vous retrouverez ici les statistiques liées à vos candidatures et votre utilisation de Candiv.</p>';
        }
    }
}