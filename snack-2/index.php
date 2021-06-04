<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blocco senza cicli - Snack 2</title>
</head>
<body>


  <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


  <?php 
  /* dichiarazione variabili */

  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];
  

  ?>

<h1>Mail - ecco i tuoi dati</h1>
<p> <?php echo $name ?> </p>
<p> <?php echo $mail ?> </p>
<p> <?php echo $age ?> </p>

<?php 

/* controlli condizioni */

  if (strlen($name) >= 3 && strpos($mail, ".") !== false && strpos($mail, "@") !== false && is_numeric($age)  ){
    echo "Accesso riuscito";
  } else {
    echo "Accesso negato";
  }


?>

</body>
</html>