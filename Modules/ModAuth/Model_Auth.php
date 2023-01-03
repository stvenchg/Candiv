<?php

require_once('PDOConnection.php');

class ModelAuth extends PDOConnection
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

    public function sendCheck()
    {
        $email = htmlspecialchars($_POST['email']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($email) && !empty($email)) {
            try {
                $stmtCheckIfExist = parent::$db->prepare("SELECT * FROM accounts WHERE email=:email");
                $stmtCheckIfExist->bindParam(':email', $email);
                $stmtCheckIfExist->execute();
                $countRowEmail = $stmtCheckIfExist->rowCount();

                if ($countRowEmail == 0) {
                    header("Location: ./?module=auth&action=register&email=$email");
                } else {
                    header("Location: ./?module=auth&action=login&email=$email");
                }
            } catch (Exception $e) {
                echo 'Erreur survenue : ',  $e->getMessage(), "\n";
            }
        }
    }

    public function sendRegister($firstname, $lastname, $username, $email, $password_hashed)
    {
        try {
            $stmtRegisterNewUser = parent::$db->prepare("INSERT INTO accounts(firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)");
            $stmtRegisterNewUser->bindParam(':firstname', $firstname);
            $stmtRegisterNewUser->bindParam(':lastname', $lastname);
            $stmtRegisterNewUser->bindParam(':username', $username);
            $stmtRegisterNewUser->bindParam(':email', $email);
            $stmtRegisterNewUser->bindParam(':password', $password_hashed);
            $stmtResult = $stmtRegisterNewUser->execute();

            if ($stmtResult) {
                echo "inscription validée";
            } else {
                echo "erreur lors de l'inscription";
            }
        } catch (Exception $e) {
            echo 'Erreur survenue : ',  $e->getMessage(), "\n";
        }
    }

    public function existEmail($email) {
        $stmtCountEmail = parent::$db->prepare("SELECT * FROM accounts WHERE email=:email");
        $stmtCountEmail->bindParam(':email', $email);
        $stmtCountEmail->execute();
        $countRowEmail = $stmtCountEmail->rowCount();

        if ($countRowEmail > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function existUsername($username) {
        $stmtCountUsername = parent::$db->prepare("SELECT * FROM accounts WHERE username=:username");
        $stmtCountUsername->bindParam(':username', $username);
        $stmtCountUsername->execute();
        $countRowUsername = $stmtCountUsername->rowCount();

        if ($countRowUsername > 0) {
            return true;
        } else {
            return false;
        }
    }
}
