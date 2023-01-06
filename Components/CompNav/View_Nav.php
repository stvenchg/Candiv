<?php

require_once("GenericView.php");

class ViewNav extends GenericView
{
    private $view;

    public function __construct()
    {
        parent::__construct();
    }

    public function nav_default()
    {
        $this->view = '
        
        <div class="nav-logo"><a href="./">Candiv.</a></div>

        <div class="nav-hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <nav class="navbar">
            <ul>
                <li>
                    <a href="./?module=auth">Se connecter</a>
                </li>
                <li>
                    <a href="./?module=auth" class="active">S\'inscrire</a>
                </li>
            </ul>
        </nav>';
    }

    public function nav_logged()
    {
        $this->view = '
        
        <div class="nav-logo"><a href="./">Candiv.</a></div>

        <div class="nav-hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <nav class="navbar">
            <ul>
                <li>
                    <a id="dashboard" href="./?module=dashboard"><i class="fa-regular fa-grid-2"></i> Tableau de bord</a>
                </li>
                <li>
                    <a id="application" href="./?module=application"><i class="fa-regular fa-paper-plane"></i> Mes candidatures</a>
                </li>
                <li>
                    <a id="assistance" href="./?module=dashboard"><i class="fa-regular fa-circle-question"></i> Assistance</a>
                </li>
                <li>
                    <a id="" href="./?module=dashboard" class="active account-mobile-button">'. $_SESSION['login'] .'</a>
                </li>
                <li>
                    <div class="account-menu">
                        <div class="account-button"></div>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </li>
            </ul>
        </nav>';
    }

    public function view()
    {
        echo $this->view;
    }
}