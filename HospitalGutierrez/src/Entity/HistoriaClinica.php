<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriaClinica
 *
 * @ORM\Table(name="historia_clinica", indexes={@ORM\Index(name="id_paciente", columns={"id_paciente", "id_usuario"})})
 * @ORM\Entity
 */
class HistoriaClinica
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="peso", type="integer", nullable=false)
     */
    private $peso;

    /**
     * @var bool
     *
     * @ORM\Column(name="vacunas_completas", type="boolean", nullable=false)
     */
    private $vacunasCompletas;

    /**
     * @var string
     *
     * @ORM\Column(name="vacunas_observaciones", type="string", length=512, nullable=false)
     */
    private $vacunasObservaciones;

    /**
     * @var bool
     *
     * @ORM\Column(name="maduracion_acorde", type="boolean", nullable=false)
     */
    private $maduracionAcorde;

    /**
     * @var string
     *
     * @ORM\Column(name="maduracion_observaciones", type="string", length=512, nullable=false)
     */
    private $maduracionObservaciones;

    /**
     * @var bool
     *
     * @ORM\Column(name="ex_fisico_normal", type="boolean", nullable=false)
     */
    private $exFisicoNormal;

    /**
     * @var string
     *
     * @ORM\Column(name="ex_fisico_observaciones", type="string", length=511, nullable=false)
     */
    private $exFisicoObservaciones;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pc", type="integer", nullable=true)
     */
    private $pc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ppc", type="integer", nullable=true)
     */
    private $ppc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="talla", type="integer", nullable=true)
     */
    private $talla;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alimentacion", type="string", length=512, nullable=true)
     */
    private $alimentacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones_generales", type="string", length=512, nullable=true)
     */
    private $observacionesGenerales;

    /**
     * @var bool
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_paciente", type="integer", nullable=false)
     */
    private $idPaciente;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
