<?php

// Tekstimuutuja
$tervitus = 'Hello';
# Täisar4vuline muutuja
$nr = 1;
// Kümnendmurd
$nr = 10.0121;
// Tõeväärtusmuutuja
$bool = True;
/*
Massiiv (php ja JS - array, python - list)
Üherealine kommentaar on // ja #
*/
$massiiv = array('Nimi',1974,10.81,'Perenimi' );

echo "$tervitus world!<br>";
echo '$tervitus world!<br>';
echo $massiiv[0];

// Tingimuslause
if ($bool == False){
  echo $massiiv;
} else { echo "Tõeväärtus ei vasta nõutule"; }

 ?>
