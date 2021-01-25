<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits)."<br>";
echo $fruits[1];
//Deuxieme ligne


$age = array("prenom"=>"Peter","age"=> "35","amis"=> "Ben","taille"=> "37","papa"=> "Joe","pointure"=> "43");

echo "<br><br>Peter is " .  $age["age"] . " years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" . $x . ", Value=" . $y."<br>";
}

//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
sort($colors);
foreach($colors as $x) echo $x."<br>";

echo "<br><br>";

rsort($colors);
foreach($colors as $x) echo $x."<br>";
// Quatrieme ligne

echo "<br><br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
natcasesort($age);
foreach($age as $x) echo $x."<br>";





