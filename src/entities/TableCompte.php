<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity 
 * @0RM\Table(name="tablecompte")
 */
class TableCompte
{
    /** @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
    */
    private $id;
     /**
      * @ORM\Column(type="string")  
     */
    private $numerocompte;
     /** 
      * @ORM\Column(type="string")
     */
    private $numeroagence;
     /** 
      * @ORM\Column(type="string") 
     */
    private $clerib;
     /** 
      * @ORM\Column(type="string") 
     */
    private $Dateouverture;
     /** 
      * @ORM\Column(type="string") 
     */
    private $montantInitial;
     /** 
      * @ORM\Column(type="string")
     */
    private $fraisOuverture;
     /** 
      * @ORM\Column(type="string") 
     */
    private $datebloquage;
     /** 
      * @ORM\Column(type="string") 
     */
    private $datedebloquage;
     /** 
      * @ORM\Column(type="string") 
     */
    private $agios;
    /**
     * Many tablecompte have one TableClient. This is the owning side.    
     * @ORM\ManyToOne(targetEntity="TableClient", inversedBy="comptes")
     * @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     */
    private $client;

    public function __construct()
    {
        $this->CompteTable = new ArrayCollection();
    }

public function getNumerocompte()
{
    return $this->numerocompte;
}

public function setNumerocompte($numerocompte)
{
    return $this->numerocompte=$numerocompte;
}

public function getNumeroagence()
{
    return $this->numeroagence;
}

public function setNumeroagence($numeroagence)
{
    return $this->numeroagence=$numeroagence;
}

public function getClerib()
{
    return $this->clerib;
}

public function setClerib($clerib)
{
    return $this->clerib=$clerib;
}

public function getDateouverture()
{
    return $this->Dateouverture;
}

public function setDateouverture($Dateouverture)
{
    return $this->Dateouverture=$Dateouverture;
}

public function getMontantinitial()
{
    return $this->montantInitial;
}

public function setMontantinitial($montantInitial)
{
    return $this->montantInitial=$montantInitial;
}

public function getFraisouverture()
{
    return $this->fraisOuverture;
}

public function setFraisouverture($fraisOuverture)
{
    return $this->fraisOuverture=$fraisOuverture;
}

public function getDatebloquage()
{
    return $this->datebloquage;
}

public function setDatebloquage($datebloquage)
{
    return $this->datebloquage=$datebloquage;
}

public function getDatedebloquage()
{
    return $this->datedebloquage;
}

public function  setDatedebloquage($datedebloquage)
{
    return $this->datedebloquage=$datedebloquage;
}

public function getAgios()
{
    return $this->agios;
}

public function setAgios($agios)
{
    return $this->agios=$agios;
}


    /**
     * Get many comptable have one tableclient. This is the owning side.
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set many comptable have one tableclient. This is the owning side.
     */ 
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

?>