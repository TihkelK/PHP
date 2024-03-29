<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Harjutus 10</h1>

        <ul>
            <li><a href="PHP10.php?id=1">Dokument 1</a></li>
            <li><a href="PHP10.php?id=2">Dokument 2</a></li>
            <li><a href="PHP10.php?id=3">Dokument 3</a></li>
            <li><a href="PHP10.php?id=4">Dokument 4</a></li>
        </ul>

        <?php
        /*
        // Ülesanne 10
        // Mihkel Kuusemäe
        // 12.02.24
        */

        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            $filename = "D$id.txt";
            if (file_exists($filename)) {
                $content = file_get_contents($filename);
                echo nl2br($content);
            } else {
                echo "Dokument puudub!";
            }
        } else {
            echo "Viga!";
        }

        ?>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>