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
        $this->view = 'cc';
    }

    public function view()
    {
        echo $this->view;
    }
}