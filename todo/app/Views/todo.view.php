<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Meine Seite</title>
    <!-- Set base for relative urls to the directory of index.php: -->
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
    <div class="container">
    
        <h1 class="welcome">Willkommen im 307-Framework!</h1>
        
        <?php
        foreach ($todos as $do){
            echo '<p>' . $do . '</p>';
        }
        ?>

        <form action="/add" method="post" >
            <input type="text" name="task" placeholder="Neue Aufgabe">
            <button type="submit">Hinzufügen</button>
        </form>

    </div>

    <script src="public/js/app.js"></script>
</body>
</html>
