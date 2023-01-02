<?php

require_once('PDOConnection.php');

class ModelLanding extends PDOConnection
{
    public function __construct()
    {
    }

    public function getIP()
    {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getUA()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function sendRegister()
    {
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $passwordconfirm = htmlspecialchars($_POST['passwordconfirm']);
        $passwordhashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $tos = htmlspecialchars($_POST['tos']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && !empty($_POST['username'])) {
            try {
                $stmtCountUsername = parent::$db->prepare("SELECT * FROM User WHERE username=:username");
                $stmtCountUsername->bindParam(':username', $username);
                $stmtCountUsername->execute();
                $countRowUsername = $stmtCountUsername->rowCount();

                $stmtCountEmail = parent::$db->prepare("SELECT * FROM User WHERE email=:email");
                $stmtCountEmail->bindParam(':email', $email);
                $stmtCountEmail->execute();
                $countRowEmail = $stmtCountEmail->rowCount();

                if ($countRowUsername >= 1 && $countRowEmail >= 1) {
                    $this->viewAlert->usernameAndPasswordAlreadyUsed();
                } else if ($countRowEmail >= 1) {
                    $this->viewAlert->emailAlreadyUsed();
                } else if ($countRowUsername >= 1) {
                    $this->viewAlert->usernameAlreadyUsed();
                } else if (strlen($username) < 4) {
                    $this->viewAlert->usernameTooShort();
                } else if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]./', $username)) {
                    $this->viewAlert->specialCharsInUsername();
                } /*else if (!str_contains($email, '@') || !str_contains($email, '.') || preg_match('/[\'^£$%&*()}{#~?><>,|=_+¬-]/', $email)) {
                    $this->viewAlert->invalidEmail();
                } */else if ($password !== $passwordconfirm) {
                    $this->viewAlert->passwordDifferents();
                } else if (strlen($password) < 6) {
                    $this->viewAlert->passwordTooShort();
                } else if ($tos != 1) {
                    $this->viewAlert->userDidNotAcceptedTOS();
                } else {
                    
                    // Insertion des informations concernant le compte de l'utilisateur
                    $stmtRegisterNewUser = parent::$db->prepare("INSERT INTO User(username, email, password, idRole, avatar_file, banner_file, adult, color, show_setup, private) VALUES (:username, :email, :password, 2, '1.png', '1.png', false, 'white', true, false)");
                    $stmtRegisterNewUser->bindParam(':username', $username);
                    $stmtRegisterNewUser->bindParam(':email', $email);
                    $stmtRegisterNewUser->bindParam(':password', $passwordhashed);
                    $stmtResult = $stmtRegisterNewUser->execute();

                    if ($stmtResult) {
                        $this->viewAlert->registrationSuccessful();
                        $this->sendMail->sendWelcomeEmail($username, $email);
                    } else {
                        $this->viewAlert->unknownErrorWhileRegistration();
                    }
                }
            } catch (Exception $e) {
                echo 'Erreur survenue : ',  $e->getMessage(), "\n";
            }
        }
        else {
            $this->viewAlert->invalidRequest();
        }
    }
}