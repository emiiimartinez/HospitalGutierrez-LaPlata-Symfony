<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ConfiguracionGeneral
 *
 * @ORM\Table(name="configuracion_general")
 * @ORM\Entity
 */
class ConfiguracionGeneral
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="cant_elementos_pagina", type="integer", nullable=false)
     */
    private $cantElementosPagina;

    /**
     * @var bool
     *
     * @ORM\Column(name="sitio_habilitado", type="boolean", nullable=false)
     */
    private $sitioHabilitado;


}
