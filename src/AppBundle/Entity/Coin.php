<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="coin")
 */
class Coin extends Item
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $printedValue;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isCurrentlyInUse;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isRare;
    
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $productionMaterial;

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
     * Set printedValue
     *
     * @param string $printedValue
     * @return Coin
     */
    public function setPrintedValue($printedValue)
    {
        $this->printedValue = $printedValue;

        return $this;
    }

    /**
     * Get printedValue
     *
     * @return string 
     */
    public function getPrintedValue()
    {
        return $this->printedValue;
    }

    /**
     * Set isCurrentlyInUse
     *
     * @param boolean $isCurrentlyInUse
     * @return Coin
     */
    public function setIsCurrentlyInUse($isCurrentlyInUse)
    {
        $this->isCurrentlyInUse = $isCurrentlyInUse;

        return $this;
    }

    /**
     * Get isCurrentlyInUse
     *
     * @return boolean 
     */
    public function getIsCurrentlyInUse()
    {
        return $this->isCurrentlyInUse;
    }

    /**
     * Set isRare
     *
     * @param boolean $isRare
     * @return Coin
     */
    public function setIsRare($isRare)
    {
        $this->isRare = $isRare;

        return $this;
    }

    /**
     * Get isRare
     *
     * @return boolean 
     */
    public function getIsRare()
    {
        return $this->isRare;
    }

    /**
     * Set productionMaterial
     *
     * @param string $productionMaterial
     * @return Coin
     */
    public function setProductionMaterial($productionMaterial)
    {
        $this->productionMaterial = $productionMaterial;

        return $this;
    }

    /**
     * Get productionMaterial
     *
     * @return string 
     */
    public function getProductionMaterial()
    {
        return $this->productionMaterial;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Coin
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
     * @return Coin
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
     * @return Coin
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
     * @return Coin
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
}
