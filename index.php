<?php

// Tekstimuutuja
$tervitus = 'Hello';
# Täisar4vuline muutuja
$nr = 1;
// Kümnendmurd
$nr = 10.0121;
// Tõeväärtusmuutuja
$bool = False;
/*
Massiiv (php ja JS - array, python - list)
Üherealine kommentaar on // ja #
*/
$massiiv = array('Nimi',1974,10.81,'Perenimi' );

echo "$tervitus world!<br>";
echo '$tervitus world!<br>';
echo $massiiv[0].'<br>';

// Tingimuslause
if ($bool == False){
// massiivi sisu näitamine
// print_r($massiiv);
for ($i = 0; $i < count($massiiv); $i++ ) {
echo $massiiv[$i].'<br>';
}
} else { echo "Tõeväärtus ei vasta nõutule"; }

 ?>
