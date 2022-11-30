<?php $php = "\$\$PHP ćwiczymy string $$";
//Tutaj i w zakładce head jest rozwiązanie do zadania 9 i 10
?>

<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $php; ?> </title>
</head>
<body>

<?php
$zad =1;
//Zadanie 1
echo "Zadanie $zad </br>";
$zad++;

echo "Tomorrow I'll learn PHP global variables.</br>This is a bad command : del c:\\\*.*";
echo "</br></br>";

//Zadanie 2
echo "Zadanie $zad </br>";
$zad++;

$zmienna = "Kocham PHP";
echo "$zmienna</br></br>";

//Zadanie 3
echo "Zadanie $zad </br>";
$zad++;

define("URL", "https://pl.wikibooks.org/wiki/PHP/Pierwszy_skrypt");
?>
<a href =" <?php echo URL; ?>"><?php echo URL; ?></a>
<?php
echo "</br></br>";

//Zadanie 4
echo "Zadanie $zad </br>";
$zad++;

$a =10; $b =3;
echo "\$a = $a </br>";
echo "\$b = $b </br>";

echo "\$a + \$b = $a + $b = ";
echo $a+$b;
echo "</br>";

echo "\$a - \$b = $a - $b = ";
echo $a-$b;
echo "</br>";

echo "\$a * \$b = $a * $b = ";
echo $a*$b;
echo "</br>";

echo "\$a / \$b = $a / $b = ";
echo $a/$b;
echo "</br>";

echo "\$a % \$b = $a % $b = ";
echo $a%$b;
echo "</br>";

echo "\$a ** \$b = $a ** $b = ";
echo $a**$b;
echo "</br>";

echo "-\$a = ";
echo -$a;
echo "</br>";

echo "-\$b = ";
echo -$b;
echo "</br></br>";

//Zadanie 5
echo "Zadanie $zad </br>";
$zad++;

$c =12; $d =6;
echo "\$c = $c </br>";
echo "\$d = $d </br>";

echo "\$c += \$d to jest to samo co \$c = \$c + \$d, czyli $c + $d = ";
echo $c+$d;
echo "</br>";

echo "\$c -= \$d to jest to samo co \$c = \$c - \$d, czyli $c - $d = ";
echo $c-$d;
echo "</br>";

echo "\$c *= \$d to jest to samo co \$c = \$c * \$d, czyli $c * $d = ";
echo $c*$d;
echo "</br>";

echo "\$c /= \$d to jest to samo co \$c = \$c / \$d, czyli $c / $d = ";
echo $c/$d;
echo "</br>";

echo "\$c %= \$d to jest to samo co \$c = \$c % \$d, czyli $c % $d = ";
echo $c%$d;
echo "</br></br>";

//Zadanie 6
echo "Zadanie $zad </br>";
$zad++;

$A = 5; $B = 9; $C = 5;
// Operatory porównania zwracają TRUE lub FALSE więc używamy komendy var_dump()
var_dump( $A == $B );
var_dump( $A != $B );
var_dump( $A == $C );
var_dump( $A === $C );
echo "</br></br>";

$first = true; $second = false;
var_dump( $first == $second);
//Zamiana $second na true.
$second = true;
var_dump( $first == $second);
//Obie zmienne na false
$first = false; $second = false;
var_dump( $first == $second);
//Zamiana komendy var_dump na echo
echo $first==$second;
echo "</br></br>";

//Zadanie 7
echo "Zadanie $zad </br>";
$zad++;

$nr1 =9; $nr2=144; $resultModulo =0;
echo "\$nr1 = $nr1</br>\$nr2 = $nr2</br>\$resultModulo = $resultModulo</br>";
$resultModulo=$nr1%$nr2;
echo "\$resultModulo = \$nr1 % \$nr2 = $nr1 % $nr2 = $resultModulo</br></br>";

//Zadanie 8
echo "Zadanie $zad </br>";
$zad++;

echo "Używana wersja PHP: ";
echo phpversion();
echo "</br></br>";

//Zadanie 9 i 10
echo "Zadanie $zad i ";
$zad++;
echo "$zad </br>";
$zad++;
//Kod do ustawienia tytułu jest zapisany w zakładce head, a zmienna $php na samej górze kodu
?>
<h1>
<?php echo "PHP - podstawy</br></br>"; ?>
</h1>
<h2><?php echo $php; ?> </h2>
<?php

//Zadanie 11
echo "Zadanie $zad </br>";
$zad++;

$a =2;
$pi =3.14;
$tekst ="Jestem mistrzem PHP";
echo "$a to liczba parzysta</br>Liczba PI to: $pi </br>$tekst</br></br>";

//Zadanie 12
echo "Zadanie $zad </br>";
$zad++;
//To zadanie w podobny sposób zrobiłem już wyżej!
$a=4;
$b=8;
echo "Dodawanie: ";
echo $a+$b;
echo "</br>";

echo "Odejmowanie: ";
echo $a-$b;
echo "</br>";

echo "Dzielenie: ";
echo $a/$b;
echo "</br>";

echo "Mnożenie: ";
echo $a*$b;
echo "</br>";

echo "Potęgowanie: ";
echo $a**$b;
echo "</br></br>";

//Zadanie 13
echo "Zadanie $zad </br>";
$zad++;

$zmiennax1 =10;
$zmiennax2 =12;
$zamiana =0;
echo "\$zmiennax1 = $zmiennax1</br>\$zmiennax2 = $zmiennax2</br></br>Po zamianie:</br>";
$zamiana = $zmiennax1;
$zmiennax1 = $zmiennax2;
$zmiennax2 = $zamiana;
echo "\$zmiennax1 = $zmiennax1</br>\$zmiennax2 = $zmiennax2</br></br>";

//Zadanie 14
echo "Zadanie $zad </br>";
$zad++;

$x =20;
$y =100;
$L = 2*$x+2*$y;
$P =$x*$y;
echo "Obwód prostokąta wynosi: $L</br>Pole powierzchni wynosi: $P";

?>
</body>
</html>