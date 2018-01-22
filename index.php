<meta charset="UTF-8" />

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

$esta = 'Eesti keel';
$mat = 'Matemaatika';
$fyss = 'Füüsika';

//sidusmassiivid
$hinded = array('Peeter'=>array( $esta =>4, $mat =>4, $fyss =>3),
                'Mari'=>array( $esta =>4, $mat =>4, $fyss =>3),
                'Jüri'=>array( $esta =>4, $mat =>4, $fyss =>3));


echo "$tervitus world!<br>";
echo '$tervitus world!<br>';
//echo $massiiv[0].'<br>''

// Tingimuslause
if ($bool == False){
// massiivi sisu näitamine
// print_r($massiiv);
for ($i = 0; $i < count($massiiv); $i++ ) {
echo $massiiv[$i].'<br>';
}
} else { echo "Tõeväärtus ei vasta nõutule"; }

$hinded_id = array_keys($hinded);
for ($i=0; $i < count($hinded); $i++ ){
  echo $hinded_id[$i].'<br>';
  foreach ($hinded[$hinded_id[$i]] as $aine => $hinne) {
    echo $aine." : ".$hinne.'<br>';
  }}

$file = fopen('counter.txt', "a") or die("Ei saanud faili avada");
if(!$file){
$txt = 1;
fwrite($file,$txt);
fclose($file);
} else {
  $txt =fread($file, filesize('counter.txt'));
  $new_txt = $txt + 1
  fwrite($file,$new_txt);
  fclose($file);
}

$file = fopen('counter.txt', "r") or die("Ei saanud faili avada");
echo fread($file, filesize('counter.txt'));
fclose($file);


?>
