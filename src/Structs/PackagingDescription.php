<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackagingDescription Structs
 * @subpackage Structs
 */
class PackagingDescription extends AbstractStructBase
{
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
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
     * - documentation: Branded, translated, and/or localized names for this packaging.
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
     * Constructor method for PackagingDescription
     * @uses PackagingDescription::setPackagingType()
     * @uses PackagingDescription::setCode()
     * @uses PackagingDescription::setNames()
     * @uses PackagingDescription::setDescription()
     * @uses PackagingDescription::setAstraDescription()
     * @param string $packagingType
     * @param string $code
     * @param \CommerceFedEx\FedExPHP\Structs\ProductName[] $names
     * @param string $description
     * @param string $astraDescription
     */
    public function __construct($packagingType = null, $code = null, array $names = array(), $description = null, $astraDescription = null)
    {
        $this
            ->setPackagingType($packagingType)
            ->setCode($code)
            ->setNames($names)
            ->setDescription($description)
            ->setAstraDescription($astraDescription);
    }
    /**
     * Get PackagingType value
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    /**
     * Set PackagingType value
     * @param string $packagingType
     * @return \CommerceFedEx\FedExPHP\Structs\PackagingDescription
     */
    public function setPackagingType($packagingType = null)
    {
        // validation for constraint: string
        if (!is_null($packagingType) && !is_string($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packagingType)), __LINE__);
        }
        $this->PackagingType = $packagingType;
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
     * @return \CommerceFedEx\FedExPHP\Structs\PackagingDescription
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
     * @return \CommerceFedEx\FedExPHP\Structs\PackagingDescription
     */
    public function setNames(array $names = array())
    {
        foreach ($names as $packagingDescriptionNamesItem) {
            // validation for constraint: itemType
            if (!$packagingDescriptionNamesItem instanceof \CommerceFedEx\FedExPHP\Structs\ProductName) {
                throw new \InvalidArgumentException(sprintf('The Names property can only contain items of \CommerceFedEx\FedExPHP\Structs\ProductName, "%s" given', is_object($packagingDescriptionNamesItem) ? get_class($packagingDescriptionNamesItem) : gettype($packagingDescriptionNamesItem)), __LINE__);
            }
        }
        $this->Names = $names;
        return $this;
    }
    /**
     * Add item to Names value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ProductName $item
     * @return \CommerceFedEx\FedExPHP\Structs\PackagingDescription
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
     * @return \CommerceFedEx\FedExPHP\Structs\PackagingDescription
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
     * @return \CommerceFedEx\FedExPHP\Structs\PackagingDescription
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
     * @return \CommerceFedEx\FedExPHP\Structs\PackagingDescription
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
