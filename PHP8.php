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
        <h1>Harjutus 8</h1>

        <?php
        /*
        // Ülesanne 8
        // Mihkel Kuusemäe
        // 08.02.24
        */

        $kp = date("d.m.Y H:i");
        echo $kp;
        ?>

        <hr>

        <form action="#" method="get">
            <label for="aasta">Sisesta sünniaasta:</label>
            <input type="text" name="aasta" id="aasta"><br>
            <input type="submit" class="btn btn-success my-2" value="Vali">
        </form>
        <?php
        if(!empty($_GET['aasta'])){
            $a = $_GET["aasta"];
            $pa = date("Y");
            $vanus = $pa - $a;
            
            echo "Vanus on: $vanus";
        }
        ?>

        <hr>

        <?php
        $pa = date("Y");
        $ka = strtotime("$pa-09-01");
        $kl = strtotime(($pa + 1) . "-05-31");
        $kooli_lopp = ceil(($kl - time()) / (60 * 60 * 24));

        echo "Kooliaasat loppuni $kooli_lopp päeva!"
        ?>

        <hr>

        <?php
        $pk = date("n");

        if ($pk >= 3 && $pk <= 5){
            echo "<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/Fr%C3%BChling_bl%C3%BChender_Kirschenbaum.jpg/640px-Fr%C3%BChling_bl%C3%BChender_Kirschenbaum.jpg\" width=\"300\" height=\"200\">";
        }
        elseif ($pk >= 3 && $pk <= 8){
            echo "<img src=\"https://www.taskutark.ee/wp-content/uploads/2015/01/73.jpg\" width=\"300\" height=\"200\">";
        }
        elseif (($pk >= 3 && $pk <= 11)){
            echo "<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Mt-St-Greg-RueEcureuils-3.jpg/800px-Mt-St-Greg-RueEcureuils-3.jpg\" width=\"300\" height=\"200\">";
        }
        else{
            echo "<img src=\"https://upload.wikimedia.org/wikipedia/commons/a/ae/Pillapalu_metsasiht.jpg\" width=\"300\" height=\"200\">";
        }
        ?>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>