<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupPackageSpecialServicesRequested Structs
 * @subpackage Structs
 */
class PickupPackageSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The DangerousGoodsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PickupDangerousGoodsDetail
     */
    public $DangerousGoodsDetail;
    /**
     * The PriorityAlertDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail
     */
    public $PriorityAlertDetail;
    /**
     * Constructor method for PickupPackageSpecialServicesRequested
     * @uses PickupPackageSpecialServicesRequested::setSpecialServiceTypes()
     * @uses PickupPackageSpecialServicesRequested::setDangerousGoodsDetail()
     * @uses PickupPackageSpecialServicesRequested::setPriorityAlertDetail()
     * @param string[] $specialServiceTypes
     * @param \CommerceFedEx\FedExPHP\Structs\PickupDangerousGoodsDetail $dangerousGoodsDetail
     * @param \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail
     */
    public function __construct(array $specialServiceTypes = array(), \CommerceFedEx\FedExPHP\Structs\PickupDangerousGoodsDetail $dangerousGoodsDetail = null, \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setDangerousGoodsDetail($dangerousGoodsDetail)
            ->setPriorityAlertDetail($priorityAlertDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \CommerceFedEx\FedExPHP\Structs\PickupPackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        foreach ($specialServiceTypes as $pickupPackageSpecialServicesRequestedSpecialServiceTypesItem) {
            // validation for constraint: itemType
            if (!is_string($pickupPackageSpecialServicesRequestedSpecialServiceTypesItem)) {
                throw new \InvalidArgumentException(sprintf('The SpecialServiceTypes property can only contain items of string, "%s" given', is_object($pickupPackageSpecialServicesRequestedSpecialServiceTypesItem) ? get_class($pickupPackageSpecialServicesRequestedSpecialServiceTypesItem) : gettype($pickupPackageSpecialServicesRequestedSpecialServiceTypesItem)), __LINE__);
            }
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\PickupPackageSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SpecialServiceTypes property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get DangerousGoodsDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PickupDangerousGoodsDetail|null
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }
    /**
     * Set DangerousGoodsDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PickupDangerousGoodsDetail $dangerousGoodsDetail
     * @return \CommerceFedEx\FedExPHP\Structs\PickupPackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(\CommerceFedEx\FedExPHP\Structs\PickupDangerousGoodsDetail $dangerousGoodsDetail = null)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Get PriorityAlertDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail|null
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }
    /**
     * Set PriorityAlertDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail
     * @return \CommerceFedEx\FedExPHP\Structs\PickupPackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(\CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PickupPackageSpecialServicesRequested
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
