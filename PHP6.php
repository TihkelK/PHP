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
        // Ülesanne 1
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
        $tarnid = array("*","*","*","*","*","*","*","*","*","*",);
        echo "**********";
        foreach($tarnid as $tarn){
            echo $tarn."<br>";
        }
        ?>

        <h2>Ruut</h2>
        <form action="#" method="get">
            <label for="tarn">Firma nimi</label>
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



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>