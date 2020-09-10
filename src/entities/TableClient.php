<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity 
 * @0RM\Table(name="tableclient")
 */
class TableClient
{
    /** @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
    */
    private $id;
     /** 
      * @ORM\Column(type="string")
     */
    private $nom;
     /** 
      * @ORM\Column(type="string") 
     */
    private $prenom;
     /** 
      * @ORM\Column(type="string") 
     */
    private $datenaissance;
     /** 
      * @ORM\Column(type="string") 
     */
    private $telephone;
    /**   
     * @ORM\OneToMany(targetEntity="TableCompte", mappedBy="client")
     
     */
    private $comptes;

    public function __construct()
    {
        $this->TableClient = new ArrayCollection();
    }



    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of datenaissance
     */ 
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set the value of datenaissance
     *
     * @return  self
     */ 
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get many CompTable have one TableClient. This is the owning side.
     */ 
    public function getCompte()
    {
        return $this->compte;
    }

    /**
     * Set many CompTable have one TableClient. This is the owning side.
     *
     * @return  self
     */ 
    public function setCompte($compte)
    {
        $this->compte = $compte;

        return $this;
    }

    /**
     * Get the value of Id
     */ 
    public function getid()
    {
        return $this->Id;
    }

    /**
     * Set the value of Id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }
}

?>