<form method="POST">
    <label for="tekst_innlegg">Tekst:</label><br></br>
    <textarea id="text" name="tekst_innlegg" rows="4" cols="50"> </textarea>
    <br><input type="submit" name="submit_innlegg" value="Legg til"></br>
</form>

<?php
if (isset($_POST["submit_innlegg"])) {
     include "azure.php";
     $tekst = $_POST["tekst_innlegg"];
     $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst', '$id', NOW())";


     if($con->query($sql)) {
        echo "";
     } else {
        echo "Feilmelding $con->error";
     }
}
   
?>





