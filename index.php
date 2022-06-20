<?php 

require_once __DIR__ . "/class/utente.php";
require_once __DIR__ . "/class/prodotti.php";

$userOne = new Utente('Giovanni', 'Giorgio', 'giovanni607@gmail.com', 'Si', 2023);

$userTwo = new Utente('Ugo', 'De Ughi', 'ugo2001@gmail.com', 'Si', 2021);

$userThree = new Utente('Lollo', 'De Lolli', 'lolloMast01@gmail.com', 'No', 2028);

$userFour = new Utente('Marian', 'Cottis', 'none', 'No', 2020);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - OPP 2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="users">

    <div class="user-1">
      <h3>Nome: <?php echo $userOne->nome ?></h3>
      <h3>Cognome: <?php echo $userOne->cognome ?></h3>
      <h3>Email: <?php echo $userOne->email ?></h3>
      <h3>Registrato: <?php echo $userOne->registrato ?></h3>
      <h3>Carta di Credito: <?php echo $userOne->dataCartaCredito ?></h3>
    </div>

    <br>

    <div class="user-2">
      <h3>Nome: <?php echo $userTwo->nome ?></h3>
      <h3>Cognome: <?php echo $userTwo->cognome ?></h3>
      <h3>Email: <?php echo $userTwo->email ?></h3>
      <h3>Registrato: <?php echo $userTwo->registrato ?></h3>
      <h3>Carta di Credito: <?php echo $userTwo->dataCartaCredito ?></h3>
    </div>
    
    <br>
    
    <div class="user-3">
      <h3>Nome: <?php echo $userThree->nome ?></h3>
      <h3>Cognome: <?php echo $userThree->cognome ?></h3>
      <h3>Email: <?php echo $userThree->email ?></h3>
      <h3>Registrato: <?php echo $userThree->registrato ?></h3>
      <h3>Carta di Credito: <?php echo $userThree->dataCartaCredito ?></h3>
    </div>
    
    <br>
    
    <div class="user-4">
      <h3>Nome: <?php echo $userFour->nome ?></h3>
      <h3>Cognome: <?php echo $userFour->cognome ?></h3>
      <h3>Email: <?php echo $userFour->email ?></h3>
      <h3>Registrato: <?php echo $userFour->registrato ?></h3>
      <h3>Carta di Credito: <?php echo $userFour->dataCartaCredito ?></h3>
    </div>

    <br>

  </div>

</body>
</html>