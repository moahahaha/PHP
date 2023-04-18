<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dyr</title>
</head>



<body>

<?php
    include "kobling.php";

    $id = $GET['dyr_id'];
    
    $sql = "SELECT * FROM dyr WHERE id_kjaerledyr='$id'";
    $resultat = $conn->query($sql);

    $rad = $resultat->fetch_assoc();

        $navndyr = $_POST["navn"];
        $art = $_POST["art"];
        $rase = $_POST["rase"];
        $kjonn = $_POST["kjonn"];
        $fodselsmaaned = $_POST["fodselsmaaned"];
        $fodselsaar = $_POST["fodselsaar"];
        $vekt = $_POST["vekt"];
        $bosted = $_POST["bosted"];
        $eier = $_POST["eier"];
        $tlf = $_POST["tlf"];

    echo "<h1>$navn</h1>";
    echo "<h3>$art</h3>";




    ?>


</body>

</html>