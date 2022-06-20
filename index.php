<?php 

require_once __DIR__ . "/class/utente.php";
require_once __DIR__ . "/class/prodotti.php";

/* User List */
$userOne = new Utente('Giovanni', 'Giorgio', 'giovanni607@gmail.com', 'Si', 2023);

$userTwo = new Utente('Ugo', 'De Ughi', 'ugo2001@gmail.com', 'Si', 2021);

$userThree = new Utente('Lollo', 'De Lolli', 'lolloMast01@gmail.com', 'No', 2028);

$userFour = new Utente('Marian', 'Cottis', 'none', 'No', 2020);

/* Product List */

/* Cibo */
$productCiboOne = new Cibo('Crocchette', 'Deliziose crocchette irresistibili con base di pollo e patate', '12,99€');

$productCiboTwo = new Cibo('Patè', 'Delizioso patè irresistibili con base di pesce e carote', '2,99€');

/* Giocattoli */
$productGiocattoliOne = new Giocattoli('Pallina', 'Una fantastica pallina di plastica per far divertire il vostro pet', '5,99€');

$productGiocattoliTwo = new Giocattoli('Frisbee', 'Un fantastico frisbee per far divertire il vostro pet', '7,99€');

/* Cucce */
$productCucceOne = new Cucce('Cuccia piccola', 'Una morbidissima cuccia per il vostro pet, per sogni tranquilli', '14,99€');

$productCucceTwo = new Cucce('Cuccia grande', 'Una morbidissima cuccia per il vostro pet, per sogni tranquilli', '19,99€');

/* Oggetti */
$productOggettiOne = new Oggetti('Ciotola', 'Una bellissima ciotola dove porre il cibo per il vostro pet', '4,99€');

$productOggettiTwo = new Oggetti('Set Corda da spasso', 'Un bellissimo set per il vostro pet, per portarlo a spasso senza problemi', '9,99€');

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

  <!-- Lista Utenti -->
  <div class="users">
    
    <h1>Lista Utenti</h1>
    
    <br>
    
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
    <br>
    
  </div>
  <!-- /Lista Utenti -->
  
  <!-- Lista Prodotti -->
  <div class="product">
    
    <h1>Lista Prodotti</h1>
    
    <br>
    
    <!-- Sezione Cibo -->
    <div class="cibo">
      
      <h2>Categoria Cibo</h2>
      
      <br>
      
      <div class="product-cibo-1">
        <h3>Nome: <?php echo $productCiboOne->nome ?></h3>
        <h3>Descrizione: <?php echo $productCiboOne->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productCiboOne->prezzo ?></h3>
      </div>
      
      <br>
      
      <div class="product-cibo-2">
        <h3>Nome: <?php echo $productCiboTwo->nome ?></h3>
        <h3>Descrizione: <?php echo $productCiboTwo->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productCiboTwo->prezzo ?></h3>
      </div>
      
    </div>

    <br>
      <!-- Sezione Cibo -->
    
    <!-- Sezione Giocattoli -->
    <div class="giocattoli">
      
      <h2>Categoria Giocattoli</h2>
      
      <br>
      
      <div class="product-giocattoli-1">
        <h3>Nome: <?php echo $productGiocattoliOne->nome ?></h3>
        <h3>Descrizione: <?php echo $productGiocattoliOne->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productGiocattoliOne->prezzo ?></h3>
      </div>
      
      <br>
      
      <div class="product-giocattoli-2">
        <h3>Nome: <?php echo $productGiocattoliTwo->nome ?></h3>
        <h3>Descrizione: <?php echo $productGiocattoliTwo->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productGiocattoliTwo->prezzo ?></h3>
      </div>
      
    </div>

    <br>
      <!-- Sezione Giocattoli -->

    <!-- Sezione Cucce -->
    <div class="cucce">
      
      <h2>Categoria Cucce</h2>
      
      <br>
      
      <div class="product-cucce-1">
        <h3>Nome: <?php echo $productCucceOne->nome ?></h3>
        <h3>Descrizione: <?php echo $productCucceOne->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productCucceOne->prezzo ?></h3>
      </div>
      
      <br>
      
      <div class="product-cucce-2">
        <h3>Nome: <?php echo $productCucceTwo->nome ?></h3>
        <h3>Descrizione: <?php echo $productCucceTwo->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productCucceTwo->prezzo ?></h3>
      </div>
      
    </div>

    <br>
      <!-- Sezione Cucce -->

    <!-- Sezione Oggetti -->
    <div class="oggetti">
      
      <h2>Categoria Oggetti</h2>
      
      <br>
      
      <div class="product-oggetti-1">
        <h3>Nome: <?php echo $productOggettiOne->nome ?></h3>
        <h3>Descrizione: <?php echo $productOggettiOne->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productOggettiOne->prezzo ?></h3>
      </div>
      
      <br>
      
      <div class="product-oggetti-2">
        <h3>Nome: <?php echo $productOggettiTwo->nome ?></h3>
        <h3>Descrizione: <?php echo $productOggettiTwo->descrizione ?></h3>
        <h3>Prezzo: <?php echo $productOggettiTwo->prezzo ?></h3>
      </div>
      
    </div>

    <br>
      <!-- Sezione Oggetti -->
    
  </div>
  <!-- /Lista Prodotti -->
  
</body>
</html>