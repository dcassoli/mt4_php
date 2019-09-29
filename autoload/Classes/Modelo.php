<?php 


namespace autoload\Classes;


class Modelo{
    private $nome;

    public function __construct(string $nome){
        $this->setNome($nome);
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getNome() : string{
        return $this->nome;
    }
}