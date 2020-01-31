<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransborderDistributionSpecialServicesRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies features of service within a Transborder Distribution shipment.
 * @subpackage Structs
 */
class TransborderDistributionSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: Identifies features of service requested for the current Transborder Distribution shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The TransborderDistributionLtlDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details for origin-country LTL services performed by FedEx.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail
     */
    public $TransborderDistributionLtlDetail;
    /**
     * Constructor method for TransborderDistributionSpecialServicesRequested
     * @uses TransborderDistributionSpecialServicesRequested::setSpecialServiceTypes()
     * @uses TransborderDistributionSpecialServicesRequested::setTransborderDistributionLtlDetail()
     * @param string[] $specialServiceTypes
     * @param \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail $transborderDistributionLtlDetail
     */
    public function __construct(array $specialServiceTypes = array(), \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail $transborderDistributionLtlDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setTransborderDistributionLtlDetail($transborderDistributionLtlDetail);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $invalidValues = array();
        foreach ($specialServiceTypes as $transborderDistributionSpecialServicesRequestedSpecialServiceTypesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::valueIsValid($transborderDistributionSpecialServicesRequestedSpecialServiceTypesItem)) {
                $invalidValues[] = var_export($transborderDistributionSpecialServicesRequestedSpecialServiceTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @uses \CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\TransborderDistributionSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get TransborderDistributionLtlDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail|null
     */
    public function getTransborderDistributionLtlDetail()
    {
        return $this->TransborderDistributionLtlDetail;
    }
    /**
     * Set TransborderDistributionLtlDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail $transborderDistributionLtlDetail
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested
     */
    public function setTransborderDistributionLtlDetail(\CommerceFedEx\FedExPHP\Structs\TransborderDistributionLtlDetail $transborderDistributionLtlDetail = null)
    {
        $this->TransborderDistributionLtlDetail = $transborderDistributionLtlDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\TransborderDistributionSpecialServicesRequested
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
