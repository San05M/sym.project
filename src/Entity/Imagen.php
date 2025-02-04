<?php

namespace dwes\app\entity;

class Imagen implements IEntity
{
    private $id = null;
    private $titulo = "";
    private $descripcion = "";
    private $categoria = "";

    const RUTA_IMAGENES_PORTFOLIO = 'images/index/portfolio/';
    const RUTA_IMAGENES_GALERIA = 'images/index/gallery/';
    const RUTA_IMAGENES_CLIENTES = 'images/clients/';
    const RUTA_IMAGENES_SUBIDAS = 'assets/img/galeria/';

    public function __construct($titulo = "", $descripcion = "", $categoria = 1)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'titulo$titulo' => $this->getTitulo(),
            'descripcion' => $this->getDescripcion(),
            'categoria' => $this->getCategoria()
        ];
    }

    public function getId() { return $this->id; }
    public function geTtitulo() { return $this->titulo; }
    public function getDescripcion() { return $this->descripcion; }
    public function getCategoria() { return $this->categoria; }
    public function setTitulo($titulo): Imagen { $this->titulo = $titulo; return $this; }
    public function setDescripcion($descripcion): Imagen { $this->descripcion = $descripcion; return $this; }
    public function setCategoria($categoria): Imagen { $this->categoria = $categoria; return $this; }
    public function getUrlPortfolio() { return self::RUTA_IMAGENES_PORTFOLIO . $this->getTitulo(); }
    public function getUrlGaleria() { return self::RUTA_IMAGENES_GALERIA . $this->getTitulo(); }
    public function getUrlClientes() { return self::RUTA_IMAGENES_CLIENTES . $this->getTitulo(); }
    public function getUrlSubidas() { return self::RUTA_IMAGENES_SUBIDAS . $this->getTitulo(); }

    public function __toString()
    {
        return $this->descripcion;
    }
}
