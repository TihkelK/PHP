<!DOCTYPE html>
<html lang="et">
<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        .banner1 {
            background-image: url("img/b17.jpg");
            height: 300px;
            object-fit: cover;
        }
        .banner2 {
            background-image: url("img/b10.jpg");
            height: 300px;
            object-fit: cover;
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
                        <a class="nav-link" href="index.php"><b>Avaleht</b></a>
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

    <div class="container mt-5">
        <h1 class="mb-4">ADMIN</h1>
        
        <button class="btn btn-success mb-3" onclick="addProduct()">Lisa toode</button>
        <button class="btn btn-danger mb-3" onclick="removeProduct()">Eemalda toode</button>

        <form id="addProductForm" action="#" method="get" style="display: none;">
            <label for="productName">Toote nimi:</label>
            <input type="text" name="productName" id="productName"><br>
            <label for="productPrice">Hind:</label>
            <input type="text" name="productPrice" id="productPrice"><br>
            <label for="productImage">Pilt (URL):</label>
            <input type="url" name="productImage" id="productImage"><br>
            <input type="submit" class="btn btn-success my-2" value="Lisa">
        </form>
    
        <form id="remProductForm" action="#" method="get" style="display: none;">
            <label for="RproductName">Toote nimi:</label>
            <input type="text" name="RproductName" id="RproductName"><br>
            <label for="RproductPrice">Hind:</label>
            <input type="text" name="RproductPrice" id="RproductPrice"><br>
            <label for="RproductImage">Pilt (URL):</label>
            <input type="url" name="RproductImage" id="RproductImage"><br>
            <input type="submit" class="btn btn-danger my-2" value="Eemalda">
        </form>
    </div>

    <script>
        function addProduct() {
            document.getElementById('addProductForm').style.display = 'block';
        }
        function removeProduct() {
            document.getElementById('remProductForm').style.display = 'block';
        }
    </script>

<?php
if(!empty($_GET['productName']) && !empty($_GET['productPrice']) && !empty($_GET['productImage'])){
    $productName = $_GET['productName'];
    $productPrice = $_GET['productPrice'];
    $productImage = $_GET['productImage'];

    $fail = "tooted.csv";
    $data = "$productImage,$productName,$productPrice\n";

    if ($handle = fopen($fail, 'a')){
        fwrite($handle, $data);
        fclose($handle);
        echo "<script>alert('Toode lisatud!');</script>";
    }
}

if(!empty($_GET['RproductName']) && !empty($_GET['RproductPrice']) && !empty($_GET['RproductImage'])){
    $RproductName = $_GET['RproductName'];
    $RproductPrice = $_GET['RproductPrice'];
    $RproductImage = $_GET['RproductImage'];

    $fail = "tooted.csv";
    $rows = file($fail);
    $handle = fopen($fail, 'w');

    foreach($rows as $row){
        $data = explode(',', $row);
        if ($data[0] == $RproductImage && $data[1] == $RproductName && $data[2] == $RproductPrice) {

        } else {
            fwrite($handle, $row);
        }
    }
    fclose($handle);
    echo "<script>alert('Toode eemaldatud!');</script>";
}
?>

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