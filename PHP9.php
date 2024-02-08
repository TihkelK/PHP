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
        <h1>Harjutus 9</h1>

        <form action="#" method="get">
            <label for="nimi">Sisesta nimi:</label>
            <input type="text" name="nimi" id="nimi"><br>
            <input type="submit" class="btn btn-success my-2" value="Sisesta">
        </form>
        <?php
        /*
        // Ülesanne 9
        // Mihkel Kuusemäe
        // 08.02.24
        */

        if(!empty($_GET['nimi'])){
            $n = $_GET["nimi"];
            $sn = ucfirst(strtolower($n));

            echo "Tere, $sn!";
        }
        ?>
        
        <hr>

        <form action="#" method="get">
            <label for="text">Sisesta tekst:</label>
            <input type="text" name="text" id="text"><br>
            <input type="submit" class="btn btn-success my-2" value="Sisesta">
        </form>
        <?php
        if(!empty($_GET['text'])){
            $t = $_GET["text"];
            
            for ($i = 0; $i < strlen($t); $i++){
                echo strtoupper($t[$i]).".";
            }
        }
        ?>

        <hr>

        <form action="#" method="get">
            <label for="text2">Ropenda:</label>
            <input type="text" name="text2" id="text2"><br>
            <input type="submit" class="btn btn-success my-2" value="Sisesta">
        </form>
        <?php
        if(!empty($_GET['text2'])){
            $t = $_GET["text2"];
            $r_sonad = array("noob");
            $ps = str_ireplace($r_sonad, "***", $t);

            echo htmlspecialchars($ps);
        }
        ?>

        <hr>

        <form action="#" method="get">
            <label for="enimi">Eesnimi:</label>
            <input type="text" name="enimi" id="enimi"><br>
            <label for="pnimi">Perenimi:</label>
            <input type="text" name="pnimi" id="pnimi"><br>
            <input type="submit" class="btn btn-success my-2" value="Sisesta">
        </form>
        <?php
        if(!empty($_GET['enimi']) && !empty($_GET['pnimi'])){
            $en = $_GET["enimi"];
            $pn = $_GET["pnimi"];
            $en = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $en));
            $pn = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $pn));
            $email = "$en.$pn@hkhk.edu.ee";

            echo "Email: ".htmlspecialchars($email);
        }
        ?>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>