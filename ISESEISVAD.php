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
        <h1>ISESEISVAD</h1>

        <h2>LIHTNE TEKST</h2>

        <?php
        echo "Juhan Liiv, \"Ääremärkused\"";
        ?>

        <hr>

        <h2>INTRESS</h2>

        <?php
        $raha = 2000;
        $intress = 2;
        $a = 5;
        $lsum = $raha * pow(1 + ($intress / 100), $a);
        echo "Lõppusumma 5 aasta pärast on $lsum";
        ?>

        <hr>

        <h2>TÄRNID</h2>

        <?php
        for ($i = 1; $i <= 100; $i++){
            echo '* ';
            if ($i % 10 == 0){
                echo "<br>";
            }
        }
        ?>
        
        <hr>

        <h2>ISIKUKOOD</h2>
        <form action="#" method="get">
            <label for="kood">Sisesta Isikukood:</label>
            <input type="text" name="kood" id="kood"><br>
            <input type="submit" class="btn btn-success my-2" value="Vali">
        </form>

        <?php
        function isikukood($kood){
            $pikkus = strlen($kood);
            if ($pikkus == 11){
                $es_nr = substr($kood, 0, 1);
                $sugu = ($es_nr % 2 == 0)?"Naine":"Mees";

                $aasta = substr($kood, 1, 2);

                if ($aasta >= 22) {
                    $aasta = "19" . $aasta;
                } else {
                    $aasta = "20" . $aasta;
                }
                echo "Õige pikkus!<br>Sugu: $sugu<br>Sünniaasta: $aasta";
            }
            else{
                echo "Vale pikkus!";
            }

            $es_nr = substr($kood, 0, 1);
            $sugu = ($es_nr % 2 == 0)?"Naine":"Mees";
        }

        if(!empty($_GET['kood'])){
            $k = $_GET["kood"];

            isikukood($k);
        }
        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>