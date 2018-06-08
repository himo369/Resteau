<?php

namespace ResteauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeEntree
 *
 * @ORM\Table(name="commande_entree")
 * @ORM\Entity(repositoryClass="ResteauBundle\Repository\CommandeEntreeRepository")
 */
class CommandeEntree
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
     * @ORM\ManyToOne(targetEntity="Entree")
     * @ORM\JoinColumn(nullable=false)
     */
     	
    private $entree;


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
     * @return CommandeEntree
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
     * @return CommandeEntree
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
     * Set entree
     *
     * @param \ResteauBundle\Entity\Entree $entree
     *
     * @return CommandeEntree
     */
    public function setEntree(\ResteauBundle\Entity\Entree $entree)
    {
        $this->entree = $entree;

        return $this;
    }

    /**
     * Get entree
     *
     * @return \ResteauBundle\Entity\Entree
     */
    public function getEntree()
    {
        return $this->entree;
    }
}
