<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
$BasketballMatches = [ ["nomeIncontro" => "Olimpia Milano - Cantù" , "punteggio" => "55 - 60"] ,  ["nomeIncontro" => "Sassari - Varese" , "punteggio" => "85 - 73"]  ];

var_dump($BasketballMatches);

var_dump($BasketballMatches[0]);
?>

<?php 
$matches = [
  [
    "team1" => "Olimpia Milano",
    "team2" => "Sassari",
    "points1" => "34",
    "points2" => "43"
  ], 
  ]

?>


<!-- Con blocco foreach, solo valore, non key => value -->
<!-- Attenzone apertura e chiusura graffe -->



</body>
</html>


