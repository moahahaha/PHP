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

    $id = $_SESSION['login_id'];
    
    $sql = "SELECT * FROM bruker WHERE idbruker='$id'";
    $resultat = $con->query($sql);

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
    <br></br>
    "; 


?>


<div class='innlegg'>
    <?php include ("opprett_innlegg.php");
        $sql = "SELECT * FROM innlegg WHERE idbruker ='$id'";
        $resultat = $con->query($sql);

        while($rad = $resultat->fetch_assoc()) {
            $innlegg_tekst = $rad['tekst'];
            $dato_opprettet = $rad['date'];
            echo "<h5>$dato_opprettet <h5>
                <h4>$innlegg_tekst</h4>";
        }
    ?>



   
 <p></p>
</div>

<div class='bilde_div'>
    <?php
    $sql = "SELECT * FROM media WHERE idbruker='$id' ";
    $resultat = $con->query($sql); 
 
    while($rad = $resultat->fetch_assoc()) {
        $media_navn = $rad['media_navn'];  
        echo "<img class='bilder'src='img/$media_navn'>";
    }
      
    ?>
</div>

 <div class="upload">
    <?php
    
    include "upload.php"
    ?>
</div> 



 

</body>

</html>