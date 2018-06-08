<?php

namespace ResteauBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandePlat
 *
 * @ORM\Table(name="commande_plat")
 * @ORM\Entity(repositoryClass="ResteauBundle\Repository\CommandePlatRepository")
 */
class CommandePlat
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
     * Get id
     *
     * @return int
     */

    	
    /**
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumn(nullable=false)
     */
     	
    private $commande;

      /**
     * @ORM\ManyToOne(targetEntity="Plat")
     * @ORM\JoinColumn(nullable=false)
     */
     	
    private $plat;

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbr
     *
     * @param integer $nbr
     *
     * @return CommandePlat
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
     * @return CommandePlat
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
     * Set plat
     *
     * @param \ResteauBundle\Entity\Plat $plat
     *
     * @return CommandePlat
     */
    public function setPlat(\ResteauBundle\Entity\Plat $plat)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat
     *
     * @return \ResteauBundle\Entity\Plat
     */
    public function getPlat()
    {
        return $this->plat;
    }
}
