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
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    protected $qualityPercent;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isRare;
    
    /**
     * @ORM\Column(type="string", length=250)
     */
    protected $productionMaterial;

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
     * Set qualityPercent
     *
     * @param \percent $qualityPercent
     * @return Coin
     */
    public function setQualityPercent(\percent $qualityPercent)
    {
        $this->qualityPercent = $qualityPercent;

        return $this;
    }

    /**
     * Get qualityPercent
     *
     * @return \percent 
     */
    public function getQualityPercent()
    {
        return $this->qualityPercent;
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
}
