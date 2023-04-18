<!doctype html>
<html>

<head>
<style>

#kjaerledyr {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#kjaerledyr td, #kjaerledyr th {
  border: 1px solid #ddd;
  padding: 8px;
}

#kjaerledyr tr:nth-child(even){background-color: #f2f2f2;}

#kjaerledyr tr:hover {background-color: #ddd;}

#kjaerledyr th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}



</style>
</head>


<body>


<?php

include "azure.php";

$sql = "SELECT * FROM kjaerledyr";
$resultat = $con->query($sql);

echo "<table id ='kjaerledyr'>";
echo "<tr>";
    echo "<th>Navn</th>";
    echo "<th>Art</th>";
    echo "<th>Rase</th>";
    echo "<th>Kjønn</th>";
    echo "<th>Fødselsmåned</th>";
    echo "<th>Fødselsår</th>";
    echo "<th>Vekt</th>";
    echo "<th>Bosted</th>";
    echo "<th>Eier</th>";
    echo "<th>Tlf</th>";
echo "</tr>";


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
    
    
    echo "<tr>    
      <td> <a href= dyr_php?dyr_id=$idkjaerledyr'>$navn </a></td>
        <td>$art</td>
        <td>$rase</td>
        <td>$kjonn</td>
        <td>$fodselsmaaned</td>
        <td>$fodselsaar</td>
        <td>$vekt</td>
        <td>$bosted</td>
        <td>$eier</td>
        <td>$tlf</td>
       
     


        <td>
        <form method='post' action='slett.php'>
        <input type='hidden' name='slett_id' value='$idkjaerledyr'>
        <input type='submit' value='slett'>
        </form>
        
        </td>
        

    </tr>";
    
   
}

    
echo "</table>";


?>
<p></p>
<a href="leggtil.php"><button>Legg til</button></a>




</body>

</html>