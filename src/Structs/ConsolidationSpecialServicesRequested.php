<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidationSpecialServicesRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the consolidation level for some or all consolidation types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the consolidation special
 * service type must be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class ConsolidationSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing consolidation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The PriorityAlertDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail
     */
    public $PriorityAlertDetail;
    /**
     * Constructor method for ConsolidationSpecialServicesRequested
     * @uses ConsolidationSpecialServicesRequested::setSpecialServiceTypes()
     * @uses ConsolidationSpecialServicesRequested::setPriorityAlertDetail()
     * @param string[] $specialServiceTypes
     * @param \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail
     */
    public function __construct(array $specialServiceTypes = array(), \CommerceFedEx\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
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
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $invalidValues = array();
        foreach ($specialServiceTypes as $consolidationSpecialServicesRequestedSpecialServiceTypesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::valueIsValid($consolidationSpecialServicesRequestedSpecialServiceTypesItem)) {
                $invalidValues[] = var_export($consolidationSpecialServicesRequestedSpecialServiceTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\ConsolidationSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConsolidationSpecialServicesRequested
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
