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
    
</body>
</html>



<form method="POST">
    Brukernavn:
    <br><input type="text" name="brukernavn"></br>
    Fornavn:
    <br><input type="text" name="fornavn"></br>
    Etternavn:
    <br><input type="text" name="etternavn"></br>
    Bio:
    <br><input type="text" name="bio"></br>
    Passord:
    <br><input type="password" name="passord"></br>
    Epost:
    <br><input type="text" name="epost"></br>
    Tlf:
    <br><input type="text" name="tlf"></br>
    Skole/jobb:
    <br><input type="text" name="skole"></br>
    Bosted:
    <br><input type="text" name="bosted"></br>
    Fødselsdato:
    <br><input type="date" name="fodselsdato"></br>
    <br></br>
    Not a robot
    <br><input type="checkbox" name="robot"></br>
    <br><input type="submit" name="leggtil" value="Opprett profil"></br>


</form>

<?php
include "azure.php";

if(isset($_POST["leggtil"])) {
   
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $bio = $_POST["bio"];
    $passord = $_POST["passord"];
    $epost = $_POST["epost"];
    $tlf = $_POST["tlf"];
    $skole = $_POST["skole"];
    $bosted = $_POST["bosted"];
    $fodselsdato = $_POST["fodselsdato"];

    $sql = "INSERT INTO bruker (brukernavn, fornavn, etternavn, bio, passord, epost, tlf, skole, bosted, fodselsdato) 
    VALUES ('$brukernavn', '$fornavn', '$etternavn', '$bio', '$passord', '$epost', '$tlf', '$skole', '$bosted', '$fodselsdato')";

    if ($con->query($sql)) {
        echo "Profilen er opprettet";
       
    }
    

}

?>