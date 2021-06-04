<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blocco senza cicli - Snack 4</title>
</head>
<body>

<?php 

/* funzione che genera un array di numeri casuali diversi, lunghezza e min-max valori arbitrari */
function getArrayRandom($min, $max, $nItems){
  $newArr = [];
 
  /* riempie l'array fino al numero di elementi desiderato */
  while (count($newArr) < $nItems){
    $number = rand($min, $max);  /* genera un numero casuale entro un minimo ed un massimo */

    /* aggiunge il numero casuale solo se NON è già presente nell'array */
    if (!in_array($number, $newArr)){
      $newArr[] = $number;
    }
  }

  return $newArr;
}

var_dump(getArrayRandom(1,100, 15));

?>
  
</body>
</html>