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
        <h1>Harjutus 6</h1>

        <h2>Genereeri</h2>
        <?php
        /*
        // Ülesanne 6
        // Mihkel Kuusemäe
        // 07.02.24
        */

        for ($i = 1; $i <= 100; $i++){
            echo $i.". ";

            if ($i % 10 == 0){
                echo "<br>";
            }
        }
        ?>

        <h2>Rida, Rida II</h2>

        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "*";
        }

        for ($i = 0; $i < 10; $i++) {
            echo "*<br>";
        }
        ?>

        <h2>Ruut</h2>
        <form action="#" method="get">
            <label for="tarn">Tärnide arv</label>
            <input type="text" name="tarn" id="tarn"><br>
            <input type="submit" class="btn btn-success my-2" value="Tärnide arv">
        </form>

        <?php
        if(!empty($_GET['tarn'])){
            $suurus = $_GET["tarn"];

            for ($i = 0; $i < $suurus; $i++){
                for ($j = 0; $j < $suurus; $j++){
                    echo "* ";
                }
                echo "<br>";
            }
        }
        ?>

        <h2>Kahanev</h2>

        <?php
        for ($i = 10; $i >= 1; $i--){
            if ($i % 2 == 0){
                echo $i . " ";
            }
        }

        ?>

        <h2>Kolmega jagunevad</h2>

        <?php
        for ($i = 1; $i <= 100; $i++){
            if ($i % 3 == 0){
                echo $i." ";
            }
        }
        ?>

        <h2>Massiivid ja tsüklid</h2>

        <?php
        $tydd = array("Aadu","Beedu","Ceedu");
        $poii = array("Deedu","Eedu","Feedu");

        foreach($tydd as $tyd){
            echo $tyd." ";
        }
        echo "<br>";

        foreach($poii as $poi){
            echo $poi." ";
        }
        ?>

        <h2>Massiivid ja tsüklid (Bonus)</h2>
        
        <?php
        $suvtyd = $tydd;
        $suvpoi = $poii;

        shuffle($suvtyd);
        shuffle($suvpoi);
        echo $suvtyd[0]." - ".$suvpoi[0]."<br>";

        ?>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>