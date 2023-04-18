<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE-spørringer</title>
</head>



<body>

<?php

if(isset($_POST["slett_id"]))  {
    $slett_id = $_POST["slett_id"];
    include "azure.php";
} 

else {
    die("Du må anngi et dyr.");

}

$sql = "DELETE FROM kjaerledyr WHERE slett_id='$slett_id'";

if($con->query($sql)) {
    echo "Spørringen $sql ble gjennomført.";
}
else {
    echo "Noe gikk galt med spørringen $sql ($con->error).";
}


?>






</body>

</html>