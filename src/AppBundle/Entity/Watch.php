<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="watch")
 */
class Watch extends Item
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
    protected $model;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isMechanical;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $isDigital;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $maxDepthWaterResistant;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isDisplayingCurrentDate;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isDisplayingDayName;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $batteryType;

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
     * Set model
     *
     * @param string $model
     * @return Watch
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set isMechanical
     *
     * @param boolean $isMechanical
     * @return Watch
     */
    public function setIsMechanical($isMechanical)
    {
        $this->isMechanical = $isMechanical;

        return $this;
    }

    /**
     * Get isMechanical
     *
     * @return boolean 
     */
    public function getIsMechanical()
    {
        return $this->isMechanical;
    }

    /**
     * Set isDigital
     *
     * @param boolean $isDigital
     * @return Watch
     */
    public function setIsDigital($isDigital)
    {
        $this->isDigital = $isDigital;

        return $this;
    }

    /**
     * Get isDigital
     *
     * @return boolean 
     */
    public function getIsDigital()
    {
        return $this->isDigital;
    }

    /**
     * Set maxDepthWaterResistant
     *
     * @param string $maxDepthWaterResistant
     * @return Watch
     */
    public function setMaxDepthWaterResistant($maxDepthWaterResistant)
    {
        $this->maxDepthWaterResistant = $maxDepthWaterResistant;

        return $this;
    }

    /**
     * Get maxDepthWaterResistant
     *
     * @return string 
     */
    public function getMaxDepthWaterResistant()
    {
        return $this->maxDepthWaterResistant;
    }

    /**
     * Set isDisplayingCurrentDate
     *
     * @param boolean $isDisplayingCurrentDate
     * @return Watch
     */
    public function setIsDisplayingCurrentDate($isDisplayingCurrentDate)
    {
        $this->isDisplayingCurrentDate = $isDisplayingCurrentDate;

        return $this;
    }

    /**
     * Get isDisplayingCurrentDate
     *
     * @return boolean 
     */
    public function getIsDisplayingCurrentDate()
    {
        return $this->isDisplayingCurrentDate;
    }

    /**
     * Set isDisplayingDayName
     *
     * @param boolean $isDisplayingDayName
     * @return Watch
     */
    public function setIsDisplayingDayName($isDisplayingDayName)
    {
        $this->isDisplayingDayName = $isDisplayingDayName;

        return $this;
    }

    /**
     * Get isDisplayingDayName
     *
     * @return boolean 
     */
    public function getIsDisplayingDayName()
    {
        return $this->isDisplayingDayName;
    }

    /**
     * Set batteryType
     *
     * @param string $batteryType
     * @return Watch
     */
    public function setBatteryType($batteryType)
    {
        $this->batteryType = $batteryType;

        return $this;
    }

    /**
     * Get batteryType
     *
     * @return string 
     */
    public function getBatteryType()
    {
        return $this->batteryType;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Watch
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
     * @return Watch
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
     * @return Watch
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
     * @return Watch
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
