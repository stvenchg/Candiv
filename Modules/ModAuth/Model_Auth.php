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

    public function sendCheck() {
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
}