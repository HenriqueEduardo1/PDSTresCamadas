<?php

class Conta {

  private $numero;
  private $nomeProprietario;
  
  public function Conta(String $numero, String $nomeProprietario){
    $this->numero = $numero;
    $this->nomeProprietario = $nomeProprietario;
  }
  
  public function getNumero(){
    return $this->numero;
  }

  public function getNomeProprietario() {
    return $this->nomeProprietario;
  }
  
  public function setNomeProprietario(String $nomeProprietario) {
    $this->nomeProprietario = $nomeProprietario;
  }
}