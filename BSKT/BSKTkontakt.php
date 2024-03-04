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
    <h1 class="text-center"><b>KONTAKT</b></h1>
    
    <div class="container">
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Pilt</th>
            <th scope="col">Nimi</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>
                <img class="rounded-circle" src="https://picsum.photos/id/684/50/50" alt="">
            </td>
            <td>Heli Kopter</td>
            <td>heli@kopter.ee</td>
            <td>
                <button type="button" class="btn btn-warning">Muuda</button>
            </td>
            <td>
                <button type="button" class="btn btn-danger">Kustuta</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>
                <img class="rounded-circle" src="https://picsum.photos/id/684/50/50" alt="">
            </td>
            <td>Anna Nuga</td>
            <td>anna@nuga.com</td>
            <td>
                <button type="button" class="btn btn-warning">Muuda</button>
            </td>
            <td>
                <button type="button" class="btn btn-danger">Kustuta</button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>
                <img class="rounded-circle" src="https://picsum.photos/id/684/50/50" alt="">
            </td>
            <td>Imre Tard</td>
            <td>imre@tard.eu</td>
            <td>
                <button type="button" class="btn btn-warning">Muuda</button>
            </td>
            <td>
                <button type="button" class="btn btn-danger">Kustuta</button>
            </td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>
                <img class="rounded-circle" src="https://picsum.photos/id/684/50/50" alt="">
            </td>
            <td>Karin Eegreid</td>
            <td>karin@eegreid.eu</td>
            <td>
                <button type="button" class="btn btn-warning">Muuda</button>
            </td>
            <td>
                <button type="button" class="btn btn-danger">Kustuta</button>
            </td>
        </tr>
        </tbody>
    </table>

    <nav>
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Eelmine</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item active"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Järgmine</a></li>
        </ul>
      </nav>
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