<?php

namespace ResteauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandesalade
 *
 * @ORM\Table(name="commandesalade")
 * @ORM\Entity(repositoryClass="ResteauBundle\Repository\CommandesaladeRepository")
 */
class Commandesalade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr", type="integer")
     */
    private $nbr;
 
    /**
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumn(nullable=false)
     */
     	
    private $commande;

      /**
     * @ORM\ManyToOne(targetEntity="Salade")
     * @ORM\JoinColumn(nullable=false)
     */
     	
    private $salade;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbr
     *
     * @param integer $nbr
     *
     * @return Commandesalade
     */
    public function setNbr($nbr)
    {
        $this->nbr = $nbr;

        return $this;
    }

    /**
     * Get nbr
     *
     * @return int
     */
    public function getNbr()
    {
        return $this->nbr;
    }

    /**
     * Set commande
     *
     * @param \ResteauBundle\Entity\Commande $commande
     *
     * @return Commandesalade
     */
    public function setCommande(\ResteauBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \ResteauBundle\Entity\Commande
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set salade
     *
     * @param \ResteauBundle\Entity\Salade $salade
     *
     * @return Commandesalade
     */
    public function setSalade(\ResteauBundle\Entity\Salade $salade)
    {
        $this->salade = $salade;

        return $this;
    }

    /**
     * Get salade
     *
     * @return \ResteauBundle\Entity\Salade
     */
    public function getSalade()
    {
        return $this->salade;
    }
}
