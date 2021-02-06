<?php

// business/controller/
require_once "IFachadaConta.php";
require_once "business/controller/ControladorConta.php";

class FachadaConta implements IFachadaConta {
  
  private $controladorConta;

  public function FachadaConta() {
    $this->controladorConta = new ControladorConta();
  }

  public function inserirConta(Conta $conta): bool {
    return $this->controladorConta->inserirConta($conta);  
  }

  public function alterarConta(String $numero, Conta $conta): bool {
    return $this->controladorConta->alterarConta($numero, $conta);
  }

  public function removerConta(String $numero): bool {
    return $this->controladorConta->removerConta($numero);  
  }

  public function buscarConta(String $numero): ?Conta {
    return $this->controladorConta->buscarConta($numero);  
  }

  public function buscarTodas(): array {
    return $this->controladorConta->buscarTodas();  
  }
  
}