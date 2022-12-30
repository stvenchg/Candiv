<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candiv: Suivi de candidature</title>
    <link rel="stylesheet" href="Assets/css/style.css">
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