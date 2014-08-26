<?php

namespace Imie\skillsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * skills
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imie\skillsBundle\Entity\skillsRepository")
 */
class skills
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_skills", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSkills;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=45)
     */
    private $libelle;

    /**
     * Get idSkills
     *
     * @return integer 
     */
    public function getIdSkills()
    {
        return $this->idSkills;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return skills
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
