<?php

require_once("GenericView.php");

class ViewNav extends GenericView
{
    private $view;

    public function __construct()
    {
        parent::__construct();
    }

    public function nav()
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
                    <a href="">Présentation</a>
                </li>
                <li>
                    <a href="./?module=auth" class="active">Espace utilisateur</a>
                </li>
            </ul>
        </nav>';
    }

    public function view()
    {
        echo $this->view;
    }
}