
<?php

require_once "business/facade/IFachadaConta.php";

class RepositorioContas implements IFachadaConta {

  private $contas;  
  
  public function RepositorioContas() {
    $this->contas = [];
  }

  public function inserirConta(Conta $conta): bool { 
    $numero = $conta->getNumero();    

    if(!$this->buscarConta($numero)){ 
      $this->contas[$numero] = $conta;
      return true;
    }
    return false;
  }

  public function alterarConta(String $numero, Conta $conta): bool {
    $contaAntiga = $this->buscarConta($numero);

    if($contaAntiga){
      $this->contas[$numero] = $conta;
      return true;
    }
    
    return false;
  }

  public function removerConta(String $numero): bool {
    $conta = $this->buscarConta($numero);

    if($conta){
      unset($this->contas[$numero]);
      return true;
    }

    return false;
  }

  public function buscarConta(String $numero): ?Conta {
    if (array_key_exists($numero, $this->contas)) {
      return $this->contas[$numero];
    }

    return null;
  }

  public function buscarTodas(): array {
    return $this->contas;
  }
  
}