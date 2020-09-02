<?php

/* $getal = 11;

echo var_dump(is_int($getal));
*/
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
/*
echo var_dump($klas);


foreach ($klas as $a) {

  echo $a, PHP_EOL;

}
*/
$bucketlist = [];
$hvlactiviteiten = readline("Hoeveel activiteiten wil je toevoegen aan de lijst?");

for ($i=0; $i < $hvlactiviteiten ; $i++) {

  $bucketlist[$i] = readline("Welke activiteit wil je toevoegen?");

}

var_dump($bucketlist);

foreach ($bucketlist as $b) {

  echo $b, PHP_EOL;

}





 ?>
