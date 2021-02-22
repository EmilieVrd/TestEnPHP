<?php
//Variables
echo "<b>Exercice 1</b>, les variables <br>";
//1
$nom = "Emilie";

//2
$name = "VERDIER";
$firstName = "Emilie";
$age = 27;

//3
$km = 1;
echo "q3 $km <br>";
$km = 3;
echo "q3 $km <br>";
$km = 125;
echo "q3 $km <br>";

//4
$a = "string";
$b = 12;
$c = 87.6;
$d = false;
echo "q4 $a, int: $b, float: $c, $d <br>";

//5
$int =  null;
echo $int;
$int = 4;
echo "q5 $int <br>";

//6
echo 'q6 Bonjour ' . $firstName . ' '. $name . ', comment vas-tu ? <br>';

//7
echo 'q6 Bonjour ' . $firstName . ' '. $name . ', tu as '. $age .' ans. <br>';

//8
$firstResult = 3 + 4;
$secondResult = 10 * 10;
$thirdResult = 25 / 5;
echo "q8 $firstResult, $secondResult, $thirdResult </br>";

//Les boucles
echo "<b>Exercice 2</b>, les boucles </br>";

//1
$q1 = 0;

while ($q1 < 10)
{
    echo "<br> $q1 ";
    $q1++;
}
//2
$ex2var1 = 0;
$ex2var2 = 10;
 while ($ex2var1 < 20) {
     $ex2var1 = $ex2var1 * $ex2var2;
     echo "<br> $ex2var1";
     $ex2var1++;
}
//3
$ex3var1 = 100;
 $ex3var2 = 10;
 while ($ex3var1 >= 10) {
     $ex3var1 = $ex3var1 - $ex3var2;
     echo "<br> $ex3var1";
     $ex3var1--;
}
//4
for ($ex4var1 = 1; $ex4var1 < 10;)  {
    echo "<br> $ex4var1";
    $ex4var1 = $ex4var1 + 0.5;
}
//5

for ($ex5var1 = 1; $ex5var1 <= 15; $ex5var1++) {
    echo "<br>On y arrive presque";
}

//6
for ($ex6var1 = 20; $ex6var1 > 0; $ex6var1--) {
    echo "<br>C'est presque bon...";
}
//7


for ($ex7var1 = 1; $ex7var1 < 100;)  {
    $ex7var1 = $ex7var1 + 15;
    echo "<br>$ex7var1 On tient le bon bout";
}
//8
for ($ex8var1 = 200; $ex8var1 > 0;) {
    $ex8var1= $ex8var1 - 12;
    echo "<br>$ex8var1 Enfin !";
}

//fonctions
echo "<br><b>Exercice 3</b>, les fonctions <br>";

//1
function plouf() {
    $firstName = "Wendy";
    $jolie = true;
    if ($jolie == true) {
        echo "$firstName est vraiment jolie :3";
    }
    else {
        echo "Elle est quand même jolie pff";
    }
}
plouf();
//2
function message() {
    echo "<br>Salut à tous les amis on se retrouve pour une nouvelle vidéo de cuisine";
}
message();

//3
function buns($firstBun, $seconBun) {
    echo '<br>Pour faire un burger, on a besoin du ' . $firstBun . 'et du ' . $seconBun . '!';
}
buns("Premier Pain ", "Second Pain");

//4
function nombres($prems, $deuz) {
    if ($prems > $deuz) {
        echo '<br>' . $prems . 'est plus grand que' . $deuz;
    }
    elseif ($prems < $deuz) {
        echo '<br> ' . $prems . 'est plus petit que' . $deuz;
    }
    elseif ($prems == $deuz) {
        echo '<br>' . $prems . 'est égal à' . $deuz;

    }
}
nombres (46, 87);

//5
function amnesie($firstName, $age) {
    echo ' <br> Je m\'appelle ' . $firstName . ' et j\'ai ' . $age . 'ans.';
}
amnesie('Emilie', 27);

//6
function amnesieSevere($firstName, $age, $lastName) {
    echo ' <br> Bonjour ' . $firstName . $lastName .' tu as ' . $age . 'ans.';
}
amnesieSevere('Emilie', 27, 'VERDIER');

//7
function passeport($femme, $age) {
    if (($femme == true) && ($age < 18)) {
        echo "<br>Vous êtes une femme mineure";
    }
    elseif (($femme == true) && ($age >= 18)) {
        echo "<br>Vous êtes une femme majeure";
    }
    elseif (($femme == false) && ($age < 18)) {
        echo "<br>Vous êtes un homme mineur";
    }
    else {
        echo "<br>Vous êtes un homme majeur";
    }
}
passeport(false, 19);

//8
function japprendsACompter($num1, $num2, $num3) {
    echo $num1 + $num2 + $num3;
}
japprendsACompter(46, 62, 84);


//arrays
echo "<br><b>Exercice 3</b>, les fonctions <br>";
//1
$months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');

//2
echo '<br>' . $months[2];

//3
echo '<br>' . $months[5];

//4
$months[7] = str_replace('u', 'û', 'Aout');
echo  '<br>' . $months[7] . '<br>';

//5
$chnord = array(
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme');

//6
echo $chnord[59];

//7
$chnord[52] = 'Marne';
print_r($chnord);

//8
foreach((array) $months as $m) {
    echo $m . '<br>';
}
//9
//voir question 5 du même exercice

//10
foreach($chnord as $key => $value) {
    echo 'Le département ' . $value . ' a le numéro ' . $key . '<br>';
}
?>