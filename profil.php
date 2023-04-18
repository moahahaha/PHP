<?php
session_start();
include "sjekk_login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">


</head>



<body> 


<div class=big_div>

<div class="overskrift">

<h1>Sosialt medie nettside</h1>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="meny">

<a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Hjem</a>
<a href="min_profil.php"><i class="fa fa-fw fa-user-circle"></i>Min profil</a>
<a href="registrer.php"><i class="fa fa-fw fa-user-plus"></i>Opprett ny profil</a>
<a href="login.php"><i class="fa fa-fw fa-sign-in"></i>Logg ut</a>

</div>

 
<?php
    include "azure.php";

    $id = $_GET['bruker_id'];

    if ($id == $_SESSION['login_id']) { #Hvis bruker id er den samme som id som er logget inn med:
        header("Refresh:0; url=min_profil.php", true, 303); #Send til min_profil.php
        die();
    }
    
    $sql = "SELECT * FROM bruker WHERE idbruker='$id'";
    $resultat = $con->query($sql); #Henter ut fra database

    $rad = $resultat->fetch_assoc();

        $idbruker = $rad["idbruker"];
        $brukernavn = $rad["brukernavn"];
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];
        $bio = $rad["bio"];
        $passord = $rad["passord"];
        $epost = $rad["epost"];
        $tlf = $rad["tlf"];
        $skole = $rad["skole"];
        $bosted = $rad["bosted"];
        $fodselsdato = $rad["fodselsdato"];
        $profilbilde = $rad["profilbilde"];



       
    
    echo "  

    <div class=profildiv> 
    
        <div class=profilbildediv>
        <img class= 'profilbilde' src='img/$profilbilde' alt''>
        
        </div>

        <div class=tekstdiv> 
        <h1>$brukernavn</h1>
        <h3>$fornavn $etternavn</h3> 
        <p>Bosted: $bosted</p> 
        <p>Skole/jobb: $skole</p>
        <p>Bio: $bio</p>
        </div>

    </div>
    <br></br>"; 
?>

<div class='innlegg'>
    <?php 
        $sql = "SELECT * FROM innlegg WHERE idbruker ='$id'";
        $resultat = $con->query($sql); #Henter ut fra database

        while($rad = $resultat->fetch_assoc()) {
            $innlegg_tekst = $rad['tekst'];
            $dato_opprettet = $rad['date'];
            $idinnlegg = $rad['idinnlegg'];
            echo "<p>$dato_opprettet</p> 
               <h4> $innlegg_tekst</h4>";

            include "kommentarer.php"; #Kommentarer.php blir inkludert

            echo"    
            <form method='POST'>
                <input name='tekst_kommentar' value='kommentar'>
                <input name='idinnlegg' type='hidden' value='$idinnlegg'>
                <input type='submit' name='submit_kommentar' value='Svar'>
            </form>
            ";            
        }

        
    if (isset($_POST["submit_kommentar"])) {

        $tekst = $_POST["tekst_kommentar"];
        $idinnlegg = $_POST["idinnlegg"];
        $id = $_SESSION['login_id'];

       

        $sql = "INSERT INTO innlegg_kommentar (tekst, idbruker, idinnlegg, date) VALUES ('$tekst', '$id',$idinnlegg, now())";


        if($con->query($sql)) { #Sjekke om det fungerer 
            echo "";
        } else {
            echo "Feilmelding $con->error";
        }
}
   
?>

    
</div>



 
<p></p>


<div class='bilde_div'>
    <?php
    $sql = "SELECT * FROM media WHERE idbruker='$id' ";
    $resultat = $con->query($sql); 

    
       

    while($rad = $resultat->fetch_assoc()) {
        $media_navn = $rad['media_navn'];
        $idmedia = $rad['idmedia'];  
        echo "<a href='bildevisning.php?media_id=$idmedia'>
        <img class='bilder' src='img/$media_navn'>
        </a>";
    }   
      
    ?>
</div>




 

</body>

</html>