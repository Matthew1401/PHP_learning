<?php
$zadanie=1;

//Zadanie 1
echo "<u><strong>Zadanie $zadanie</strong></u><br>";
$zadanie++;
echo "Wpisz tekst:<br>";

?>
<form method="POST">
<input name="nazwa_pola1" value="" />
<input type="submit" value="Wyślij" />
</form>
<?php

if(isset($_POST["nazwa_pola1"])) 
{
    $str=$_POST["nazwa_pola1"];
    iks_de($str);
}

function iks_de($a) {

//zmiana na wielkie litery
$text = strtoupper($a); 
echo $text.'<br>';

//zmiana na małe litery
$text = strtolower($a); 
echo $text.'<br>';

//jak w zdaniu
$text = ucfirst($a); 
echo $text.'<br>';

//wielka każda pierwsza litera wyrazu
$text = ucwords($a); 
echo $text.'<br>'; 
}
echo "<br><br>";


//Zadanie 2
echo "<u><strong>Zadanie $zadanie</strong></u><br>";
$zadanie++;
echo "Skrypt rozdzieli w emaili domenę.<br>Wpisz email:<br>";

?>
<form method="POST">
<input name="nazwa_pola2" value="" />
<input type="submit" value="Wyślij" />
</form>
<?php

if(isset($_POST["nazwa_pola2"])) 
{
    $email=$_POST["nazwa_pola2"];
    loool($email);
}

function loool($a) {
    $domain = strstr($a, '@');
    echo "Domena: $domain";
}
echo "<br><br><br>";


//Zadanie 3
echo "<u><strong>Zadanie $zadanie</strong></u><br>";
$zadanie++;
echo "Podaj dwa wyrazy. Wyraz, który podasz jako drugi zamieni w tekście wyraz, który podasz jako pierwszy.";

?>
<form method="POST">
<input name="nazwa_pola3" value="" />
<input name="nazwa_pola4" value="" />
<input type="submit" value="Wyślij" />
</form>
<?php

if (empty($_POST["nazwa_pola3"])) echo "I ja mu wtedy mówie: stary poproszę dwa lizaki :O";

if(isset($_POST["nazwa_pola3"])) 
{
    $a1=$_POST["nazwa_pola3"];
    $b1=$_POST["nazwa_pola4"];
    Zamiana($a1, $b1);
}

function Zamiana($a, $b) {
    $arr = array("$a" => "$b");
    echo strtr("I ja mu wtedy mówie: stary poproszę dwa lizaki :O",$arr);
}
echo "<br><br>";


//Zadanie 4
echo "<u><strong>Zadanie $zadanie</strong></u><br>";
$zadanie++;

?>
<form method="POST">
Podaj hasło: <input name="nazwa_pola5" value="" /><br>
Powtórz: <input name="nazwa_pola6" value="" /><br>
<input type="submit" value="Wyślij" />
</form>
<?php

if(isset($_POST["nazwa_pola5"])) 
{
    $a1=$_POST["nazwa_pola5"];
    $b1=$_POST["nazwa_pola6"];
    echo "Zakodowane hasło:<br>";
    echo password_hash("$a1", PASSWORD_DEFAULT).'<br>';
    $hash = password_hash("$b1", PASSWORD_DEFAULT);
    if (password_verify("$a1", $hash)) echo 'Password is valid!';
    else echo 'Invalid password.';
}
echo "<br><br>";


//Zadanie 5
echo "<u><strong>Zadanie $zadanie</strong></u><br>";
$zadanie++;

$master="Jestem mistrzem";
echo "$master<br>";
echo "a) ";
echo substr_replace($master, 'Mateusz', 0, 6) . "<br>"; 
echo "b) ";
echo substr_replace($master, ' PHP ', 16, 0) . "<br>"; 
echo "c) ";
echo substr($master, 7);
echo "<br><br>";


//Zadanie 1/6
echo "<u><strong>Zadanie $zadanie</strong></u><br>";
$zadanie++;

echo preg_match('/[0-9]{1}/', 'asbjadghsd');
echo "<br><br>";

//Zadanie 2/6
echo "<u><strong>Zadanie $zadanie</strong></u><br>";
$zadanie++;

echo preg_match('/ą|ć|ę|ł|ń|ó|ś/', 'ąsbjadghsd');
echo "<br><br>";
