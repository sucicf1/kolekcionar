<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item")
 */
class Item 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $productionDate;
    
    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    protected $qualityPercent;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="items")
     */
    protected $user;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set productionDate
     *
     * @param \DateTime $productionDate
     * @return Item
     */
    public function setProductionDate($productionDate)
    {
        $this->productionDate = $productionDate;

        return $this;
    }

    /**
     * Get productionDate
     *
     * @return \DateTime 
     */
    public function getProductionDate()
    {
        return $this->productionDate;
    }

    /**
     * Set qualityPercent
     *
     * @param string $qualityPercent
     * @return Item
     */
    public function setQualityPercent($qualityPercent)
    {
        $this->qualityPercent = $qualityPercent;

        return $this;
    }

    /**
     * Get qualityPercent
     *
     * @return string 
     */
    public function getQualityPercent()
    {
        return $this->qualityPercent;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Item
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
