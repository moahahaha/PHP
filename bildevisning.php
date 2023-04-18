<?php
session_start();
include "sjekk_login.php";
include "azure.php";

$media_id_fra_link = $_GET['media_id'];

if(isset($_POST["submit_kommentar"])) {
    $tekst = $_POST["tekst_kommentar"];
    $idmedia = $_POST["idmedia"];
    $id = $_SESSION['login_id'];

    $sql = "INSERT INTO media_kommentar (text, idbruker, idmedia, date) VALUES ('$tekst','$id','$media_id_fra_link',now())";
    
    #Sjekk for feil
    if($con->query($sql)) {
        echo "";
    } else {
        echo "Feilmelding: $con->error";
    }
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bilde</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class='big_bildevisning'>

        <div class='bilde'>

         <?php

           
            $sql = "SELECT * FROM media WHERE idmedia='$media_id_fra_link'";# id fra link på bilde
            $resultat = $con->query($sql);

            $rad = $resultat->fetch_assoc();
                $idmedia = $rad['idmedia'];
                $dato = $rad['date'];
                $media_navn = $rad['media_navn'];


            echo "<img class='stort_bilde' src='img/$media_navn'>";
         ?>
        </div>

        <div class='kommentarer_bildevisning'>
        
         <?php

            $sql = "SELECT * FROM media_kommentar 
            JOIN bruker ON media_kommentar.idbruker=bruker.idbruker
            WHERE idmedia='$media_id_fra_link' ORDER BY date DESC";

            $resultat_media_kommentar = $con->query($sql);#Henter ut fra database


            while ($kom = $resultat_media_kommentar->fetch_assoc()) { #Loop gjennom alle brukere
                $innlegg_tekst = $kom['text'];
                $dato_opprettet = $kom['date'];
                $brukernavn = $kom['brukernavn'];

                echo "$brukernavn: $innlegg_tekst, $dato_opprettet<br>";

            } // end kommentar loop

                echo "
                <form method='POST'>
                    <input name='tekst_kommentar' value='kommentar'>
                    <input name= 'idmedia' type='hidden' value=$media_id_fra_link'>
                    <input type='submit' name='submit_kommentar' value='Svar'>
                    </form>    
                ";
                

              
            


         ?>
        </div>
    </div>


</body>
</html>


