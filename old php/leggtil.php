
<form method="POST">
    Navn kjærledyr:
    <br><input type="text" name="navn"></br>
    Art:
    <br><input type="text" name="art"></br>
    Rase:
    <br><input type="text" name="rase"></br>
    Kjønn:
    <br><input type="text" name="kjonn"></br>
    Fødselsmåned
    <br><input type="text" name="fodselsmaaned"></br>
    Fødselsår:
    <br><input type="text" name="fodselsaar"></br>
    Vekt:
    <br><input type="text" name="vekt"></br>
    Bosted
    <br><input type="text" name="bosted"></br>
    Eier
    <br><input type="text" name="eier"></br>
    Telefon nummer:
    <br><input type="text" name="tlf"></br>

    <br><input type="submit" name="leggtil" value="Legg til kjærledyr"></br>
</form>

<?php
include "azure.php";

if(isset($_POST["leggtil"])) {
   
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

    $sql = "INSERT INTO kjaerledyr (navn, art, rase, kjonn, fodselsmaaned, fodselsaar, vekt, bosted, eier, tlf) VALUES ('$navndyr', '$art', '$rase', '$kjonn', '$fodselsmaaned', '$fodselsaar', '$vekt', '$bosted', '$eier', '$tlf')";

    if ($con->query($sql)) {
        echo "Kjærledyr ble lagt til i databasen";
    }

}

?>

<p></p>
<a href="index.php"><button>Tabell</button></a>