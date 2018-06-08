<?php

namespace ResteauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeDessert
 *
 * @ORM\Table(name="commande_dessert")
 * @ORM\Entity(repositoryClass="ResteauBundle\Repository\CommandeDessertRepository")
 */
class CommandeDessert
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
     * @ORM\ManyToOne(targetEntity="Dessert")
     * @ORM\JoinColumn(nullable=false)
     */
     	
    private $dessert;


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
     * @return CommandeDessert
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
     * @return CommandeDessert
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
     * Set dessert
     *
     * @param \ResteauBundle\Entity\Dessert $dessert
     *
     * @return CommandeDessert
     */
    public function setDessert(\ResteauBundle\Entity\Dessert $dessert)
    {
        $this->dessert = $dessert;

        return $this;
    }

    /**
     * Get dessert
     *
     * @return \ResteauBundle\Entity\Dessert
     */
    public function getDessert()
    {
        return $this->dessert;
    }
}
