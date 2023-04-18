<?php

$con = mysqli_init(); 
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem",NULL, NULL); mysqli_real_connect($con,"ida.mysql.database.azure.com", "idahag23", "Passord123", "lol_app", 3306, MYSQLI_CLIENT_SSL);

?>