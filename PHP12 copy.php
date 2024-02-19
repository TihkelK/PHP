<h2>Sõiduaeg</h2>

<form action="#" method="get">
    <label for="start">Stardi aeg (hh:mm):</label>
    <input type="text" name="start" id="start"><br>
    <label for="lopp">Lõpp aeg (hh:mm):</label>
    <input type="text" name="lopp" id="lopp"><br>
    <input type="submit" class="btn btn-success my-2" value="Arvuta">
</form>

<?php
/*
// Ülesanne 12
// Mihkel Kuusemäe
// 12.02.24
*/
if(!empty($_GET['start']) && !empty($_GET['lopp'])){
    $s = $_GET["start"];
    $l = $_GET["lopp"];

    $start_time = strtotime($s);
    $end_time = strtotime($l);

    if ($start_time === false || $end_time === false) {
        echo "Vigane aeg! Sisestage aeg formaadis hh:mm.";
    } else {
        $time_diff = $end_time - $start_time;
        if ($time_diff < 0) {
            $time_diff += 24 * 3600; // Kui lõppaeg on järgmisel päeval, lisame ühe päeva
        }

        $hours = floor($time_diff / 3600);
        $minutes = floor(($time_diff % 3600) / 60);

        echo "Sõiduaeg: $hours tundi ja $minutes minutit.";
    }
} elseif (isset($_GET['start']) || isset($_GET['lopp'])) {
    echo "Täida mõlemad väljad!";
}
?>
