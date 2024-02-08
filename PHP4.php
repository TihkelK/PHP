<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    
</head>
<body>
    <div class="container">
        <h1>Harjutus 4</h1>

        <form action="#" method="get">
            <label for="arv1">Arv 1</label>
            <input type="number" name="arv1" id="arv1"><br>
            <label for="arv2">Arv 2</label>
            <input type="number" name="arv2" id="arv2"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta">
        </form>



        <?php
        /*
        // Ülesanne 4
        // Mihkel Kuusemäe
        // 05.02.24
        */

       
        if(!empty($_GET['arv1']) && !empty($_GET['arv2'])){
            $arv1 = $_GET['arv1'];
            $arv2 = $_GET['arv2'];
            $jaga = $arv1 / $arv2;
            
            echo "$arv1 / $arv2 = $jaga";
        }
        ?>

        <h2>Vanus</h2>
        
        <form action="#" method="get">
            <label for="vanus1">Vanus 1</label>
            <input type="number" name="vanus1" id="vanus1"><br>
            <label for="vanus2">Vanus 2</label>
            <input type="number" name="vanus2" id="vanus2"><br>
            <input type="submit" class="btn btn-success my-2" value="Leia vanus">
        </form>
        <?php
        if(!empty($_GET['vanus1']) && !empty($_GET['vanus1'])){
            $v1 = $_GET['vanus1'];
            $v2 = $_GET['vanus2'];

            if ($v1 > $v2){
                echo "$v1 on vanem kui $v2";
            }
            elseif ($v1 < $v2){
                echo "$v2 on vanem kui $v1";
            }
            else "SISESTA VANUSED!";
        }
        ?>


        <h2>Ristkülik või ruut</h2>

        <form action="#" method="get">
            <label for="kylg1">Külg 1</label>
            <input type="number" name="kylg1" id="kylg1"><br>
            <label for="kylg2">Külg 2</label>
            <input type="number" name="kylg2" id="kylg2"><br>
            <input type="submit" class="btn btn-success my-2" value="Ristkülik/Ruut">
        </form>
        <?php
        if(!empty($_GET['kylg1']) && !empty($_GET['kylg2'])){
            $k1 = $_GET['kylg1'];
            $k2 = $_GET['kylg2'];

            if ($k1 == $k2){
                echo "Ruut";
            }
            else echo "Ristkülik";
        }
        ?>

        <h2>Ristkülik või ruut II</h2>

        <form action="#" method="get">
            <label for="kylg11">Külg 1</label>
            <input type="number" name="kylg11" id="kylg11"><br>
            <label for="kylg22">Külg 2</label>
            <input type="number" name="kylg22" id="kylg22"><br>
            <input type="submit" class="btn btn-success my-2" value="Ristkülik/Ruut">
        </form>
        <?php
        if(!empty($_GET['kylg11']) && !empty($_GET['kylg22'])){
            $k11 = $_GET['kylg11'];
            $k22 = $_GET['kylg22'];

            if ($k11 == $k22){
                echo "Ruut";
                echo "<img src=\"https://lh3.googleusercontent.com/proxy/zW7z7ntNN_ZMi3_cYBx7UBz21G92Xf0DjyegWxDgU7jVReANd5KRMwOJi522vKwfp9jZLnNmSy5zVpZsSmvonSZ4TQvP_3Q\">";
            }
            else{
                echo "Ristkülik";
                echo "<img src=\"https://lh3.googleusercontent.com/proxy/KbwkIdnmAMPHRC1dnyiNZ47jxm9y5s8iUZWMbN4Mlk5kA5ttdO-WkMZ1RDhz5VIPGq1I-Twq7M9bt__rfDLPz09Bsjk9OsQ\">";
            }
        }
        ?>

        <h2>Juubel</h2>

        <form action="#" method="get">
            <label for="aasta">Sünniaasta</label>
            <input type="number" name="aasta" id="aasta"><br>
            <input type="submit" class="btn btn-success my-2" value="Leia juubel">
        </form>
        <?php
        if(!empty($_GET['aasta'])){
            $a = $_GET['aasta'];
            $hetkeaasta = date("Y");
            if ($hetkeaasta-$a % 5 == 0){
                echo "juubel!<br>";
            } else {
                echo "Ei ole juubel!<br>";
            }
        }
        ?>

        <h2>Hindamine</h2>

        <form action="#" method="get">
            <label for="punktid">Sissesta punktid</label>
            <input type="number" name="punktid" id="punktid"><br>
            <input type="submit" class="btn btn-success my-2" value="Anna hinne">
        </form>
        <?php
        if(!empty($_GET['punktid'])){
            $p = $_GET['punktid'];
            if ($p > 10){
                echo "SUPER!";
            }
            elseif ($p >= 5 && $p < 10){
                echo "TEHTUD!";
            }
            elseif ($p < 5){
                echo "KASIN!";
            }
            else echo "SISESTA OMA PUNKTID!";
        }

        ?>




    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>