<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceDescription Structs
 * @subpackage Structs
 */
class SpecialServiceDescription extends AbstractStructBase
{
    /**
     * The Identifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail
     */
    public $Identifier;
    /**
     * The Names
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ProductName[]
     */
    public $Names;
    /**
     * Constructor method for SpecialServiceDescription
     * @uses SpecialServiceDescription::setIdentifier()
     * @uses SpecialServiceDescription::setNames()
     * @param \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail $identifier
     * @param \CommerceFedEx\FedExPHP\Structs\ProductName[] $names
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail $identifier = null, array $names = array())
    {
        $this
            ->setIdentifier($identifier)
            ->setNames($names);
    }
    /**
     * Get Identifier value
     * @return \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail|null
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }
    /**
     * Set Identifier value
     * @param \CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail $identifier
     * @return \CommerceFedEx\FedExPHP\Structs\SpecialServiceDescription
     */
    public function setIdentifier(\CommerceFedEx\FedExPHP\Structs\OfferingIdentifierDetail $identifier = null)
    {
        $this->Identifier = $identifier;
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
     * @return \CommerceFedEx\FedExPHP\Structs\SpecialServiceDescription
     */
    public function setNames(array $names = array())
    {
        foreach ($names as $specialServiceDescriptionNamesItem) {
            // validation for constraint: itemType
            if (!$specialServiceDescriptionNamesItem instanceof \CommerceFedEx\FedExPHP\Structs\ProductName) {
                throw new \InvalidArgumentException(sprintf('The Names property can only contain items of \CommerceFedEx\FedExPHP\Structs\ProductName, "%s" given', is_object($specialServiceDescriptionNamesItem) ? get_class($specialServiceDescriptionNamesItem) : gettype($specialServiceDescriptionNamesItem)), __LINE__);
            }
        }
        $this->Names = $names;
        return $this;
    }
    /**
     * Add item to Names value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ProductName $item
     * @return \CommerceFedEx\FedExPHP\Structs\SpecialServiceDescription
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\SpecialServiceDescription
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
