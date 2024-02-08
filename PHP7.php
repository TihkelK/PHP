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
        <h1>Harjutus 7</h1>

        <h2>Tervitus</h2>
        
        <?php
        /*
        // Ülesanne 7
        // Mihkel Kuusemäe
        // 07.02.24
        */

        function tervita($nimi){
            echo "Tere $nimi !";
        }

        tervita("Päiksekesekene");
        ?>

        <h2>Liitu uudiskirjaga</h2>
        
        <?php
        function vorm() {
            echo '
            <form action="#" method="get">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Sisestage oma esmail" required><br>
                <input type="submit" class="btn btn-success my-2" value="Liitu uudiskirjaga">
            </form>
            ';
        }
    
        vorm();


        function kasvaikeseks(){

        }
        ?>

        <h2>Kasutajanimi ja email</h2>
        
        <form action="#" method="get">
            <label for="nimi">Kasutajanimi:</label>
            <input type="text" name="nimi" id="nimi"><br>
            <input type="submit" class="btn btn-success my-2" value="Vali kasutajanimi">
        </form>

        <?php
        function nimi_vaikeseks($nimi){
            $vaike_n = strtolower($nimi);
            $meil = "$vaike_n@hkhk.edu.ee";
            $kood = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 7);


            echo "$vaike_n<br>";
            echo "$meil<br>";
            echo "$kood<br>";
        }

        if(!empty($_GET['nimi'])){
            $n = $_GET["nimi"];

            nimi_vaikeseks($n);
            
        }
        ?>

        
        <h2>Arvud</h2>
        
        <form action="#" method="get">
            <label for="algus">Vali algus arv:</label>
            <input type="text" name="algus" id="algus"><br>
            <label for="lopp">Vali lõpu arv:</label>
            <input type="text" name="lopp" id="lopp"><br>
            <input type="submit" class="btn btn-success my-2" value="Vali arvud">
        </form>
        
        
        <?php
        function anna_arvud($algus, $lopp){
            if ($algus > $lopp){
                echo "Vigaaaa";
            }
            else {
                $arvud = range($algus, $lopp);
                echo implode(" ", $arvud);   
            }
        }

        if(!empty($_GET['algus']) && !empty($_GET['lopp'])){
            $a = $_GET["algus"];
            $l = $_GET["lopp"];

            anna_arvud($a, $l);
        }
        ?>

        <h2>Ristküliku pindala</h2>
        
        <form action="#" method="get">
            <label for="a">Ristküliku külg a:</label>
            <input type="text" name="a" id="a"><br>
            <label for="b">Ristküliku külg b:</label>
            <input type="text" name="b" id="b"><br>
            <input type="submit" class="btn btn-success my-2" value="Vali">
        </form>

        <?php
        function r_pindala($kylg_a, $kylg_b){
            $S = $kylg_a * $kylg_b;

            echo "Ristküliku pindala on: $S";
        }

        if(!empty($_GET['a']) && !empty($_GET['b'])){
            $a = $_GET["a"];
            $b = $_GET["b"];

            r_pindala($a, $b);
        }
        ?>

        <h2>Isiskukood</h2>
        
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

                $paev = substr($kood, 5, 2);
                $kuu = substr($kood, 3, 2);
                $aasta = substr($kood, 1, 2);

                if ($aasta >= 22) {
                    $aasta = "19" . $aasta;
                } else {
                    $aasta = "20" . $aasta;
                }
                echo "Õige pikkus!<br>Sugu: $sugu<br>Sünniaeg: $paev.$kuu.$aasta";
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

        <h2>Head mõtted</h2>
        
        <?php
        function lause(){
            $alus = ["Mees", "Mario", "Rain"];
            $oeldis = ["sööb", "lööb", "paitab"];
            $sihitis = ["Kollast last", "musta meest", "valget naist"];

            echo $alus[array_rand($alus)]." ".$oeldis[array_rand($oeldis)]." ".$sihitis[array_rand($sihitis)].".";
        }

        lause();
        ?>
        


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>