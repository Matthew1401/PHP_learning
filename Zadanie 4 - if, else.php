<!DOCTYPE html>
<html>
  <head>
    <title>Zadanie 2</title>
  </head>
</html>

<?php
$zadanie =1;
//Zadanie 1
//Napisz program sprawdzający czy liczba jest parzysta
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$a =4;
echo "Sprawdź czy liczba \$a jest liczbą parzystą!<br>\$a = $a<br>";
if($a==0) echo "Podałeś \$a jako 0<br><br>";
elseif($a%2==0) echo "Liczba \$a jest liczbą parzystą<br><br>";
else echo "Liczba \$a jest liczbą nieparzystą<br><br>";

//Zadanie 2
//Porównaj ze sobą 2 dowolne liczby i wypisz która jest większa
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

echo "Porównaj ze sobą 2 dowolne liczby i wyspisz która jest większa<br>";
$a =5;
$b =9;

echo "\$a = $a<br>\$b = $b<br>";
if($a>$b) echo "Liczba \$a jest większa od liczby \$b, $a > $b<br><br>";
else echo "Liczba \$b jest większa od liczby \$a, $b > $a<br><br>";

//Zadanie 3
//Porównaj ze sobą 4 nie równe sobie liczby i wypisz największą
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

echo "Porównaj ze sobą 4 nie równe sobie liczby i wypisz największą<br>";
$a = 10;
$b = 5;
$c = 18;
$d = 1;	
$m=$a;
echo "Porównujemy liczby: $a, $b, $c, $d</br>";	
if($b > $m) {$m = $b;}
if($c > $m) {$m = $c;}
if($d > $m) {$m = $d;} 	
echo "Największa z liczb to " .$m; 	
echo "<br><br>";

//Zadanie 4
// Porównaj ze sobą 3 nie równe sobie liczby i wypisz je w kolejności od największej do najmniejszej
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

echo "Porównaj ze sobą 3 nie równe sobie liczby i wypisz je w kolejności od największej do najmniejszej<br>";
$a = 10;
$b = 5;
$c = 18;	
echo "Porównujemy liczby: $a, $b, $c</br>";	
$min = $a; //zakladamy ze jest to najmniejsza	
if ($b < $a && $b < $c) {$min = $b;} 			
if ($c < $a && $c < $b) {$min = $c;}	 
$max = $a; //zakladamy ze jest to największa
if ($b > $max) {$max = $b;}  
if ($c > $max) {$max = $c;}  
if($a != $min && $a != $max) {$mid = $a;}
if($b != $min && $b != $max) {$mid = $b;}
if($c != $min && $c != $max) {$mid = $c;}    	
echo "Liczby po koleji rosnoącą: ".$max.', '.$mid.', '.$min; 	
echo "<br><br>";

//Zadanie 5
//Porównaj ze sobą 4 nie równe sobie liczby i wypisz je w kolejności od największej do najmniejszej
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$a = 10;	
$b = 5;	
$c = 18;	
$d = 1;	
echo "Porównujemy liczby: $a, $b, $c, $d<br>";
//Szukamy największej
if($a>$b && $a>$c && $a>$d) $l4=$a;
elseif($b>$a && $b>$c && $b>$d) $l4=$b;
elseif($c>$a && $c>$b && $c>$d) $l4=$c;
else $l4=$d;
//Szukamy najmniejszej
if($a<$b && $a<$c && $a<$d) $l1=$a;
elseif($b<$a && $b<$c && $b<$d) $l1=$b;
elseif($c<$a && $c<$b && $c<$d) $l1=$c;
else $l1=$d;
//Szukamy środkowych
if($a != $l1 && $a != $l4) {$m2 = $a;}
if($b != $l1 && $b != $l4) 	{
	$m1 = $b;	(empty($m2) ? $m2 = $b : $m2 = $m2);
}
if($c != $l1 && $c != $l4) 
{
	$m1 = $c;	(empty($m2) ? $m2 = $c : $m2 = $m2);
}
if($d != $l1 && $d != $l4) {$m1 = $d; $m2 = $m2;}
($m1 > $m2 ? $l2 = $m2 : $l2 = $m1);
($m1 < $m2 ? $l3  = $m2 : $l3  = $m1);    	
echo 'Liczby malejąco to: '.$l4.', '.$l3.', '.$l2.', '.$l1; 	
echo '<br /><br />';	

//Zadanie 6
//Napisz program potrafiący rozwiązywać równanie kwadratowe: y = ax2 + bx + c. Przypominamy, że ilość rozwiązań zależy od wartości tzw. współczynnika Δ (Δ = b2 − 4ac)
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

