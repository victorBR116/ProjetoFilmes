<?php

class Main{
    private $titulo;
    private $lancamento;
    private $atores;
    private $diretores;
    private $roteiristas;
    private $trilhaSonora;
    private $genero;
    private $descricao;
    private $nota;
    private $personagens;
    private $premiacoes;
    private $faixaEtaria;
  
    public function __construct($titulo, $lancamento, $atores, $diretores, $roteiristas, $trilhaSonora, $genero, $descricao, $nota, $personagens, $premiacoes, $faixaEtaria) {
      $this->titulo = $titulo;
      $this->lancamento = $lancamento;
      $this->atores = $atores;
      $this->diretores = $diretores;
      $this->roteiristas = $roteiristas;
      $this->trilhaSonora = $trilhaSonora;
      $this->genero = $genero;
      $this->descricao = $descricao;
      $this->nota = $nota;
      $this->personagens = $personagens;
      $this->premiacoes = $premiacoes;
      $this->faixaEtaria = $faixaEtaria;

    }        

    public function getTitulo() {
        return $this->titulo;
      }
    
      public function setTitulo($titulo) {
        $this->titulo = $titulo;
      }
    
      public function getLancamento() {
        return $this->lancamento;
      }
    
      public function setLancamento($lancamento) {
        $this->lancamento = $lancamento;
      }
    
      public function getAtores() {
        return $this->atores;
      }
    
      public function setAtores($atores) {
        $this->atores = $atores;
      }
    
      public function getDiretores() {
        return $this->diretores;
      }
    
      public function setDiretores($diretores) {
        $this->diretores = $diretores;
      }
    
      public function getRoteiristas() {
        return $this->roteiristas;
    }

      public function setRoteiristas($roteiristas) {
        $this->roteiristas = $roteiristas;
      }
    
      public function getTrilhaSonora() {
        return $this->trilhaSonora;
      }
    
      public function setTrilhaSonora($trilhaSonora) {
        $this->trilhaSonora = $trilhaSonora;
      }
    
      public function getGenero() {
        return $this->genero;
      }
    
      public function setGenero($genero) {
        $this->genero = $genero;
      }
    
      public function getDescricao() {
        return $this->descricao;
      }
    
      public function setDescricao($descricao) {
        $this->descricao = $descricao;
      }
    
      public function getNota() {
        return $this->nota;
      }
    
      public function setNota($nota) {
        $this->nota = $nota;
      }
    
      public function getPersonagens() {
        return $this->personagens;
      }
    
      public function setPersonagens($personagens) {
        $this->personagens = $personagens;
      }
    
      public function getPremiacoes() {
        return $this->premiacoes;
      }
    
      public function setPremiacoes($premiacoes) {
        $this->premiacoes = $premiacoes;
      }
      
      public function getFaixaEtaria() {
        return $this->faixaEtaria;
      }
    
      public function setFaixaEtaria($faixaEtaria) {
        $this->faixaEtaria = $faixaEtaria;
      }

}