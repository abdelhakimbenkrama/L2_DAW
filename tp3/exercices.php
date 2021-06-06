<?php 
// test 1
$i = 1+2;
echo "1+2 ca fait $i" ; echo 1+2;


$a = "Bonjour ";
$b = " annee";
$annee = 1006.2;
$annee = $annee * 3;
$msg = $a.$b;
echo ("<H4>$msg $annee !</H4>\n");  


// test2 

for ($i = 1 ; $i <= 10 ; $i++){
    echo "$i <br/>\n";
}

$i = 1 ;
while($i <= 10){
    echo $i++;
}

// a faire 1

$i = 1;
while ( $i <= 20){
    echo $i; echo '- Je dois travailler mon cours DAW pour comprendre mon TP !<br/>';
    $i++;
}

// test 3
$a = 10;
$b = 23;
if ($a == $b) {
echo "a est égal à b ($a)\n";
}
elseif ($a < $b) {
echo "a est plus petit que b ($a < $b)\n";
}
else {
echo "a est plus grand que b ($a > $b)\n";
}





// a faire 2

$maVariable = 1;
if ( $maVariable == 1)
{echo "Ma variable maVariable est bien egale a 1<br />\n";
}
$maVariable = 2;
if ( $monVariable != 1)
{
echo " Ma variable maVariable n est pas egale 1<br />\n";
}

// a faire 3

function totale($x,$y)
{
$result=($x * 100) + ($y * 10);
return ($result);
}

$a=3; $b=2;
echo "<p>Le totale est = ".totale($a,$b)."</p>";
$a=6; $b=1;
echo "<p>Le totale est = ".totale($a,$b)."</p>";

?>