echo "Napisz skrypt, obliczający pierwiastki trójmianu kwadratowego ax<sup>2</sup> + bx + c = 0. Za obliczanie pierwiastka kwadratowego odpowiada funkcja sqrt(\$zmienna)</br></br>";	
$a = 1; 
$b = 2;
$c = 1;
$delta = $b * $b - 4 * $a * $c; //obliczamy wg wzoru
if ($delta > 0)
{
	$x1 = (-$b - sqrt($delta)) / 2 * $a; //sqrt() pierwiastek kwadratowy
	$x2 = (-$b + sqrt($delta)) / 2 * $a;
	echo ' posiada dwa pierwiastki x1 = '.$x1.', x2 = '.$x2;
}
else if ($delta == 0)
{
	$x = -$b / 2 * $a;
	echo ' Posiada jeden pierwiastek x = '.$x;
}
else echo ' Nie posiada pierwiastków';
echo "<br><br>";

//Zadanie 7
//Zrealizuj kalkulator, który dla zadanych liczb w zależności od wartości zmiennej $wybor wykonuje: mnożenie, dzielenie, odejmowanie, dodawanie. Użyj instrukcji “switch”
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

echo "Kalkulator</br>"; 
$liczba1 = 4;
$liczba2 = 2;
$wybor = '/';
switch ($wybor)
{
 case "+":   echo $liczba1+$liczba2;
   break;
 case "-":   echo $liczba1-$liczba2;
   break;
 case "*":   echo $liczba1*$liczba2;
   break;
 case "/":   echo $liczba1/$liczba2;
   break;
}
echo "<br><br>";

//Zadanie 8
//Napisz program, który dla danego punktu na płaszczyźnie sprawdzi,
//w której ćwiartce układu współrzędnych się on znajduje.
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$x =5; $y =-19283;
echo "x = $x<br>y = $y<br>P($x, $y)<br><br>Wynik:<br>";
if($x>0 && $y>0) echo "I";
elseif($x<0 && $y>0) echo "II";
elseif($x<0 && $y<0) echo "III";
elseif($x==0 && $y==0) echo "0";
elseif($x==0 && $y!=0) echo "0Y";
elseif($y==0 && $x!=0) echo "0X";
else echo "IV";
echo "<br><br>";

//Zadanie 9 
//Twoim zadaniem jest stwierdzić, czy z trzech odcinków
//o podanych długościach można zbudować trójkąt o dodatnim polu.
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$a =2; $b =10; $c =12; $what ="";
echo "a = $a<br>b = $b<br>c = $c<br><br>Czy z tych boków można zrobić trójkąt?<br>";
if($a>$b && $a>$c) $a>$b+$c ? $what="TAK" : $what = "NIE";
elseif($b>$a && $b>$c) $b>$a+$c ? $what="TAK" : $what = "NIE";
elseif($c>$a && $c>$b) $c>$b+$a ? $what="TAK" : $what = "NIE";
echo "$what<br><br>";

//Zadanie 10
//Napisz instrukcję switch wyświetlającą na podstawie zmiennej całkowitej “nr” nazwę miesiąca słownie
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$nr=6;
switch($nr)
{
    case "1": echo "Styczeń";
    break;
    case "2": echo "Luty";
    break;
    case "3": echo "Marzec";
    break;
    case "4": echo "Kwiecień";
    break;
    case "5": echo "Maj";
    break;
    case "6": echo "Czerwiec";
    break;
    case "7": echo "Lipiec";
    break;
    case "8": echo "Sierpień";
    break;
    case "9": echo "Wrzesień";
    break;
    case "10": echo "Październik";
    break;
    case "11": echo "Listopad";
    break;
    case "12": echo "Grudzień";
    break;
    default: echo "Nie ma tyle miesięcy!";
}
echo "<br><br>";

//Zadanie 11
//Napisz instrukcje która na podstawie zmiennej całkowitej ocena wyświetla jedna z informacji: brak promocji do następnej klasy, promocja do następnej klasy, promocja z oceną celującą
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$ocena=6;
switch($ocena)
{
    case "1": echo "Brak promocji do następnej klasy";
    break;
    case $ocena>1 && $ocena<6: echo "Promocja do następnej klasy";
    break;
    case "6": echo "Promocja z oceną celującą";
    break;
    default: echo "Źle wprowadzona zmienna";
}
echo "<br><br>";

//Zadanie 12
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$ocena=4;
switch($ocena)
{
    case "1": echo "Jeden";
    break;
    case "2": echo "Dwa";
    break;
    case "3": echo "Trzy";
    break;
    case "4": echo "Cztery";
    break;
    case "5": echo "Pięć";
    break;
    case "6": echo "Sześć";
    break;
    default: echo "Mordeczko nie ma takiej oceny :O";
}
echo "<br><br>";

