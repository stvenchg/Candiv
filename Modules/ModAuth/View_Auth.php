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

        if (!isset($_SESSION['login'])) {
            echo '
        <div class="auth">
            <div class="page-title">
                <h1>Saisissez votre adresse e-mail</h1>
                <p>Nous vérifierons que vous avez déjà un compte, et dans le cas contraire, nous vous aiderons à en créer un.</p>
            </div>
            <div id="auth-form" class="auth-form">
                <form action="./?module=auth&action=sendRegister" method="POST">     
                    <label>Adresse e-mail</label>
                    <input type="email" name="email" id="email" placeholder="steven@exemple.com">

                    <button class="login-button">Continuer</button>
                </form>
            </div>
        </div>';
        } else {
        }
    }
}