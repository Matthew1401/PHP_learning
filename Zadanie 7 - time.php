<?php

$zadanie=1;

//Zadanie 1
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$dt = date("m.d.y");
$tm = date("h:i:s");

echo "Dzisiaj jest $dt godzina $tm";
echo "<br><br>";


//Zadanie 2
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$time = mktime(0, 0, 0, 1, 14, 2004);
$dt = date("l", $time);
echo "My birth was in  $dt";
echo "<br><br>";


//Zadanie 3
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$x = 1989;
echo "<strong>Sposób ze zmienną</strong><br>";
if ($x%400==0) {
    echo "Rok $x jest rokiem przestępnym";
}
elseif ($x%4==0 && $x%100!=0) {
    echo "Rok $x jest rokiem przestępnym";
}
else echo "Rok $x nie jest rokiem przestępnym";
echo"<br><br>";


echo "<strong>Sposób ze zmienną i funkcją \"date\"</strong><br>";
$year = date("Y");
settype($year, "integer");
$x = $year;

if ($x%400==0) {
    echo "Rok $x jest rokiem przestępnym";
}
elseif ($x%4==0 && $x%100!=0) {
    echo "Rok $x jest rokiem przestępnym";
}
else echo "Rok $x nie jest rokiem przestępnym";
echo"<br><br>";


echo "<strong>Sposób z \"date\" i automatycznym określeniem, czy rok jest przestępny</strong><br>";
$year = date("L");
switch($year) {
    case "0" : echo "Aktualny rok nie jest rokiem przestępnym";
    break;

    case "1" : echo "Aktualny rok jest rokiem przestępnym";
}
