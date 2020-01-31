<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateLocationAvailabilityRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ValidateLocationAvailabilityRequest
 * @subpackage Structs
 */
class ValidateLocationAvailabilityRequest extends AbstractStructBase
{
    /**
     * The RestrictionsAndPrivileges
     * Meta informations extracted from the WSDL
     * - documentation: FOR FEDEX INTERNAL USE ONLY: Restrictions and privileges associated with an entity based on one or more identifiers (for example, account number or unique user id). These restrictions and privileges can be used to determine whether
     * an entity is enabled to perform various operations.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail
     */
    public $RestrictionsAndPrivileges;
    /**
     * Constructor method for ValidateLocationAvailabilityRequest
     * @uses ValidateLocationAvailabilityRequest::setRestrictionsAndPrivileges()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail $restrictionsAndPrivileges
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail $restrictionsAndPrivileges = null)
    {
        $this
            ->setRestrictionsAndPrivileges($restrictionsAndPrivileges);
    }
    /**
     * Get RestrictionsAndPrivileges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail|null
     */
    public function getRestrictionsAndPrivileges()
    {
        return $this->RestrictionsAndPrivileges;
    }
    /**
     * Set RestrictionsAndPrivileges value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail $restrictionsAndPrivileges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidateLocationAvailabilityRequest
     */
    public function setRestrictionsAndPrivileges(\NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail $restrictionsAndPrivileges = null)
    {
        $this->RestrictionsAndPrivileges = $restrictionsAndPrivileges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidateLocationAvailabilityRequest
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
