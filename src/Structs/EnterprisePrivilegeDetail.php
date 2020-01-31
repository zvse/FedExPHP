<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnterprisePrivilegeDetail Structs
 * @subpackage Structs
 */
class EnterprisePrivilegeDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Permission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Permission;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The EffectiveDateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DateRange
     */
    public $EffectiveDateRange;
    /**
     * Constructor method for EnterprisePrivilegeDetail
     * @uses EnterprisePrivilegeDetail::setId()
     * @uses EnterprisePrivilegeDetail::setPermission()
     * @uses EnterprisePrivilegeDetail::setCarrierCode()
     * @uses EnterprisePrivilegeDetail::setEffectiveDateRange()
     * @param string $id
     * @param string $permission
     * @param string $carrierCode
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DateRange $effectiveDateRange
     */
    public function __construct($id = null, $permission = null, $carrierCode = null, \NicholasCreativeMedia\FedExPHP\Structs\DateRange $effectiveDateRange = null)
    {
        $this
            ->setId($id)
            ->setPermission($permission)
            ->setCarrierCode($carrierCode)
            ->setEffectiveDateRange($effectiveDateRange);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail
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
     * Get Permission value
     * @return string|null
     */
    public function getPermission()
    {
        return $this->Permission;
    }
    /**
     * Set Permission value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EnterprisePermissionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\EnterprisePermissionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $permission
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail
     */
    public function setPermission($permission = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\EnterprisePermissionType::valueIsValid($permission)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $permission, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\EnterprisePermissionType::getValidValues())), __LINE__);
        }
        $this->Permission = $permission;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get EffectiveDateRange value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DateRange|null
     */
    public function getEffectiveDateRange()
    {
        return $this->EffectiveDateRange;
    }
    /**
     * Set EffectiveDateRange value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DateRange $effectiveDateRange
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail
     */
    public function setEffectiveDateRange(\NicholasCreativeMedia\FedExPHP\Structs\DateRange $effectiveDateRange = null)
    {
        $this->EffectiveDateRange = $effectiveDateRange;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EnterprisePrivilegeDetail
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
