<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php global $title; echo isset($title) ? $title : 'Candiv - Suivi de candidature' ?></title>
    <link rel="stylesheet" href="Assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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
    </main>

    <footer class="footer">
        <?php
        $controller->footer();
        ?>
    </footer>

    <script src="Assets/js/script.js"></script>
</body>

</html>