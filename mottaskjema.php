<?php

if (isset ($_GET["sendinn"])) {
    $navn = $_GET["dittnavn"];
    $inntekt1 = $_GET["inntekt2020"];
    $inntekt2 = $_GET["inntekt2021"];
    $inntekt3 = $_GET["inntekt2022"];
    


    echo "<p>Du heter $navn. </p>";
    echo "<p>I 2020 tjente du $inntekt1 kr.";
    echo "<p>I 2021 tjente du $inntekt2 kr.";
    echo "<p>I 2022 tjente du $inntekt3 kr.";

    $tilsammen = $inntekt1 + $inntekt2 + $inntekt3;

    echo "<p>Tilsammen disse årene tjente du $tilsammen kr.";

    $gjennomsnitt = $tilsammen / 3;

    echo "<p>Gjennomsittet er på $gjennomsnitt kr.</p>";

    if ($gjennomsnitt < 610000) {
        echo "<p>Dette er lavere enn gjennomsnittet i hele Norge.</p>";
    }
    else {
        echo "<p>Dette er høyere enn gjennomsnittet i hele Norge</p>";
    }


}

?>





