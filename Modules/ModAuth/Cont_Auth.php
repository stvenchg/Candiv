<?php

require_once('Model_Auth.php');
require_once('View_Auth.php');

class ContAuth
{
    private $view;
    private $model;
    private $action;

    public function __construct()
    {
        $this->view = new ViewAuth();
        $this->model = new ModelAuth();
        $this->action = isset($_GET['action']) ? $_GET['action'] : "check";
    }

    public function getAction()
    {
        return $this->action;
    }

    // Check if account exist
    public function check()
    {
        $this->view->form_check();
    }

    // Check if account exist
    public function sendCheck()
    {
        $this->model->sendCheck();
    }

    // Login
    public function login()
    {
        $this->view->form_login();
    }

    // Register
    public function register()
    {
        $this->view->form_register();
    }

    public function sendRegister()
    {

        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_confirmation = htmlspecialchars($_POST['confirmpassword']);
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $errors = 0;
        $listErrors = "";

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($email) && isset($firstname) && isset($lastname) && isset($username) && isset($email) && isset($password) && isset($password_confirmation) && !(count(array_filter($_POST)) != count($_POST))) {

            if ($this->model->existEmail($email)) {
                $errors++;
                $listErrors .= "EMAIL_ALREADY_EXIST,";
            }

            if ($this->model->existusername($username)) {
                $errors++;
                $listErrors .=  "USERNAME_ALREADY_EXIST,";
            }

            if ($password != $password_confirmation) {
                $errors++;
                $listErrors .= "PASSWORD_DIFFERENT,";
            }

            if (strlen($username) < 5) {
                $errors++;
                $listErrors .= "USERNAME_TOO_SHORT,";
            }

            if (strlen($password) < 8) {
                $errors++;
                $listErrors .= "PASSWORD_TOO_SHORT,";
            }

            if (strlen($email) < 10) {
                $errors++;
                $listErrors .= "EMAIL_TOO_SHORT,";
            }


            if ($errors > 0) {
                header("Location: ./?module=auth&action=register&errors=$listErrors");
            } else if ($errors == 0) {
                $this->model->sendRegister($firstname, $lastname, $username, $email, $password_hashed);
            }
        }
    }

    public function exec()
    {
        $this->view->view();
    }
}
