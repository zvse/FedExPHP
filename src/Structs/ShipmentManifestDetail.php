<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentManifestDetail Structs
 * @subpackage Structs
 */
class ShipmentManifestDetail extends AbstractStructBase
{
    /**
     * The ManifestReferenceType
     * Meta informations extracted from the WSDL
     * - documentation: This identifies which customer reference field contains the manifest ID.
     * - minOccurs: 0
     * @var string
     */
    public $ManifestReferenceType;
    /**
     * Constructor method for ShipmentManifestDetail
     * @uses ShipmentManifestDetail::setManifestReferenceType()
     * @param string $manifestReferenceType
     */
    public function __construct($manifestReferenceType = null)
    {
        $this
            ->setManifestReferenceType($manifestReferenceType);
    }
    /**
     * Get ManifestReferenceType value
     * @return string|null
     */
    public function getManifestReferenceType()
    {
        return $this->ManifestReferenceType;
    }
    /**
     * Set ManifestReferenceType value
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $manifestReferenceType
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail
     */
    public function setManifestReferenceType($manifestReferenceType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::valueIsValid($manifestReferenceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $manifestReferenceType, implode(', ', \CommerceFedEx\FedExPHP\Enums\CustomerReferenceType::getValidValues())), __LINE__);
        }
        $this->ManifestReferenceType = $manifestReferenceType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentManifestDetail
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
