<?php

namespace Imie\UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imie\UsersBundle\Entity\UsersRepository")
 */
class Users
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id_users", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")     
     */
    private $idUsers;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=45)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=45)
     */
    private $lastname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth", type="date")
     */
    private $birth;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibility", type="boolean")
     */
    private $disponibility;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=12)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="private_infos", type="text")
     */
    private $privateInfos;

    /**
     * @var integer
     *
     * @ORM\Column(name="roles_id_roles", type="smallint")
     * @ORM\Id
     */
    private $rolesIdRoles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="password_changes", type="boolean")
     */
    private $passwordChanges;


    /**
     * Get idUsers
     *
     * @return integer 
     */
    public function getIdUsers()
    {
        return $this->idUsers;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     * @return Users
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    
        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime 
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set disponibility
     *
     * @param boolean $disponibility
     * @return Users
     */
    public function setDisponibility($disponibility)
    {
        $this->disponibility = $disponibility;
    
        return $this;
    }

    /**
     * Get disponibility
     *
     * @return boolean 
     */
    public function getDisponibility()
    {
        return $this->disponibility;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Users
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Users
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set privateInfos
     *
     * @param string $privateInfos
     * @return Users
     */
    public function setPrivateInfos($privateInfos)
    {
        $this->privateInfos = $privateInfos;
    
        return $this;
    }

    /**
     * Get privateInfos
     *
     * @return string 
     */
    public function getPrivateInfos()
    {
        return $this->privateInfos;
    }

    /**
     * Set rolesIdRoles
     *
     * @param integer $rolesIdRoles
     * @return Users
     */
    public function setRolesIdRoles($rolesIdRoles)
    {
        $this->rolesIdRoles = $rolesIdRoles;
    
        return $this;
    }

    /**
     * Get rolesIdRoles
     *
     * @return integer 
     */
    public function getRolesIdRoles()
    {
        return $this->rolesIdRoles;
    }

    /**
     * Set passwordChanges
     *
     * @param boolean $passwordChanges
     * @return Users
     */
    public function setPasswordChanges($passwordChanges)
    {
        $this->passwordChanges = $passwordChanges;
    
        return $this;
    }

    /**
     * Get passwordChanges
     *
     * @return boolean 
     */
    public function getPasswordChanges()
    {
        return $this->passwordChanges;
    }
}
