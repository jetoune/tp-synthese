<?php

namespace Imie\WorkgroupsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workgroups
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imie\WorkgroupsBundle\Entity\WorkgroupsRepository")
 */
class Workgroups
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_workgroups", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idWorkgroups;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45)
     */
    private $libelle;

    /**
     * Get idWorkgroups
     *
     * @return integer 
     */
    public function getIdWorkgroups()
    {
        return $this->idWorkgroups;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Workgroups
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
