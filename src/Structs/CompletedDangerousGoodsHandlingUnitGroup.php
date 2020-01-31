<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedDangerousGoodsHandlingUnitGroup Structs
 * @subpackage Structs
 */
class CompletedDangerousGoodsHandlingUnitGroup extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The NumberOfHandlingUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfHandlingUnits;
    /**
     * The HandlingUnitShippingDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail
     */
    public $HandlingUnitShippingDetail;
    /**
     * Constructor method for CompletedDangerousGoodsHandlingUnitGroup
     * @uses CompletedDangerousGoodsHandlingUnitGroup::setId()
     * @uses CompletedDangerousGoodsHandlingUnitGroup::setNumberOfHandlingUnits()
     * @uses CompletedDangerousGoodsHandlingUnitGroup::setHandlingUnitShippingDetail()
     * @param string $id
     * @param int $numberOfHandlingUnits
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail
     */
    public function __construct($id = null, $numberOfHandlingUnits = null, \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail = null)
    {
        $this
            ->setId($id)
            ->setNumberOfHandlingUnits($numberOfHandlingUnits)
            ->setHandlingUnitShippingDetail($handlingUnitShippingDetail);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get NumberOfHandlingUnits value
     * @return int|null
     */
    public function getNumberOfHandlingUnits()
    {
        return $this->NumberOfHandlingUnits;
    }
    /**
     * Set NumberOfHandlingUnits value
     * @param int $numberOfHandlingUnits
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup
     */
    public function setNumberOfHandlingUnits($numberOfHandlingUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfHandlingUnits) && !is_numeric($numberOfHandlingUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfHandlingUnits)), __LINE__);
        }
        $this->NumberOfHandlingUnits = $numberOfHandlingUnits;
        return $this;
    }
    /**
     * Get HandlingUnitShippingDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail|null
     */
    public function getHandlingUnitShippingDetail()
    {
        return $this->HandlingUnitShippingDetail;
    }
    /**
     * Set HandlingUnitShippingDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup
     */
    public function setHandlingUnitShippingDetail(\CommerceFedEx\FedExPHP\Structs\DangerousGoodsHandlingUnitShippingDetail $handlingUnitShippingDetail = null)
    {
        $this->HandlingUnitShippingDetail = $handlingUnitShippingDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
