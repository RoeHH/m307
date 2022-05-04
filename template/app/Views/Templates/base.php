<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <!-- <base ...>: Relative urls start at index.php's directory -->
    <base href="<?= dirname($_SERVER['SCRIPT_NAME']); ?>/" />
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/header.css">
    <?php
    foreach ($stylesheets as $stylesheet) {
        echo '<link rel="stylesheet" href="public/css/' . $stylesheet . '.css">';
    }
    ?>
</head>

<body>
    
    <?php require 'app/Views/Templates/header.php'; ?>

    <div class="container">

        <?php require 'app/Views/Pages/' . $page . '.view.php'; ?>

    </div>
    
    <script src="public/js/global.js"></script>
</body>

</html>