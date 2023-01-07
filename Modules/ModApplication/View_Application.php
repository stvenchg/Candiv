<?php

require_once("GenericView.php");
require_once("Model_Application.php");

class ViewApplication extends GenericView
{

    public function __construct()
    {
        parent::__construct();
    }

    public function application_list()
    {
        if (isset($_SESSION['login'])) {

            global $title;
            $title ='Mes candidatures - Candiv';

            echo '
            <div class="main-top">
                <h1>Mes candidatures</h1>
                <button class="button" id="registerButton" style="width: 150px"><i class="fa-solid fa-plus"></i>Ajouter</button>
            </div>

            <br>
            <br>

            <div class="application-list">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Entreprise</td>
                        <td>Moyen de transmission</td>
                        <td>Jobboard</td>
                        <td>Date d\'envoi</td>
                        <td>Statut</td>
                        <td>Note additionnelle</td>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="enterprise">
                            <img src="Assets/img/microsoft.png" alt="">
                            <div class="enterprise-desc">
                                <h5>Microsoft</h5>
                                <p>https://www.microsoft.com/</p>
                            </div>
                        </td>

                        <td class="application-method">
                            <div class="application-method-desc">
                                <h5>Internet</h5>
                                <p>Recommandation</p>
                            </div>
                        </td>

                        <td class="application-platform">
                            <div class="application-platform-desc">
                                <p>Indeed</p>
                            </div>
                        </td>

                        <td class="application-date">
                            <p>07/01/2023</p>
                        </td>

                        <td class="application-status">
                            <p class="status sent">Envoyée</p>
                        </td>

                        <td class="application-note">
                            <p>8 semaines</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-solid fa-info"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="Assets/img/facebook.png" alt="">
                            <div class="enterprise-desc">
                                <h5>Facebook</h5>
                                <p>https://www.facebook.fr/</p>
                            </div>
                        </td>

                        <td class="application-method">
                            <div class="application-method-desc">
                                <h5>Internet</h5>
                            </div>
                        </td>

                        <td class="application-platform">
                            <div class="application-platform-desc">
                                <p>Jobteaser</p>
                            </div>
                        </td>

                        <td class="application-date">
                            <p>05/01/2023</p>
                        </td>

                        <td class="application-status">
                            <p class="status accept">Accepté</p>
                        </td>

                        <td class="application-note">
                            <p>12 semaines</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-solid fa-info"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="Assets/img/apple.png" alt="">
                            <div class="enterprise-desc">
                                <h5>Apple</h5>
                                <p>https://www.apple.com/</p>
                            </div>
                        </td>

                        <td class="application-method">
                            <div class="application-method-desc">
                                <h5>Internet</h5>
                                <p>Recommandation</p>
                            </div>
                        </td>

                        <td class="application-platform">
                            <div class="application-platform-desc">
                                <p>Site officiel</p>
                            </div>
                        </td>

                        <td class="application-date">
                            <p>16/12/2022</p>
                        </td>

                        <td class="application-status">
                            <p class="status again">Attention requise</p>
                        </td>

                        <td class="application-note">
                            <p>Bonne rémunération</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-solid fa-info"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>';
        }
    }
}