<?php

$server  = "localhost";
$brukernavn = "root";
$passord = "";
$database = "dyr_db";

$kobling = new mysqli($server, $brukernavn, $passord, $database);

if ($kobling ->connect_error) {
    die("Noe gikk galt;" .$kobling->connect_error);
} else {
    
}

$sql = "SELECT*FROM kjaerledyr";
$resultat = $kobling->query($sql);

while($rad = $resultat->fetch_assoc()) {
    $idkjaerledyr = $rad['idkjaerledyr'];
    $navn = $rad['navn'];
    $art = $rad['art'];
    $rase = $rad['rase'];
    $kjonn = $rad['kjonn'];
    $fodselsmaaned = $rad['fodselsmaaned'];
    $fodselsaar = $rad['fodselsaar'];
    $vekt = $rad['vekt'];
    $bosted = $rad['bosted'];
    $eier = $rad['eier'];
    $tlf = $rad['tlf'];


    

}
