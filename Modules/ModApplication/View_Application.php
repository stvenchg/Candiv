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
                <h1>Mes candidatures (8)</h1>
                <div>
                    <div class="application-searchbar">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" name="query" id="application-search-query" placeholder="Rechercher par entreprise, date ou statut...">
                    </div>
                    <button class="button" id="registerButton" style="width: 150px"><i class="fa-solid fa-plus"></i>Ajouter</button>
                </div>
            </div>

            <div class="filters-box">
                <nav>
                    <ul>
                        <li>
                            <span class="active">Tout</span>
                        </li>
                        <li>
                            <span class="">Attention requise</span>
                        </li>
                        <li>
                            <span class="">Envoyée</span>
                        </li>
                        <li>
                            <span class="">Acceptée</span>
                        </li>
                        <li>
                            <span class="">Rejetée</span>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="main-content">
            <div class="application-list">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Entreprise et mission</td>
                        <td>Moyen de transmission</td>
                        <td>Jobboard</td>
                        <td>Date d\'envoi</td>
                        <td>Statut</td>
                        <td>Durée</td>
                        <td>Lieu</td>
                        <td>Rémunération</td>
                        <td>Information complémentaire</td>
                        <td></td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="enterprise">
                            <img src="Assets/img/microsoft.png" alt="">
                            <div class="enterprise-desc">
                                <h5>Microsoft</h5>
                                <p>Développeur site internet CSS / PHP / Symfony</p>
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

                        <td class="application-duration">
                            <p>2 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Paris (75)</p>
                        </td>

                        <td class="application-paid">
                            <p>750€/mois</p>
                        </td>

                        <td class="application-note">
                            <p>8 semaines</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="Assets/img/facebook.png" alt="">
                            <div class="enterprise-desc">
                                <h5>Facebook</h5>
                                <p>Développeur Web junior</p>
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
                            <p class="status accept">Acceptée</p>
                        </td>

                        <td class="application-duration">
                            <p>3 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Marseille (13)</p>
                        </td>

                        <td class="application-paid">
                            <p>850€/mois</p>
                        </td>

                        <td class="application-note">
                            <p></p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="Assets/img/apple.png" alt="">
                            <div class="enterprise-desc">
                                <h5>Apple</h5>
                                <p>Développeur Web PHP</p>
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

                        <td class="application-duration">
                            <p>2 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Paris (75)</p>
                        </td>

                        <td class="application-paid">
                            <p>990€/mois</p>
                        </td>

                        <td class="application-note">
                            <p>Bonne rémunération</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="https://logo.clearbit.com/instagram.com" alt="">
                            <div class="enterprise-desc">
                                <h5>Instagram</h5>
                                <p>Développeur Full Stack</p>
                            </div>
                        </td>

                        <td class="application-method">
                            <div class="application-method-desc">
                                <h5>Main propre</h5>
                                <p>Recommandation</p>
                            </div>
                        </td>

                        <td class="application-platform">
                            <div class="application-platform-desc">
                                <p>/</p>
                            </div>
                        </td>

                        <td class="application-date">
                            <p>14/12/2022</p>
                        </td>

                        <td class="application-status">
                            <p class="status rejected">Rejetée</p>
                        </td>

                        <td class="application-duration">
                            <p>3 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Montreuil (93)</p>
                        </td>

                        <td class="application-paid">
                            <p>630€/mois</p>
                        </td>

                        <td class="application-note">
                            <p>Beaucoup d\'avantages</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="https://logo.clearbit.com/spotify.com" alt="">
                            <div class="enterprise-desc">
                                <h5>Spotify</h5>
                                <p>Support Informatique</p>
                            </div>
                        </td>

                        <td class="application-method">
                            <div class="application-method-desc">
                                <h5>Internet</h5>
                            </div>
                        </td>

                        <td class="application-platform">
                            <div class="application-platform-desc">
                                <p>Site officiel</p>
                            </div>
                        </td>

                        <td class="application-date">
                            <p>10/12/2022</p>
                        </td>

                        <td class="application-status">
                            <p class="status rejected">Rejetée</p>
                        </td>

                        <td class="application-duration">
                            <p>2 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Paris (75)</p>
                        </td>

                        <td class="application-paid">
                            <p>750€/mois</p>
                        </td>

                        <td class="application-note">
                            <p>Stage intéressant</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="https://logo.clearbit.com/https://www.airfranceklm.com/" alt="">
                            <div class="enterprise-desc">
                                <h5>Air France-KLM</h5>
                                <p>Data Analyst</p>
                            </div>
                        </td>

                        <td class="application-method">
                            <div class="application-method-desc">
                                <h5>Internet</h5>
                            </div>
                        </td>

                        <td class="application-platform">
                            <div class="application-platform-desc">
                                <p>Site officiel</p>
                            </div>
                        </td>

                        <td class="application-date">
                            <p>02/12/2022</p>
                        </td>

                        <td class="application-status">
                            <p class="status rejected">Rejetée</p>
                        </td>

                        <td class="application-duration">
                            <p>2,5 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Paris (75)</p>
                        </td>

                        <td class="application-paid">
                            <p>750€/mois</p>
                        </td>

                        <td class="application-note">
                            <p>10 semaines minimum</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="https://logo.clearbit.com/ratp.fr" alt="">
                            <div class="enterprise-desc">
                                <h5>RATP</h5>
                                <p>Maintenance informatique et réseaux</p>
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
                            <p>02/12/2022</p>
                        </td>

                        <td class="application-status">
                            <p class="status rejected">Rejetée</p>
                        </td>

                        <td class="application-duration">
                            <p>2 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Paris (75)</p>
                        </td>

                        <td class="application-paid">
                            <p>1 070€/mois</p>
                        </td>

                        <td class="application-note">
                            <p>8 semaines minimum, bonne rémunération</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="enterprise">
                            <img src="https://logo.clearbit.com/amazon.fr" alt="">
                            <div class="enterprise-desc">
                                <h5>Amazon</h5>
                                <p>Technicien d\'Exploitation informatique</p>
                            </div>
                        </td>

                        <td class="application-method">
                            <div class="application-method-desc">
                                <h5>Internet</h5>
                            </div>
                        </td>

                        <td class="application-platform">
                            <div class="application-platform-desc">
                                <p>Site officiel</p>
                            </div>
                        </td>

                        <td class="application-date">
                            <p>01/12/2022</p>
                        </td>

                        <td class="application-status">
                            <p class="status rejected">Rejetée</p>
                        </td>

                        <td class="application-duration">
                            <p>2 mois</p>
                        </td>

                        <td class="application-location">
                            <p>Paris (75)</p>
                        </td>

                        <td class="application-paid">
                            <p>Non rémunéré</p>
                        </td>

                        <td class="application-note">
                            <p>En dernier recours</p>
                        </td>

                        <td class="action">
                            <div>
                                <button class="pill-button info"><i class="fa-regular fa-eye"></i></button>
                                <button class="pill-button"><i class="fa-regular fa-pen-to-square"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>

            <a href="https://clearbit.com" style="text-decoration:none; color: #495057; margin-top: 20px; width: 200px; font-size: 12px">Logos fournis par Clearbit</a>
            
            </div>';
        }
    }
}