//Zadanie 13
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$kasa=516.19;
$trudne=0;
echo "Kwota wynosi $kasa zł<br>Jaką walute chcesz sprawdzić?<br>Wpisz:<br>1 Funty<br>2 Dolary<br>3 Euro<br>";
?>
<form method="POST">
<input name="kwota" value="" />
<input type="submit" value="Wyślij"/>
</form>
<?php
if(isset($_POST["kwota"])) $trudne=$_POST["kwota"]; //To nie jest zbyt łatwe :)
switch($trudne)
{
  case "1": $kasa/=5.4988; echo round($kasa, 2); echo "£";
  break;
  case "2": $kasa/=4.9791; echo round($kasa, 2); echo "€";
  break;
  case "3": $kasa/=4.8724; echo round($kasa, 2); echo "$";
  break;
  default: echo "Proszę podaj liczbę z zakresu od 1 do 3 :)";
}
echo "<br><br>";

//Zadanie 14
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$metry=50.01;
$wybor ="cm";
echo $metry; echo "m<br>Na jaką jednostkę chcesz zamienić metry<br>* mm<br>* cm<br>* km<br>* mile<br>";
switch($wybor)
{
  case "mm": echo $metry*100; echo "mm<br>";
  break;
  case "cm": echo $metry*10; echo "cm<br>";
  break;
  case "km": echo $metry; echo "m<br>";
  break;
  case "mile": echo $metry/1000; echo "km<br>";
  break; 
  default: echo "Podaj wymienioną jednostkę :)";
}
echo "<br>";

//Zadanie 15
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$x=14;
echo "Sprawdzamy czy liczba x = $x jest więsza od liczby 15<br>";
if($x>15) echo "Ha ha! - est większa!";
else echo "Oj oj - jest mniejsza!";
echo "<br><br>";

//Zadanie 16
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$z=1000;
echo "Sprawdzamy czy liczba z = $z jest liczbą trzycyfrową<br>";
if($z>99 && $z<1000) echo "Jeeeeest trzycyfrowa!";
else echo "No... nie jest... jak widać";
echo "<br><br>";

//Zadanie 17
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

echo "Ile masz lat?<br>";
?>
<form method="get">
	<div>
		<label><input type="radio" name="wiek" value="1" />Mniej niż 18 lat</label><br />
		<label><input type="radio" name="wiek" value="2" />18-20 lat</label><br />
		<label><input type="radio" name="wiek" value="3" />21-29 lat</label><br />
		<label><input type="radio" name="wiek" value="4" />30-34 lat</label><br />
		<label><input type="radio" name="wiek" value="5" />35 i więcej lat</label><br />
		<input type="submit" value="Prześlij odpowiedź" />
	</div>
</form>
<?php
if(isset($_GET["wiek"])) 
{
  $age=$_GET["wiek"];
  switch($age)
 {
  case "1": echo "Jeszcze nie możesz głosować :(";
  break;
  case "2": echo "Możesz tylko głosować";
  break;
  case "3": echo "Możesz głosowaći kandydować do Sejmu";
  break;
  case "4": echo "Możesz głosować i kandydować do Sejmu i Senatu";
  break;
  case "5": echo "Możesz głosować, kandydować do Sejmu i Senatu oraz na Prezydenta";
  break;
 }
}
echo "<br><br>";
//Zadanie zrealizowane z pomocą funkcji if oraz Switch

//Zadanie 18
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

?>
<form method="POST">
	<div>
		<label>Podaj ile ma się wyświetlić plusów od 1 do 9<br><input name="ile" value="" /></label><br />
		<input type="submit" value="Prześlij odpowiedź" />
	</div>
</form>
<?php
if(isset($_POST["ile"])) 
{
  $ile=$_POST["ile"];
  switch($ile)
 {
  case "1": echo "+";
  break;
  case "2": echo "++";
  break;
  case "3": echo "+++";
  break;
  case "4": echo "++++";
  break;
  case "5": echo "+++++";
  break;
  case "6": echo "++++++";
  break;
  case "7": echo "+++++++";
  break;
  case "8": echo "++++++++";
  break;
  case "9": echo "+++++++++";
  break;
  default: echo "Wartość poza zakresem";
 }
}
echo "<br><br>";

//Zadanie 19
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$miesiac=12;
switch($miesiac)
{
 case $miesiac>=1&&$miesiac<=3: echo "Kwartał I";
 break;
 case $miesiac>=4&&$miesiac<=6: echo "Kwartał II";
 break;
 case $miesiac>=7&&$miesiac<=9: echo "Kwartał III";
 break;
 case $miesiac>=10&&$miesiac<=12: echo "Kwartał IV";
 break;
 default: echo "Błędny numer miesiąca";
}
echo "<br><br><br><u>KONIEC!</u>";