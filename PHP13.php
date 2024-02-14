<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Harjutus 13</h1>

    <?php
    /*
    // Ülesanne 13
    // Mihkel Kuusemäe
    // 14.02.24
    */
    $allowed_extensions = array('jpg', 'jpeg');
    
    if(isset($_FILES['pilt']) && !empty($_FILES['pilt']['name'])){
        $file_name = $_FILES['pilt']['name'];
        $file_tmp = $_FILES['pilt']['tmp_name'];
        
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if(in_array($file_extension, $allowed_extensions)){
            $upload_directory = 'pildid/';
            $upload_path = $upload_directory . $file_name;

            if(move_uploaded_file($file_tmp, $upload_path)){
                echo "<p>Pilt <strong>$file_name</strong> on edukalt üles laetud!</p>";
            } else {
                echo "<p>Vabandame, pildi üleslaadimine ebaõnnestus.</p>";
            }
        } else {
            echo "<p>Palun laadige üles ainult JPG või JPEG formaadis pilte.</p>";
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="pilt">
        <input type="submit" value="Lae üles">
    </form>

    <hr>

    <div>
        <?php
        $uploaded_directory = 'pildid/';
        $uploaded_files = scandir($uploaded_directory);
        
        foreach($uploaded_files as $file){
            $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if(in_array($file_extension, $allowed_extensions)){
                echo "<a href='$uploaded_directory$file'><img src='$uploaded_directory$file' style='max-width: 200px; margin: 10px;' alt='Üleslaetud pilt'></a>";
            }
        }
        ?>
    </div>
</body>
</html>
