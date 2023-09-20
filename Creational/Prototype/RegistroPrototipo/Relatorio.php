<?php

namespace Creational\Prototype\RegistroPrototipo;

class Relatorio {
    public $conteudo;

    public function __construct($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function obterConteudo() {
        return $this->conteudo;
    }

    public function clonar() {
        return clone $this;
    }
}