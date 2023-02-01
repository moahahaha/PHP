<?php

$år = 2023;

$navn1 = "Oscar";
$navn2 = "Ludvig";
$navn3 = "Beate";

$år1 = 1980;
$år2 = 2003;
$år3 = 2007;

$alder1 = $år - $år1;
$alder2 = $år - $år2;
$alder3 = $år - $år3;

echo "<br><br>";
echo "$navn1 er $alder1 år gammel";
echo "<br><br>";
echo "$navn2 er $alder2 år gammel";
echo "<br><br>";
echo "$navn3 er $alder3 år gammel";

$forskjell1 = $alder1 - $alder2;
$forskjell2 = $alder2 - $alder3;
$forskjell3 = $alder1 - $alder3;

echo "<br><br>";
echo "<br><br>";
echo "$navn1 er $forskjell1 år eldre enn $navn2";
echo"<br><br>";
echo "$navn2 er $forskjell2 år eldre enn $navn3";
echo "<br><br>";
echo "$navn3 er $forskjell3 år yngre enn $navn1";



?>