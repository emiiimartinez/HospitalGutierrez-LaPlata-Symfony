<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * RolPermiso
 *
 * @ORM\Table(name="rol_permiso", indexes={@ORM\Index(name="id_rol", columns={"id_rol", "id_permiso"})})
 * @ORM\Entity
 */
class RolPermiso
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
     * @ORM\Column(name="id_rol", type="integer", nullable=false)
     */
    private $idRol;

    /**
     * @var int
     *
     * @ORM\Column(name="id_permiso", type="integer", nullable=false)
     */
    private $idPermiso;


}
