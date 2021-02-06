<?php

require_once "business/facade/IFachadaConta.php";
require_once "data/RepositorioContas.php";

class ControladorConta implements IFachadaConta {

  private $repContas;  
  
  public function ControladorConta() {
    return $this->repContas = new RepositorioContas();
  }

  public function inserirConta(Conta $conta): bool {
    return $this->repContas->inserirConta($conta);  
  }

  public function alterarConta(String $numero, Conta $conta): bool {
    return $this->repContas->alterarConta($numero, $conta);
  }

  public function removerConta(String $numero): bool {
    return $this->repContas->removerConta($numero);  
  }

  public function buscarConta(String $numero): ?Conta {
    return $this->repContas->buscarConta($numero);  
  }

  public function buscarTodas(): array {
    return $this->repContas->buscarTodas();  
  }
  
}