<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceDescription Structs
 * @subpackage Structs
 */
class ServiceDescription extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Names
     * Meta informations extracted from the WSDL
     * - documentation: Branded, translated, and/or localized names for this service.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ProductName[]
     */
    public $Names;
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
     * Constructor method for ServiceDescription
     * @uses ServiceDescription::setServiceType()
     * @uses ServiceDescription::setCode()
     * @uses ServiceDescription::setNames()
     * @uses ServiceDescription::setDescription()
     * @uses ServiceDescription::setAstraDescription()
     * @param string $serviceType
     * @param string $code
     * @param \CommerceFedEx\FedExPHP\Structs\ProductName[] $names
     * @param string $description
     * @param string $astraDescription
     */
    public function __construct($serviceType = null, $code = null, array $names = array(), $description = null, $astraDescription = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setCode($code)
            ->setNames($names)
            ->setDescription($description)
            ->setAstraDescription($astraDescription);
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \CommerceFedEx\FedExPHP\Structs\ServiceDescription
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ServiceDescription
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
     * Get Names value
     * @return \CommerceFedEx\FedExPHP\Structs\ProductName[]|null
     */
    public function getNames()
    {
        return $this->Names;
    }
    /**
     * Set Names value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ProductName[] $names
     * @return \CommerceFedEx\FedExPHP\Structs\ServiceDescription
     */
    public function setNames(array $names = array())
    {
        foreach ($names as $serviceDescriptionNamesItem) {
            // validation for constraint: itemType
            if (!$serviceDescriptionNamesItem instanceof \CommerceFedEx\FedExPHP\Structs\ProductName) {
                throw new \InvalidArgumentException(sprintf('The Names property can only contain items of \CommerceFedEx\FedExPHP\Structs\ProductName, "%s" given', is_object($serviceDescriptionNamesItem) ? get_class($serviceDescriptionNamesItem) : gettype($serviceDescriptionNamesItem)), __LINE__);
            }
        }
        $this->Names = $names;
        return $this;
    }
    /**
     * Add item to Names value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ProductName $item
     * @return \CommerceFedEx\FedExPHP\Structs\ServiceDescription
     */
    public function addToNames(\CommerceFedEx\FedExPHP\Structs\ProductName $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ProductName) {
            throw new \InvalidArgumentException(sprintf('The Names property can only contain items of \CommerceFedEx\FedExPHP\Structs\ProductName, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Names[] = $item;
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
     * @return \CommerceFedEx\FedExPHP\Structs\ServiceDescription
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
     * @return \CommerceFedEx\FedExPHP\Structs\ServiceDescription
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ServiceDescription
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
