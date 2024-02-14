<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 14</title>
</head>
<body>
    <h1>Harjutus 14</h1>

    <?php
    /*
    // Ülesanne 14
    // Mihkel Kuusemäe
    // 14.02.24
    */
    function vali_suvaline_pilt($kataloog) {
        $pildid = glob("$kataloog/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        return $pildid[array_rand($pildid)];
    }

    $valitud_pilt = vali_suvaline_pilt('pildid');
    $pildi_andmed = getimagesize($valitud_pilt);
    
    $laius = $pildi_andmed[0];
    $korgus = $pildi_andmed[1];
    $formaat = $pildi_andmed[2];
    $max_laius = 120;
    $max_korgus = 90;
    
    if ($laius <= $max_korgus && $korgus <= $max_korgus) {
        $ratio = 1;    
    } elseif ($laius > $korgus) {
        $ratio = $max_laius / $laius;    
    } else {
        $ratio = $max_korgus / $korgus;    
    }
    
    $pisi_laius = round($laius * $ratio);
    $pisi_korgus = round($korgus * $ratio);
    ?>

    <a href="<?php echo $valitud_pilt; ?>"><img width="<?php echo $pisi_laius; ?>" src="<?php echo $valitud_pilt; ?>" alt="Valitud pilt"></a><br>

    <hr>
    
    <h2>Pisipildid</h2>

    <div style="display: flex; flex-wrap: wrap;">
        <?php
        $kataloog = 'pildid';
        $pildid = glob("$kataloog/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
        $veergude_arv = 3;
        
        $counter = 0;
        foreach($pildid as $pilt) {
            $pildi_andmed = getimagesize($pilt);
            $laius = $pildi_andmed[0];
            $korgus = $pildi_andmed[1];
            $formaat = $pildi_andmed[2];
            
            if ($laius <= $max_korgus && $korgus <= $max_korgus) {
                $ratio = 1;    
            } elseif ($laius > $korgus) {
                $ratio = $max_laius / $laius;    
            } else {
                $ratio = $max_korgus / $korgus;    
            }
            
            $pisi_laius = round($laius * $ratio);
            $pisi_korgus = round($korgus * $ratio);
            
            echo "<a href='$pilt'><img width='$pisi_laius' src='$pilt' style='max-width: 120px; max-height: 90px; margin: 5px;' alt='Pisipilt'></a>";
            
            $counter++;

            if ($counter % $veergude_arv == 0) {
                echo '<br>';
            }
        }
        ?>
    </div>
</body>
</html>
