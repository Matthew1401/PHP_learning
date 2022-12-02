<?php
$zadanie=1;

//Zadanie 1 HTML
echo "<u>Zadanie $zadanie z HTMLem</u><br>";

for($i=1; $i<=2; $i++)
{
?>
  <table cellspacing="0" cellpadding="0" border="1" style="width: 100%;">
  <tbody>
  <tr bgcolor="white">
    <?php
    for($c=1; $c<=10; $c++)
    {
        ?><td width="10%">Kolumna <?php echo $c; ?></td><?php
    }
    ?>
  </tr>
  </tbody>
 </table>
 <?php
}
echo "<br>";

//Zadanie 1 bez HTMLa
echo "<u>Zadanie $zadanie bez HTMLa</u><br>";
$zadanie++;

for($i=1; $i<=2; $i++)
{
    for($c=1; $c<=10; $c++) 
    {
        $text= $c; 
	    if ($c < 10) $text.= ', '; 
        echo $text;
    }
    echo "<br>";
}
echo "<br>";

//Zadanie 2 (od 1 do 100, dodając liczbę 2 kod jest niemożliwy do wykonania :)
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

//Pętla for
echo "Pętla for<br>";
for ($i=0; $i<=100; $i+=2) {
    echo $i; if ($i<100) echo ", ";
}
echo "<br>";

for ($i=100; $i>=0; $i-=4) {
    echo $i; if ($i>0) echo ", ";
}
echo "<br><br>";

//Pętla while
echo "Pętla while<br>";
$i=0;
while($i<=100) {
    echo $i; if ($i<100) echo ", "; $i+=2;
}
echo "<br>";
$i=100;
while($i>=0) {
    echo $i; if ($i>0) echo ", "; $i-=4;
}
echo "<br><br>";

//Pętla do_while
echo "Pętla do_while<br>";
$i=0;
do {
    echo $i; if ($i<100) echo ", "; $i+=2;
}
while($i<=100);
echo "<br>";
$i=100;
do {
    echo $i; if ($i>0) echo ", "; $i-=4;
}
while($i>=0);
echo "<br><br>";

//Zadanie 3
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

for ($n=10; $n>0; $n--) {
    echo $n*$n; if ($n>1) echo ", ";
} echo "<br>";
for ($n=10; $n>0; $n--) {
    if ($n%2==0) {
        echo $n*$n; if ($n>2) echo ", ";
    }
} echo "<br><br>";

//Zadanie 4
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

//Pętla for
echo "Pętla for<br>";
for ($i=0; $i<=10; $i++) {
    echo $i; if ($i<10) echo ", ";
} echo "<br><br>";

//Pętla while
echo "Pętla while<br>";
$i=0;
while($i<=10){
    echo $i++; if ($i<=10) echo ", ";
}echo "<br><br>";

//Pętla do_while
echo "Pętla do_while<br>";
$i=0;
do {
    echo $i++; if ($i<=10) echo ", ";
}
while($i<=10);
echo "<br><br>";

//Zadanie 5
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;
?>
<form method="POST">
	<div>
		<label>Podaj liczbe, żeby sprawdzić czy jest ona liczbą pierwszą :)<br><input name="liczba" value="" /></label><br />
		<input type="submit" value="Prześlij odpowiedź" />
	</div>
</form>
<?php
if (isset($_POST["liczba"])) {
    $liczba=$_POST["liczba"];
    
    if ($liczba<2) {
        echo "Podana liczba nie jest liczbą pierwszą!";
    }
    elseif ($liczba==2) {
        echo "Podana liczba jest liczbą pierwszą!";
    }
    else {
        for($i=2; $i<=$liczba; $i++) {
            if ($liczba%$i==0) {
                if ($liczba==$i) {
                    echo "Podana liczba jest liczbą pierwszą";
                    break;
                }
                echo "Podana liczba nie jest liczbą pierwszą";
                break;
            }
        }
        
    }
} echo "<br><br>";

//Zadanie 6
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;
$a=1;

echo '<table BORDER CELLSPACING=1 CELLPADDING=15 WIDTH=40 HEIGHT=40>';
echo "<tr bgcolor='black' span style='color: white'> <td></td>";
for ($i=1; $i<=10; $i++) {
    echo "<th> $i </th>";
}
for ($j=1; $j<=10; $j++) {
    echo "</tr> <tr> <th bgcolor='black' span style='color: white'> $j </th>";
    for ($h=1; $h<=10; $h++) {
        $b=$a*$h;
        echo "<td> $b </td>";
    }
    $a++;
}
echo "</tr> </table> <br><br>";

