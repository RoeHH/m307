<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://gitcdn.link/cdn/IctBerufsbildungZentralschweiz/modul-307/master/.source/styles.css' rel="stylesheet">
    <title>Pixel</title>
</head>
<body>
    <table>
    <?php
        $x = $_GET['x'] ?? 4;
        $y = $_GET['y'] ?? 4;
        $pixels = $_GET['pixels'] ?? [""];
        for($i = 0; $i < $x; $i++) {
            echo "<tr class='pixel'>";
            for($j = 0; $j < $y; $j++) {
                if(in_array($i . "|" . $j, $pixels)) {
                    echo "<td class='pixel mark''></td>";
                } else {
                    echo "<td class='pixel'></td>";
                }
            }
            echo "</tr>";
        }
    ?>
    </table>    
</body>
</html>