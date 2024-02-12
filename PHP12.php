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
        <h1>Harjutus 12</h1>

        <h2>Sõiduaeg</h2>
        
        <form action="#" method="get">
            <label for="start">Stardi aeg (hh:mm):</label>
            <input type="text" name="start" id="start"><br>
            <label for="lopp">Lopp aeg (hh:mm):</label>
            <input type="text" name="lopp" id="lopp"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta">
        </form>
        <?php
        /*
        // Ülesanne 12
        // Mihkel Kuusemäe
        // 12.02.24
        */
        if(!empty($_GET['start']) && !empty($_GET['lopp'])){
            $s = $_GET["start"];
            $l = $_GET["lopp"];


        }
        if (empty($s) || empty($l)){
            echo "Täida mõlemad väljad!";
        }
        else{
            $ss = explode(":", $s);
            $ll = explode(":", $l);
            $sm = $ss[0] * 60 + $ss[1];
            $lm = $ll[0] * 60 + $ll[1];

            $tm = ($lm - $sm + 24 * 60) % (24 * 60);
            $t = floor($tm / 60);
            $m = $tm % 60;

            echo "Sõiduaeg: $t tundi ja $m minutit.";
        }
        ?>

        <hr>

        <h2>Palkade võrdlus</h2>
        
        <?php
        $fail = "tootajad.csv";
        $mp = 0;
        $np = 0;
        $ma = 0;
        $na = 0;
        $maxm = 0;
        $maxn = 0;

        $minu_csv = fopen($fail, 'r') or die('Ei leia faili!');
        while(!feof($minu_csv)){
        $rida = fgetcsv($minu_csv, filesize($fail),';');

        if ($rida[1] == "m") {
            $mp += $rida[2];
            $ma++;
            $maxm = max($maxm, $rida[2]);
        }
        else{
            $np += $rida[2];
            $na++;
            $maxn = max($maxn, $rida[2]);
        }
        }
        fclose($minu_csv);

        $keskm = $ma > 0 ? round($mp / $ma) : 0;
        $keskn = $na > 0 ? round($np / $na) : 0;

        echo "Meeste keskmine: $keskm<br>Naiste keskmine: $keskn<br>";
        echo "Meeste suurim: $maxm<br>Naiste suurim: $maxn";
        ?>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>