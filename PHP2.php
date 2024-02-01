<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Harjutus 2</h1>   

        <?php
        /*
        // Ülesanne 1
        // Mihkel Kuusemäe
        // 01.01.24
        */

        $m1 = 2;
        $m2 = 5;

        $sum = $m1 + $m2;
        $lah = $m1 - $m2;
        $kor = $m1 * $m2;
        $jag = $m1 / $m2;
        $jaak = $m1 % $m2;
        
        echo "Liitmine = $sum tehe ($m1 + $m2)<br>";
        echo "Lahutamine = $lah tehe ($m1 - $m2)<br>";
        echo "Korrutamine = $kor tehe ($m1 * $m2)<br>";
        echo "Jagamine = $jag tehe ($m1 / $m2)<br>";
        echo "Jääk = $jaak tehe ($m1 % $m2)<br><br>";
        
        $mm = 100;
        $cm = $mm / 10;
        $m = $mm / 1000;
        printf("%.2f mm on %.2f cm või %.2f m<br><br>", $mm, $cm, $m);

        $a = 3;
        $b = 4;
        $c = 5;
        $p = $a + $b + $c;
        $s = ($a * $b) / 2;

        printf("Kolmnurga ümbermõõt on %d ja pindala on %d<br><br>", $p, $s);







        ?>

    </div>

</body>
</html>