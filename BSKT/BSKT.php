<!DOCTYPE html>
<html lang="et">
<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        .banner1 {
            height: 300px;
            object-fit: cover;
            background-position: center;
        }
        .banner2 {
            height: 300px;
            object-fit: cover;
            background-position: center;
        }
    </style>

    <script src="https://kit.fontawesome.com/9120ee6edc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <p class="lead"><b>Kuusemae.com</b></p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#minuMenyy" aria-controls="minuMenyy" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="minuMenyy">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="BSKT.php"><b>Avaleht</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="BSKTpood.php"><b>Pood</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="BSKTkontakt.php"><b>Kontakt</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="BSKTadmin.php"><b>Admin</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    $rndmImages = ["img/b17.jpg", "img/b10.jpg", "img/b4.jpg", "img/b7.jpg", "img/b18.jpg"];
    $rndmTexts = ["<p class=\"card-text text-light mb-0\"><b>parim pakkumine</b></p>
    <h2 class=\"card-text text-light mb-0\">osta 1 saad 1</h2>
    <p class=\"card-text text-light mb-0\">The best classic dress is on sale at cora</p>", "<p class=\"card-text text-light mb-0\"><b>kevad/suvi</b></p>
    <h2 class=\"card-text text-light mb-0\">kõik rohelised</h2>
    <p class=\"card-text text-light mb-0\">20% sootsamalt</p>", "<p class=\"card-text text-light mb-0\"><b>sügis/talv</b></p>
    <h2 class=\"card-text text-light mb-0\">joped meestele ja naistele</h2>
    <p class=\"card-text text-light mb-0\">30% sootsamalt</p>", "<p class=\"card-text text-light mb-0\"><b>KÕRVARÕNGAD</b></p>
    <h2 class=\"card-text text-light mb-0\">ägedad kõrvarõngad</h2>
    <p class=\"card-text text-light mb-0\">Need on ilusad(vist)</p>", "<p class=\"card-text text-light mb-0\"><b>osta 2 saad 10</b></p>
    <h2 class=\"card-text text-light mb-0\">kinkekottid juhhu</h2>
    <p class=\"card-text text-light mb-0\">Neid on erinevaid värve</p>"];
    $rndmImage = $rndmImages[array_rand($rndmImages)];
    $rndmImage2 = $rndmImages[array_rand($rndmImages)];
    $rndmText = $rndmTexts[array_rand($rndmTexts)];
    $rndmText2 = $rndmTexts[array_rand($rndmTexts)];
    ?>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="card border-1 banner1" style="background-image: url('<?php echo $rndmImage; ?>');">

                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <div>
                            <?php echo $rndmText; ?>
                            <a href="#" class="btn btn-outline-light mt-3 rounded-0">Vaata lähemalt</a>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="col-md-6">
                <div class="card border-1 banner2" style="background-image: url('<?php echo $rndmImage2; ?>');">

                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <div>
                            <?php echo $rndmText2; ?>
                            <a href="#" class="btn btn-outline-light mt-3 rounded-0">Tutvu lähemalt</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    
    <br>
    <h1 class="text-center"><b>Parimad pakkumised</b></h1>

    <div class="container mt-5">
        <div class="row">
            <?php
            $fail = "tooted.csv";

            if (($handle = fopen($fail, 'r')) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    $pilt = $data[0];
                    $nimetus = $data[1];
                    $hind = $data[2];

                    echo '
                    <div class="col-md-3 mb-4">
                        <div class="card border-1 p-2">
                            <img src="' . $pilt . '" class="card-img-top rounded-3" alt="' . $nimetus . '">
                            <div class="card-body">
                                <h5 class="card-title mb-0"><b>' . $nimetus . '</b></h5>
                                <p class="card-text text-success"><b>' . $hind . '€</b></p>
                            </div>
                        </div>
                    </div>';
                }
                fclose($handle);
            }
            ?>

        </div>
    </div>
    
    

    

    <div class="bg-lightgrey text-dark bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <br>
                    <br>
                    <p>Kuusemäe</p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    
    


        <script>
            (function() {
                'use strict';
                window.addEventListener('load', function() {
                    var forms = document.getElementsByClassName('needs-validation');
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                    });
                }, false);
            })();
        </script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"    crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>