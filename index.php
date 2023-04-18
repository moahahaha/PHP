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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>


    <div class="big_index">

        <div class="overskrift">

            <h1>Sosialt medie nettside</h1>

        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="meny">

            <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Hjem</a> <!--Ikoner ig tekst i menyen -->
            <a href="min_profil.php"><i class="fa fa-fw fa-user-circle"></i>Min profil</a>
            <a href="registrer.php"><i class="fa fa-fw fa-user-plus"></i>Opprett ny profil</a>
            <a href="login.php"><i class="fa fa-fw fa-sign-in"></i>Logg ut</a>

        </div>

        <div class="Velkommen">
            <h2>Velkommen <?php echo $_SESSION['fornavn']; ?> </h2> <br></br> <!--Velkommen (brukernavnet som ble logget inn med)-->
        </div>
    
        
        
        <div class="brukere_index">

            <?php
            include "azure.php"; #Inkluderer azure.php
            $sql = "SELECT idbruker, brukernavn, profilbilde FROM bruker"; #Bruker = tabellnavnet
            $resultat = $con->query($sql); #Henter ut fra databasen

            #Looper gjennom resultatet fra databasen
            while ($rad = $resultat->fetch_assoc()) {
                $idbruker = $rad['idbruker'];
                $brukernavn = $rad['brukernavn'];
                $profilbilde = $rad['profilbilde'];
                echo"<img class= 'profilbilde_index' src='img/$profilbilde' alt''>"; #Profilbilde
                echo"<a href='profil.php?bruker_id=$idbruker'>$brukernavn</a><br>"; #Brukernavn

            } #loop slutt

            
            ?>
 
        </div>
        
       
        



</div>  
</body>

</html>