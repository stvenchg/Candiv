<?php

require_once("GenericView.php");
require_once("Model_Auth.php");

class ViewAuth extends GenericView
{

    public function __construct()
    {
        parent::__construct();
    }

    public function form_check()
    {

        global $title;
        $title = 'S\'identifier sur Candiv';

        if (!isset($_SESSION['login'])) {
            echo '
        <div class="auth">
            <div class="page-title">
                <h1>Saisissez votre adresse e-mail</h1>
                <p>Nous vérifierons que vous avez déjà un compte, et dans le cas contraire, nous vous aiderons à en créer un.</p>
            </div>
            <div id="auth-form" class="auth-form">
                <form action="./?module=auth&action=sendCheck" method="POST">     
                    <label>Adresse e-mail</label>
                    <input type="email" name="email" id="email" placeholder="steven@exemple.com">

                    <button type="submit" class="login-button" id="checkButton" disabled>Continuer</button>
                </form>
            </div>
        </div>';
        } else {
            echo "Already connected!";
        }
    }

    public function form_register()
    {

        global $title;
        $title ='S\'inscrire sur Candiv';
        $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';

        if (!isset($_SESSION['login'])) {
            echo '
        <div class="auth animate__animated animate__fadeInRight">
            <div class="page-title">
                <h1>Créez votre compte</h1>
                <p>Il semblerait que vous n\'ayez pas encore de compte sur Candiv.<br>Merci de renseigner les informations ci-dessous afin de vous inscrire.</p>
            </div>
            <div id="auth-form" class="auth-form">
                <form action="./?module=auth&action=sendCheck" method="POST">

                    <label>Prénom</label>
                    <input type="text" name="firstname" id="firstname">

                    <label>Nom de famille</label>
                    <input type="text" name="lastname" id="lastname">
                
                    <label>Nom d\'utilisateur</label>
                    <input type="text" name="username" id="username">
                
                    <label>Adresse e-mail</label>
                    <input type="email" name="email" id="email" placeholder="steven@exemple.com" value="' . $email . '">

                    <label>Mot de passe</label>
                    <input type="password" name="password" id="password">

                    <label>Confirmation du mot de passe</label>
                    <input type="password" name="confirmpassword" id="confirmpassword">

                    <button class="login-button">Continuer</button>
                </form>
            </div>
            <div class="page-title">
                <p>Une erreur de saisie ? <a href="./?module=auth">Revenir en arrière</a>.</p>
            </div>
        </div>';
        } else {
            echo "Already connected!";
        }
    }

    public function form_login()
    {

        global $title;
        $title ='Se connecter sur Candiv';
        $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
        $disabled = isset($_GET['email']) ? "disabled" : '';

        if (!isset($_SESSION['login'])) {
            echo '
        <div class="auth animate__animated animate__fadeInRight">
            <div class="page-title">
                <h1>Heureux de vous revoir !</h1>
                <p>Saisissez votre mot de passe pour vous identifier.</p>
            </div>
            <div id="auth-form" class="auth-form">
                <form action="./?module=auth&action=sendCheck" method="POST">     
                    <label>Adresse e-mail</label>
                    <input type="email" name="email" id="email" placeholder="steven@exemple.com" value="' . $email . '" required '. $disabled .'>

                    <label>Mot de passe</label>
                    <input type="password" name="password" id="password" required>

                    <button class="login-button">Se connecter</button>
                </form>
            </div>
            <div class="page-title">
                <p>Ce n\'est pas vous ? <a href="./?module=auth">Revenir en arrière</a>.</p>
            </div>
        </div>';
        } else {
            echo "Already connected!";
        }
    }
}