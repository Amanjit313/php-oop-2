<?php 

class Cucce{

  public $nome;
  public $descrizione;
  public $prezzo;

  public function __construct($_nome, $_descrizione, $_prezzo){

    $this->nome = $_nome;
    $this->descrizione = $_descrizione;
    $this->prezzo = $_prezzo;

  }

}

?>