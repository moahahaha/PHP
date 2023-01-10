<!doctype html >
<html>

<head>
</head>

<body>

<?php

$tall1 = 10;
$tall2 = 3;
$tall3 = 1;

$tekst1 = "Dette";
$tekst2 = "er";
$tekst3 = "en";
$tekst4 = "tekst";
$tekst5 = "(:";
$date = date("m");
$thisyear = date("Y");
$year = 2005;


$sum = $tall1 + $tall2;
$differanse = $tall1 - $tall2;
$produkt = $tall1 * $tall2;
$kvotient = $tall1 / $tall2;

$langTekst = $tekst1 . " " . $tekst2 . " " . $tekst3 . " " . $tekst4;
$ogsålangTekst = $tekst1 . " " . $tekst3 . " " . $tekst4 . " " . $tekst2;
$lol = $tekst5 . " " . "lol";





echo "Summen blir $sum <br>";
echo "Differansen blir $differanse <br>";
echo "Produktet blir $produkt <br>";
echo "Kvotienten blir $kvotient <br>";


echo "<br><br>";
echo "$langTekst <br>";
echo "$ogsålangTekst <br>";
echo "<br><br>";
echo "$lol";
echo "<br><br>";
echo "<a href='https://th.bing.com/th/id/OIP.WmipMFoV7IasfVA6denc3QHaFf?pid=ImgDet&rs=1'>Lenke</a>";
echo "<br><br>";


if ($thisyear - $year < 18) {
    echo "Du er yngre enn 18";
}
else if ($thisyear - $year > 18) {
    echo "Du er eldre enn 18";
}
else if ($thisyear - $year == 18) {
    echo "Du er 18 år";
}


echo "<br><br>";


if ($date == 1) {
    echo "Det er Januar";
}
else if ($date == 2) {
    echo "Det er februar";
}
else if ($date == 3) {
    echo "Det er mars";
}
else if ($date == 4) {
    echo "Det er april";
}
else if ($date == 5) {
    echo "Det er mai";
}
else if ($date == 6) {
    echo "Det er juni";
}
else if ($date == 7) {
    echo "Det er juli";
}
else if ($date == 8) {
    echo "Det er august";
}
else if ($date == 9) {
    echo "Det er september";
}
else if ($date == 10) {
    echo "Det er oktober";
}
else if ($date == 11) {
    echo "Det er november";
}
else if ($date == 12) {
    echo "Det er desember";
}

echo "<br><br>";

while ($tall3 <  16) {
    echo "$tall3";
    $tall3 = $tall3 + 1;

}

echo "<br><br>";

for ($i =1;  $i <= 15;  $i++) {
    echo "$i <br>";
}

$tall5 = 1;
while ($tall5 < 43) {
    echo "IT1 <br>";
    $tall5 = $tall5 + 1;
}

echo "<br><br>";

for ($t = 1; $t <= 42; $t++) {
    echo "IT1 <br>";
}


$tall6 = 2;
while ($tall6 <= 20) {
    echo "$tall6";
    $tall6 = $tall6 + 2;
}






?>




</body>

</html>