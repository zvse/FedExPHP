<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestrictionsAndPrivilegesPolicyDetail Structs
 * @subpackage Structs
 */
class RestrictionsAndPrivilegesPolicyDetail extends AbstractStructBase
{
    /**
     * The PrivilegeDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail[]
     */
    public $PrivilegeDetails;
    /**
     * Constructor method for RestrictionsAndPrivilegesPolicyDetail
     * @uses RestrictionsAndPrivilegesPolicyDetail::setPrivilegeDetails()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail[] $privilegeDetails
     */
    public function __construct(array $privilegeDetails = array())
    {
        $this
            ->setPrivilegeDetails($privilegeDetails);
    }
    /**
     * Get PrivilegeDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail[]|null
     */
    public function getPrivilegeDetails()
    {
        return $this->PrivilegeDetails;
    }
    /**
     * Set PrivilegeDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail[] $privilegeDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail
     */
    public function setPrivilegeDetails(array $privilegeDetails = array())
    {
        foreach ($privilegeDetails as $restrictionsAndPrivilegesPolicyDetailPrivilegeDetailsItem) {
            // validation for constraint: itemType
            if (!$restrictionsAndPrivilegesPolicyDetailPrivilegeDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail) {
                throw new \InvalidArgumentException(sprintf('The PrivilegeDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail, "%s" given', is_object($restrictionsAndPrivilegesPolicyDetailPrivilegeDetailsItem) ? get_class($restrictionsAndPrivilegesPolicyDetailPrivilegeDetailsItem) : gettype($restrictionsAndPrivilegesPolicyDetailPrivilegeDetailsItem)), __LINE__);
            }
        }
        $this->PrivilegeDetails = $privilegeDetails;
        return $this;
    }
    /**
     * Add item to PrivilegeDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail
     */
    public function addToPrivilegeDetails(\NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail) {
            throw new \InvalidArgumentException(sprintf('The PrivilegeDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PrivilegeDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RestrictionsAndPrivilegesPolicyDetail
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