//Zadanie 7
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

?>
<form method="POST">
	<div>
		<label>Podaj wartość boku a<br><input name="a" value="" /></label><br />
		<input type="submit" value="Prześlij" />
	</div>
</form>
<?php

if (isset($_POST["a"])) {
    $a=$_POST["a"];
    
    if ($a<=0) echo "Podaj liczbę większą od 0";
    elseif ($a==1) echo '<font color=green> * </font>';
    else {
        echo '<font color=green> * </font>';
        for ($i=0; $i!=$a-2; $i++) {
            echo '<font color=white> * </font>';
            echo '<font color=blue> * </font>';
        }
        echo '<font color=white> * </font>';
        echo '<font color=green> * </font><br>';
        
        for ($j=0; $j!=$a-2; $j++) {
            echo '<font color=blue> * </font>';
            for ($g=0; $g!=$a-2; $g++) {
                echo '<font color=white> * </font>';
                echo '<font color=white> * </font>';
            }
            echo '<font color=white> * </font>';
            echo '<font color=blue> * </font><br>';
        }
        
        echo '<font color=green> * </font>';
        for ($h=0; $h!=$a-2; $h++) {
            echo '<font color=white> * </font>';
            echo '<font color=blue> * </font>';
        }
        echo '<font color=white> * </font>';
        echo '<font color=green> * </font><br>';
        echo "Pomimo, że to nie wygląda jak kwadrat to ilość gwiazdek się zgadza :)";

    }
}
echo "<br><br>";

//Zadanie 8
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

?>
<form method="POST">
	<div>
		<label>Podaj promień dla koła<br><input name="r" value="" /></label><br />
		<input type="submit" value="Prześlij" />
	</div>
</form>
<?php

if (isset($_POST["r"])) {
    $r=$_POST["r"];
    echo "Promień = $r<br>";
    function rysuj_kolo($n) {
        define('R', $n);
        echo '<pre>';    
        for($y=-R; $y<=R; $y++) {
            for($x=-R; $x<=R; $x++) { 
            if($x**2+$y**2<=(R+0.3)**2) echo '*'; 
            else echo ' '; 				
            echo ' ';			
        }   
        echo "<br>"; 
        }
        echo '</pre>';
    }
    rysuj_kolo($r);
} 
echo "<br><br>";
//Zrozumiałem kod !!! 
//Trochę się nad nim męczyłem, więc przeanalizowałem ten i przerobiłem :)

//Zadanie 9
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;
$g=6**3;
echo "Będzie $g bloków.";
echo "<br><br>";

//Zadanie 10
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

for ($i=1; $i<=10; $i++) {
    echo "$i<br>";
}
echo '<br><br>';

//Zadanie 11
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

for ($i=10; $i>=0; $i--) {
    echo "$i<br>";
}
echo '<br><br>';

//Zadanie 12
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

for ($i=10; $i>=0; $i=$i-0.5) { 
	$text= $i; 
	if ($i>0) $text.= ', '; 
	echo $text; 
}
echo '<br><br>';

//Zadanie 13
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$i=1;
while($i!=11) {
    echo "PHP$i ";
    $i++;
}
echo "<br><br>";

//Zadanie 14
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$i=1;
do {
    echo "• Element nr $i<br>";
    $i++;
}while($i!=5);
echo "<br>";

//Zadanie 15
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

$S=0;
for ($i=0; $i<10; $i++) {
    if ($i%2==1) $S+=$i;
}
echo "Suma pierwszych liczb nieparzystych od 0 do 10 to $S!<br><br>";

//Zadanie 16
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

for ($i=1; $i<10; $i++) {
    if ($i==4) {
        $i++;
        echo "$i-";
    }
    elseif ($i==9) echo $i;
    else {
        echo "$i-";        
    }
}
echo "<br><br>";

//Zadanie 17
echo "<u>Zadanie $zadanie</u><br>";
$zadanie++;

echo '<table BORDER CELLSPACING=5 CELLPADDING=15 WIDTH=50 HEIGHT=50>';
for ($i=0; $i<4; $i++) {
    echo "<tr>";
    for ($j=0; $j<4; $j++) {
        echo '<td></td> <td BGCOLOR="black"> </td>';
    }
    echo "</tr>";
    echo "<tr>";
    for ($h=0; $h<4; $h++) {
        echo '<td BGCOLOR="black"> </td> <td> </td>';
    }
    echo "</tr>";
}
