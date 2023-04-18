<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

   

<div class="big_login">

    

    <div class="medium_login">
        <h2>Logg på</h2>
        <div class=post_login>
            <form method='POST' action="">
                <link rel="stylesheet" href="style.css">
                Brukernavn<br></br>
                <input type="text" name= 'brukernavn'><br></br>
                Passord<br></br>
                <input type="password" name='passord'><br></br>
                <input type="submit" name='submit_login' value="Logg på">
                
                <p></p>
            </form>
            <a href="registrer.php"><button>Opprett ny profil</button></a>
        </div>

        <?php
            if(isset($_POST['submit_login'])) { #Hvis submin_login knappen blir trykket:
                include "azure.php";

                $brukernavn = $_POST['brukernavn'];
                $passord_skjema = $_POST['passord'];

            

                $sql = "SELECT fornavn, brukernavn, passord, idbruker FROM bruker WHERE brukernavn = '$brukernavn'";
                $resultat = $con->query($sql); #Henter ut fra database
                $rad = $resultat->fetch_assoc();


            
                if ($rad['passord'] == $passord_skjema) {
                    echo "Logger inn....";

                    session_start();
                    $_SESSION['login_id'] = $rad['idbruker'];
                    $_SESSION['fornavn'] = $rad['fornavn'];
                    header("Refresh:1; url=index.php", true, 303);


                } else {
                    echo "Passord eller brukernavn er feil.";
                }
           
            }
        ?>
    </div>


</div>

</html>