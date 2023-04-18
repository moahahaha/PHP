<?php
    $sql = "SELECT * FROM innlegg_kommentar WHERE idinnlegg ='$idinnlegg' ORDER BY date DESC";
    $resultat_kommentar = $con->query($sql);
echo "<p>Kommentarer:</p>";
    while($rad = $resultat_kommentar->fetch_assoc()) {
        $innlegg_tekst = $rad['tekst'];
        $dato_opprettet = $rad['date'];
        
echo " <h6>$dato_opprettet</h6>$innlegg_tekst ";
}

?>