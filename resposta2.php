<?php

class torcedor {
  public $nome;
  public $time;
  public $idade;


  public function __construct($nome, $time, $idade) {

    $this->nome = $nome;
    $this->time = $time;
    $this->idade = $idade;
  }

   public function exibir() {
    echo "torcedor: {$this->nome} {$this->time} {$this->idade}<br>;"

    
    $torcedor1 = new torcedor("lucas", "flamengo", 20);
    $torcedor2 = new torcedor("oliver", "corinthias", 20);
    $torcedor3 = new torcedor("gabriel", "vasco", 19);

 $torcedor1->exibir();
 $torcedor2->exibir();
 $torcedor3->exibir();
 ?>
 
