<?php

namespace Creational\Prototype\RegistroPrototipo;
class GerenciadorPrototipos {
    private $prototipos = [];

    public function registrarPrototipo($nome, Relatorio $prototipo) {
        $this->prototipos[$nome] = $prototipo;
    }

    public function criarRelatorio($nome) {
        return $this->prototipos[$nome]->clonar();
    }
}

