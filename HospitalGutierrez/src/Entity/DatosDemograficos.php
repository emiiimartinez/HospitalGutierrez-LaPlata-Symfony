<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DatosDemograficos
 *
 * @ORM\Table(name="datos_demograficos", indexes={@ORM\Index(name="tipo_vivienda", columns={"id_vivienda"}), @ORM\Index(name="id_agua", columns={"id_agua"}), @ORM\Index(name="id_calefaccion", columns={"id_calefaccion"})})
 * @ORM\Entity
 */
class DatosDemograficos
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
     * @ORM\Column(name="id_vivienda", type="string", length=11, nullable=false)
     */
    private $idVivienda;

    /**
     * @var string
     *
     * @ORM\Column(name="id_agua", type="string", length=11, nullable=false)
     */
    private $idAgua;

    /**
     * @var string
     *
     * @ORM\Column(name="id_calefaccion", type="string", length=11, nullable=false)
     */
    private $idCalefaccion;

    /**
     * @var bool
     *
     * @ORM\Column(name="mascota", type="boolean", nullable=false)
     */
    private $mascota;

    /**
     * @var bool
     *
     * @ORM\Column(name="electricidad", type="boolean", nullable=false)
     */
    private $electricidad;

    /**
     * @var bool
     *
     * @ORM\Column(name="heladera", type="boolean", nullable=false)
     */
    private $heladera;

    /**
     * @var int
     *
     * @ORM\Column(name="id_paciente", type="integer", nullable=false)
     */
    private $idPaciente;


}
