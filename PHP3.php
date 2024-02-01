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
        <h1>Harjutus 3</h1>   

        <form action="#" method="get">
            <label for="a">Külg a</label>
            <input type="number" name="a" id="a"><br>
            <label for="b">Külg b</label>
            <input type="number" name="b" id="b"><br>
            <label for="h">Külg h</label>
            <input type="number" name="h" id="h"><br>
            <input type="submit" class="btn btn-success my-2" value="Arvuta">
        </form>

        <?php
        /*
        // Ülesanne 1
        // Mihkel Kuusemäe
        // 01.01.24
        */

        if(!empty($_GET)){
            $a = $_GET['a'];
            $b = $_GET['b'];
            $h = $_GET['h'];
            $s = (($a*$b)/2)*$h;
            echo 'Trapetsi pindala on '.$s.'<br>';
        }
        ?>

        <form action="#" method="get">
            <label for="c">Rombi külg: </label>
            <input type="number" name="c" id="c">
            <input type="submit" class="btn btn-success my-2" value="Arvuta">
        </form>

        <?php
        if(!empty($_GET)){
            $c =$_GET['c'];
            $p = 4*$c;
            echo 'Rombi ümbermõõt on '.$p.'<br>';
        }
        ?>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
</body>
</html>