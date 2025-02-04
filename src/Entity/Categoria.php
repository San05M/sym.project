<?php
namespace dwes\app\entity;
use dwes\app\entity\IEntity;

class Categoria implements IEntity
{
    private $id = null;
    private $nombreCat = "";

    public function __construct($nombreCat = "")
    {
        $this->nombreCat = $nombreCat;
    }

    public function getId() { return $this->id; }
    public function getNombreCat(){ return $this->nombreCat; }
    public function setNombreCat($nombreCat): Categoria { $this->nombreCat = $nombreCat; return $this; }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'nombreCat' => $this->getNombreCat()
        ];
    }

    public function __toString(): string
    {
        return $this->getNombreCat();
    }
}