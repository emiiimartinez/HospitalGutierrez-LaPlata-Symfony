<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ConfiguracionInicial
 *
 * @ORM\Table(name="configuracion_inicial")
 * @ORM\Entity
 */
class ConfiguracionInicial
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
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=1024, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_contacto", type="string", length=255, nullable=false)
     */
    private $mailContacto;


}
