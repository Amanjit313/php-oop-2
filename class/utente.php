<?php 

class Utente{

  public $nome;
  public $cognome;
  public $email;
  public $registrato;
  public $dataCartaCredito;

  public function __construct($_nome, $_cognome, $_email, $_registrato, $_dataCartaCredito){

    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->email = $_email;
    $this->registrato = $_registrato;
    $this->dataCartaCredito = $_dataCartaCredito;
    $this->setRegistration();
    $this->setCard();

  }

  public function setRegistration(){
    if($this->registrato === 'Si'){
      $this->registrato = 'Utente registrato, hai il 20% di sconto su tutti i nostri prodotti!';
    }else if($this->registrato === 'No'){
      $this->registrato = 'Utente non registrato, registrati per ottenere il 20% di sconto su tutti i nostri prodotti!';
    }
  }

  public function setCard(){
    if($this->dataCartaCredito >= 2022){
      $this->dataCartaCredito = 'Carta valida!';
    } else{
      $this->dataCartaCredito = 'Carta non valida, inserisci una carta non scaduta!';
    }
  }

}

?>