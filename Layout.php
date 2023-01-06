<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php global $title;
            echo isset($title) ? $title : 'Candiv - Suivi de candidature' ?></title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="Assets/js/topbar.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <header>
        <?php
        $controller = new Controller;
        $controller->nav();
        ?>
    </header>

    <main>
        <?php
        global $view;
        echo $view;
        ?>

        <div class="menu">
            <h3>Steven Ching<br><span>Développeur web</span></h3>
            <ul>
                <li><i class="fa-regular fa-user"></i> <a href="#">Mon profil</a></li>
                <li><i class="fa-regular fa-inbox"></i> <a href="#">Boîte de réception</a></li>
                <li><i class="fa-regular fa-gear"></i> <a href="#">Paramètres</a></li>
                <li><i class="fa-regular fa-right-from-bracket"></i> <a href="#">Se déconnecter</a></li>
            </ul>
        </div>
    </main>

    <footer class="footer">
        <?php
        $controller->footer();
        ?>
    </footer>

    <script src="Assets/js/script.js"></script>
</body>

</html>