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

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="card border-1 banner1">

                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <div>
                            <p class="card-text text-white mb-0"><b>parim pakkumine</b></p>
                            <h2 class="card-text text-white mb-0">osta 1 saad 1</h2>
                            <p class="card-text text-white mb-0">The best classic dress is on sale at cora</p>
                            <a href="#" class="btn btn-outline-light mt-3 rounded-0">Vaata lähemalt</a>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="col-md-6">
                <div class="card border-1 banner2">

                    <div class="card-img-overlay d-flex flex-column justify-content-center">
                        <div>
                            <p class="card-text text-white mb-0"><b>kevad/suvi</b></p>
                            <h2 class="card-text text-white mb-0">kõik rohelised</h2>
                            <p class="card-text text-white mb-0">20% sootsamalt</p>
                            <a href="#" class="btn btn-outline-light mt-3 rounded-0">Tutvu lähemalt</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <br>
    <h1 class="text-center"><b>POOD</b></h1>
    <div class="container text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis maiores cupiditate blanditiis accusantium est deleniti eos enim sit placeat! Amet facere eum dolore beatae maxime recusandae corporis reiciendis quam reprehenderit? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad vitae voluptate, quo mollitia dolore facere ab suscipit voluptatum ducimus beatae vero, eum maxime quasi tenetur consequuntur architecto accusantium doloribus! Tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. In tempore qui eius vero aliquid eos quos asperiores impedit, commodi tenetur ea mollitia modi optio fugiat fugit dignissimos molestias adipisci earum?</p>
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