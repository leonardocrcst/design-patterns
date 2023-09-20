<?php

namespace Creational\Prototype;

class Smartphone implements ProductPrototype
{
    private $marca;
    private $modelo;
    private $cor;

    public function __construct($marca, $modelo, $cor)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    // Método para clonar o objeto
    public function clone()
    {
        return new self($this->marca, $this->modelo, $this->cor);
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }
}