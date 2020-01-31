<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageSpecialServiceDescription Structs
 * @subpackage Structs
 */
class PackageSpecialServiceDescription extends AbstractStructBase
{
    /**
     * The CarrierCodesAndServices
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the carrier codes and service types that the special service is valid for.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail[]
     */
    public $CarrierCodesAndServices;
    /**
     * The SubSpecialServiceId
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the sub-special service offering ID.
     * - minOccurs: 0
     * @var string
     */
    public $SubSpecialServiceId;
    /**
     * The SubNames
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ProductName[]
     */
    public $SubNames;
    /**
     * The SpecialServiceId
     * Meta informations extracted from the WSDL
     * - documentation: This field specifies the package special service offering ID.
     * - minOccurs: 0
     * @var string
     */
    public $SpecialServiceId;
    /**
     * The Names
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ProductName[]
     */
    public $Names;
    /**
     * The SpecialServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpecialServiceType;
    /**
     * The SpecialServiceSubType
     * Meta informations extracted from the WSDL
     * - documentation: Specific subtype of service with multiple exclusive variations: such as DANGEROUS_GOODS and SIGNATURE_OPTION.
     * - minOccurs: 0
     * @var string
     */
    public $SpecialServiceSubType;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The AstraDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AstraDescription;
    /**
     * The CustomerIntegrationMode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates what kind of integration is required to support the special service.
     * - minOccurs: 0
     * @var string
     */
    public $CustomerIntegrationMode;
    /**
     * Constructor method for PackageSpecialServiceDescription
     * @uses PackageSpecialServiceDescription::setCarrierCodesAndServices()
     * @uses PackageSpecialServiceDescription::setSubSpecialServiceId()
     * @uses PackageSpecialServiceDescription::setSubNames()
     * @uses PackageSpecialServiceDescription::setSpecialServiceId()
     * @uses PackageSpecialServiceDescription::setNames()
     * @uses PackageSpecialServiceDescription::setSpecialServiceType()
     * @uses PackageSpecialServiceDescription::setSpecialServiceSubType()
     * @uses PackageSpecialServiceDescription::setCode()
     * @uses PackageSpecialServiceDescription::setDescription()
     * @uses PackageSpecialServiceDescription::setAstraDescription()
     * @uses PackageSpecialServiceDescription::setCustomerIntegrationMode()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail[] $carrierCodesAndServices
     * @param string $subSpecialServiceId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProductName[] $subNames
     * @param string $specialServiceId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProductName[] $names
     * @param string $specialServiceType
     * @param string $specialServiceSubType
     * @param string $code
     * @param string $description
     * @param string $astraDescription
     * @param string $customerIntegrationMode
     */
    public function __construct(array $carrierCodesAndServices = array(), $subSpecialServiceId = null, array $subNames = array(), $specialServiceId = null, array $names = array(), $specialServiceType = null, $specialServiceSubType = null, $code = null, $description = null, $astraDescription = null, $customerIntegrationMode = null)
    {
        $this
            ->setCarrierCodesAndServices($carrierCodesAndServices)
            ->setSubSpecialServiceId($subSpecialServiceId)
            ->setSubNames($subNames)
            ->setSpecialServiceId($specialServiceId)
            ->setNames($names)
            ->setSpecialServiceType($specialServiceType)
            ->setSpecialServiceSubType($specialServiceSubType)
            ->setCode($code)
            ->setDescription($description)
            ->setAstraDescription($astraDescription)
            ->setCustomerIntegrationMode($customerIntegrationMode);
    }
    /**
     * Get CarrierCodesAndServices value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail[]|null
     */
    public function getCarrierCodesAndServices()
    {
        return $this->CarrierCodesAndServices;
    }
    /**
     * Set CarrierCodesAndServices value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail[] $carrierCodesAndServices
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setCarrierCodesAndServices(array $carrierCodesAndServices = array())
    {
        foreach ($carrierCodesAndServices as $packageSpecialServiceDescriptionCarrierCodesAndServicesItem) {
            // validation for constraint: itemType
            if (!$packageSpecialServiceDescriptionCarrierCodesAndServicesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail) {
                throw new \InvalidArgumentException(sprintf('The CarrierCodesAndServices property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail, "%s" given', is_object($packageSpecialServiceDescriptionCarrierCodesAndServicesItem) ? get_class($packageSpecialServiceDescriptionCarrierCodesAndServicesItem) : gettype($packageSpecialServiceDescriptionCarrierCodesAndServicesItem)), __LINE__);
            }
        }
        $this->CarrierCodesAndServices = $carrierCodesAndServices;
        return $this;
    }
    /**
     * Add item to CarrierCodesAndServices value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function addToCarrierCodesAndServices(\NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail) {
            throw new \InvalidArgumentException(sprintf('The CarrierCodesAndServices property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ServiceTypesByCarrierCodeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CarrierCodesAndServices[] = $item;
        return $this;
    }
    /**
     * Get SubSpecialServiceId value
     * @return string|null
     */
    public function getSubSpecialServiceId()
    {
        return $this->SubSpecialServiceId;
    }
    /**
     * Set SubSpecialServiceId value
     * @param string $subSpecialServiceId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setSubSpecialServiceId($subSpecialServiceId = null)
    {
        // validation for constraint: string
        if (!is_null($subSpecialServiceId) && !is_string($subSpecialServiceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subSpecialServiceId)), __LINE__);
        }
        $this->SubSpecialServiceId = $subSpecialServiceId;
        return $this;
    }
    /**
     * Get SubNames value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductName[]|null
     */
    public function getSubNames()
    {
        return $this->SubNames;
    }
    /**
     * Set SubNames value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProductName[] $subNames
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setSubNames(array $subNames = array())
    {
        foreach ($subNames as $packageSpecialServiceDescriptionSubNamesItem) {
            // validation for constraint: itemType
            if (!$packageSpecialServiceDescriptionSubNamesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ProductName) {
                throw new \InvalidArgumentException(sprintf('The SubNames property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ProductName, "%s" given', is_object($packageSpecialServiceDescriptionSubNamesItem) ? get_class($packageSpecialServiceDescriptionSubNamesItem) : gettype($packageSpecialServiceDescriptionSubNamesItem)), __LINE__);
            }
        }
        $this->SubNames = $subNames;
        return $this;
    }
    /**
     * Add item to SubNames value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProductName $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function addToSubNames(\NicholasCreativeMedia\FedExPHP\Structs\ProductName $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ProductName) {
            throw new \InvalidArgumentException(sprintf('The SubNames property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ProductName, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubNames[] = $item;
        return $this;
    }
    /**
     * Get SpecialServiceId value
     * @return string|null
     */
    public function getSpecialServiceId()
    {
        return $this->SpecialServiceId;
    }
    /**
     * Set SpecialServiceId value
     * @param string $specialServiceId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setSpecialServiceId($specialServiceId = null)
    {
        // validation for constraint: string
        if (!is_null($specialServiceId) && !is_string($specialServiceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialServiceId)), __LINE__);
        }
        $this->SpecialServiceId = $specialServiceId;
        return $this;
    }
    /**
     * Get Names value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductName[]|null
     */
    public function getNames()
    {
        return $this->Names;
    }
    /**
     * Set Names value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProductName[] $names
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setNames(array $names = array())
    {
        foreach ($names as $packageSpecialServiceDescriptionNamesItem) {
            // validation for constraint: itemType
            if (!$packageSpecialServiceDescriptionNamesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ProductName) {
                throw new \InvalidArgumentException(sprintf('The Names property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ProductName, "%s" given', is_object($packageSpecialServiceDescriptionNamesItem) ? get_class($packageSpecialServiceDescriptionNamesItem) : gettype($packageSpecialServiceDescriptionNamesItem)), __LINE__);
            }
        }
        $this->Names = $names;
        return $this;
    }
    /**
     * Add item to Names value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProductName $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function addToNames(\NicholasCreativeMedia\FedExPHP\Structs\ProductName $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ProductName) {
            throw new \InvalidArgumentException(sprintf('The Names property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ProductName, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Names[] = $item;
        return $this;
    }
    /**
     * Get SpecialServiceType value
     * @return string|null
     */
    public function getSpecialServiceType()
    {
        return $this->SpecialServiceType;
    }
    /**
     * Set SpecialServiceType value
     * @param string $specialServiceType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setSpecialServiceType($specialServiceType = null)
    {
        // validation for constraint: string
        if (!is_null($specialServiceType) && !is_string($specialServiceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialServiceType)), __LINE__);
        }
        $this->SpecialServiceType = $specialServiceType;
        return $this;
    }
    /**
     * Get SpecialServiceSubType value
     * @return string|null
     */
    public function getSpecialServiceSubType()
    {
        return $this->SpecialServiceSubType;
    }
    /**
     * Set SpecialServiceSubType value
     * @param string $specialServiceSubType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setSpecialServiceSubType($specialServiceSubType = null)
    {
        // validation for constraint: string
        if (!is_null($specialServiceSubType) && !is_string($specialServiceSubType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialServiceSubType)), __LINE__);
        }
        $this->SpecialServiceSubType = $specialServiceSubType;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get AstraDescription value
     * @return string|null
     */
    public function getAstraDescription()
    {
        return $this->AstraDescription;
    }
    /**
     * Set AstraDescription value
     * @param string $astraDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setAstraDescription($astraDescription = null)
    {
        // validation for constraint: string
        if (!is_null($astraDescription) && !is_string($astraDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($astraDescription)), __LINE__);
        }
        $this->AstraDescription = $astraDescription;
        return $this;
    }
    /**
     * Get CustomerIntegrationMode value
     * @return string|null
     */
    public function getCustomerIntegrationMode()
    {
        return $this->CustomerIntegrationMode;
    }
    /**
     * Set CustomerIntegrationMode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomerIntegrationModeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomerIntegrationModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customerIntegrationMode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
     */
    public function setCustomerIntegrationMode($customerIntegrationMode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CustomerIntegrationModeType::valueIsValid($customerIntegrationMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customerIntegrationMode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CustomerIntegrationModeType::getValidValues())), __LINE__);
        }
        $this->CustomerIntegrationMode = $customerIntegrationMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServiceDescription
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
