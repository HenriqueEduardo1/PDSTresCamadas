<?php

// importa aqui require_once
require_once "business/domain/Conta.php";
require_once "business/facade/FachadaConta.php";

class App {
  private $fachada;

  public function App(){
    $this->fachada = new FachadaConta();
    
    $conta1 = new Conta("012654", "Isaac");
    $conta2 = new Conta("155751", "Henrique");
    $conta3 = new Conta("013548", "Daniel");
    
    // para inserir
    $this->fachada->inserirConta($conta1);
    $this->fachada->inserirConta($conta2);
    $this->fachada->inserirConta($conta3);
    

    // para atualizar
    $conta3->setNomeProprietario("Daniel Professor");
    $this->fachada->alterarConta($conta3->getNumero(), $conta3);
    
    // para remover
    $this->fachada->removerConta("012654");
    
    // para buscar
    //print_r($this->fachada->buscarConta("155751"));
    print_r($this->fachada->buscarTodas());
  }
}








class Nome {
  public $at1;
  private $at2;
  protected $at3;
  
  public function Nome(int $at1) {
    $this->at1 = $at1;
  }

  public function nomeMethod(): int {
    return 1;
  }

  private function abc() {

  }
}