<?php

interface IFachadaConta {

  public function inserirConta(Conta $conta): bool;
  public function alterarConta(String $numero, Conta $conta): bool;
  public function removerConta(String $numero): bool;
  public function buscarConta(String $numero): ?Conta;
  public function buscarTodas(): array;

}