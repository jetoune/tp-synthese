<?php

namespace Imie\RolesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Roles
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_roles", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")     
     */
    private $idRoles;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=25)
     */
    private $libelle;


    /**
     * Get idRoles
     *
     * @return integer 
     */
    public function getIdRoles()
    {
        return $this->idRoles;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Roles
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
