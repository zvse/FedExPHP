<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDetail Structs
 * @subpackage Structs
 */
class ProductDetail extends AbstractStructBase
{
    /**
     * The ServiceDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ServiceDescription
     */
    public $ServiceDescription;
    /**
     * The PackagingDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackagingDescription
     */
    public $PackagingDescription;
    /**
     * The AstraServiceDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AstraServiceDescription;
    /**
     * The Scac
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Scac;
    /**
     * The AppliedOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AppliedOptions;
    /**
     * The AppliedSubOptions
     * Meta informations extracted from the WSDL
     * - documentation: Supporting detail for applied options.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail
     */
    public $AppliedSubOptions;
    /**
     * The DerivedShipmentSignatureOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail
     */
    public $DerivedShipmentSignatureOption;
    /**
     * The DerivedPackageSignatureOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[]
     */
    public $DerivedPackageSignatureOptions;
    /**
     * The MaximumWeights
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight[]
     */
    public $MaximumWeights;
    /**
     * The MaximumDimensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions[]
     */
    public $MaximumDimensions;
    /**
     * The MaximumLengthPlusGirths
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure[]
     */
    public $MaximumLengthPlusGirths;
    /**
     * The MaximumInsuredValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $MaximumInsuredValue;
    /**
     * The DerivedEtdType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DerivedEtdType;
    /**
     * Constructor method for ProductDetail
     * @uses ProductDetail::setServiceDescription()
     * @uses ProductDetail::setPackagingDescription()
     * @uses ProductDetail::setAstraServiceDescription()
     * @uses ProductDetail::setScac()
     * @uses ProductDetail::setAppliedOptions()
     * @uses ProductDetail::setAppliedSubOptions()
     * @uses ProductDetail::setDerivedShipmentSignatureOption()
     * @uses ProductDetail::setDerivedPackageSignatureOptions()
     * @uses ProductDetail::setMaximumWeights()
     * @uses ProductDetail::setMaximumDimensions()
     * @uses ProductDetail::setMaximumLengthPlusGirths()
     * @uses ProductDetail::setMaximumInsuredValue()
     * @uses ProductDetail::setDerivedEtdType()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceDescription $serviceDescription
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackagingDescription $packagingDescription
     * @param string $astraServiceDescription
     * @param string $scac
     * @param string[] $appliedOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[] $derivedPackageSignatureOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight[] $maximumWeights
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions[] $maximumDimensions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure[] $maximumLengthPlusGirths
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $maximumInsuredValue
     * @param string $derivedEtdType
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\ServiceDescription $serviceDescription = null, \NicholasCreativeMedia\FedExPHP\Structs\PackagingDescription $packagingDescription = null, $astraServiceDescription = null, $scac = null, array $appliedOptions = array(), \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions = null, \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption = null, array $derivedPackageSignatureOptions = array(), array $maximumWeights = array(), array $maximumDimensions = array(), array $maximumLengthPlusGirths = array(), \NicholasCreativeMedia\FedExPHP\Structs\Money $maximumInsuredValue = null, $derivedEtdType = null)
    {
        $this
            ->setServiceDescription($serviceDescription)
            ->setPackagingDescription($packagingDescription)
            ->setAstraServiceDescription($astraServiceDescription)
            ->setScac($scac)
            ->setAppliedOptions($appliedOptions)
            ->setAppliedSubOptions($appliedSubOptions)
            ->setDerivedShipmentSignatureOption($derivedShipmentSignatureOption)
            ->setDerivedPackageSignatureOptions($derivedPackageSignatureOptions)
            ->setMaximumWeights($maximumWeights)
            ->setMaximumDimensions($maximumDimensions)
            ->setMaximumLengthPlusGirths($maximumLengthPlusGirths)
            ->setMaximumInsuredValue($maximumInsuredValue)
            ->setDerivedEtdType($derivedEtdType);
    }
    /**
     * Get ServiceDescription value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceDescription|null
     */
    public function getServiceDescription()
    {
        return $this->ServiceDescription;
    }
    /**
     * Set ServiceDescription value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceDescription $serviceDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setServiceDescription(\NicholasCreativeMedia\FedExPHP\Structs\ServiceDescription $serviceDescription = null)
    {
        $this->ServiceDescription = $serviceDescription;
        return $this;
    }
    /**
     * Get PackagingDescription value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackagingDescription|null
     */
    public function getPackagingDescription()
    {
        return $this->PackagingDescription;
    }
    /**
     * Set PackagingDescription value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackagingDescription $packagingDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setPackagingDescription(\NicholasCreativeMedia\FedExPHP\Structs\PackagingDescription $packagingDescription = null)
    {
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    /**
     * Get AstraServiceDescription value
     * @return string|null
     */
    public function getAstraServiceDescription()
    {
        return $this->AstraServiceDescription;
    }
    /**
     * Set AstraServiceDescription value
     * @param string $astraServiceDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setAstraServiceDescription($astraServiceDescription = null)
    {
        // validation for constraint: string
        if (!is_null($astraServiceDescription) && !is_string($astraServiceDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($astraServiceDescription)), __LINE__);
        }
        $this->AstraServiceDescription = $astraServiceDescription;
        return $this;
    }
    /**
     * Get Scac value
     * @return string|null
     */
    public function getScac()
    {
        return $this->Scac;
    }
    /**
     * Set Scac value
     * @param string $scac
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setScac($scac = null)
    {
        // validation for constraint: string
        if (!is_null($scac) && !is_string($scac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scac)), __LINE__);
        }
        $this->Scac = $scac;
        return $this;
    }
    /**
     * Get AppliedOptions value
     * @return string[]|null
     */
    public function getAppliedOptions()
    {
        return $this->AppliedOptions;
    }
    /**
     * Set AppliedOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $appliedOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setAppliedOptions(array $appliedOptions = array())
    {
        $invalidValues = array();
        foreach ($appliedOptions as $productDetailAppliedOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid($productDetailAppliedOptionsItem)) {
                $invalidValues[] = var_export($productDetailAppliedOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->AppliedOptions = $appliedOptions;
        return $this;
    }
    /**
     * Add item to AppliedOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function addToAppliedOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->AppliedOptions[] = $item;
        return $this;
    }
    /**
     * Get AppliedSubOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail|null
     */
    public function getAppliedSubOptions()
    {
        return $this->AppliedSubOptions;
    }
    /**
     * Set AppliedSubOptions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setAppliedSubOptions(\NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions = null)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    /**
     * Get DerivedShipmentSignatureOption value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail|null
     */
    public function getDerivedShipmentSignatureOption()
    {
        return $this->DerivedShipmentSignatureOption;
    }
    /**
     * Set DerivedShipmentSignatureOption value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setDerivedShipmentSignatureOption(\NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption = null)
    {
        $this->DerivedShipmentSignatureOption = $derivedShipmentSignatureOption;
        return $this;
    }
    /**
     * Get DerivedPackageSignatureOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[]|null
     */
    public function getDerivedPackageSignatureOptions()
    {
        return $this->DerivedPackageSignatureOptions;
    }
    /**
     * Set DerivedPackageSignatureOptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[] $derivedPackageSignatureOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setDerivedPackageSignatureOptions(array $derivedPackageSignatureOptions = array())
    {
        foreach ($derivedPackageSignatureOptions as $productDetailDerivedPackageSignatureOptionsItem) {
            // validation for constraint: itemType
            if (!$productDetailDerivedPackageSignatureOptionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail) {
                throw new \InvalidArgumentException(sprintf('The DerivedPackageSignatureOptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail, "%s" given', is_object($productDetailDerivedPackageSignatureOptionsItem) ? get_class($productDetailDerivedPackageSignatureOptionsItem) : gettype($productDetailDerivedPackageSignatureOptionsItem)), __LINE__);
            }
        }
        $this->DerivedPackageSignatureOptions = $derivedPackageSignatureOptions;
        return $this;
    }
    /**
     * Add item to DerivedPackageSignatureOptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function addToDerivedPackageSignatureOptions(\NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail) {
            throw new \InvalidArgumentException(sprintf('The DerivedPackageSignatureOptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DerivedPackageSignatureOptions[] = $item;
        return $this;
    }
    /**
     * Get MaximumWeights value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight[]|null
     */
    public function getMaximumWeights()
    {
        return $this->MaximumWeights;
    }
    /**
     * Set MaximumWeights value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight[] $maximumWeights
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setMaximumWeights(array $maximumWeights = array())
    {
        foreach ($maximumWeights as $productDetailMaximumWeightsItem) {
            // validation for constraint: itemType
            if (!$productDetailMaximumWeightsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Weight) {
                throw new \InvalidArgumentException(sprintf('The MaximumWeights property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Weight, "%s" given', is_object($productDetailMaximumWeightsItem) ? get_class($productDetailMaximumWeightsItem) : gettype($productDetailMaximumWeightsItem)), __LINE__);
            }
        }
        $this->MaximumWeights = $maximumWeights;
        return $this;
    }
    /**
     * Add item to MaximumWeights value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function addToMaximumWeights(\NicholasCreativeMedia\FedExPHP\Structs\Weight $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Weight) {
            throw new \InvalidArgumentException(sprintf('The MaximumWeights property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Weight, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MaximumWeights[] = $item;
        return $this;
    }
    /**
     * Get MaximumDimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions[]|null
     */
    public function getMaximumDimensions()
    {
        return $this->MaximumDimensions;
    }
    /**
     * Set MaximumDimensions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions[] $maximumDimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setMaximumDimensions(array $maximumDimensions = array())
    {
        foreach ($maximumDimensions as $productDetailMaximumDimensionsItem) {
            // validation for constraint: itemType
            if (!$productDetailMaximumDimensionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Dimensions) {
                throw new \InvalidArgumentException(sprintf('The MaximumDimensions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Dimensions, "%s" given', is_object($productDetailMaximumDimensionsItem) ? get_class($productDetailMaximumDimensionsItem) : gettype($productDetailMaximumDimensionsItem)), __LINE__);
            }
        }
        $this->MaximumDimensions = $maximumDimensions;
        return $this;
    }
    /**
     * Add item to MaximumDimensions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function addToMaximumDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Dimensions) {
            throw new \InvalidArgumentException(sprintf('The MaximumDimensions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Dimensions, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MaximumDimensions[] = $item;
        return $this;
    }
    /**
     * Get MaximumLengthPlusGirths value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure[]|null
     */
    public function getMaximumLengthPlusGirths()
    {
        return $this->MaximumLengthPlusGirths;
    }
    /**
     * Set MaximumLengthPlusGirths value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure[] $maximumLengthPlusGirths
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setMaximumLengthPlusGirths(array $maximumLengthPlusGirths = array())
    {
        foreach ($maximumLengthPlusGirths as $productDetailMaximumLengthPlusGirthsItem) {
            // validation for constraint: itemType
            if (!$productDetailMaximumLengthPlusGirthsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure) {
                throw new \InvalidArgumentException(sprintf('The MaximumLengthPlusGirths property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure, "%s" given', is_object($productDetailMaximumLengthPlusGirthsItem) ? get_class($productDetailMaximumLengthPlusGirthsItem) : gettype($productDetailMaximumLengthPlusGirthsItem)), __LINE__);
            }
        }
        $this->MaximumLengthPlusGirths = $maximumLengthPlusGirths;
        return $this;
    }
    /**
     * Add item to MaximumLengthPlusGirths value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function addToMaximumLengthPlusGirths(\NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure) {
            throw new \InvalidArgumentException(sprintf('The MaximumLengthPlusGirths property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MaximumLengthPlusGirths[] = $item;
        return $this;
    }
    /**
     * Get MaximumInsuredValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getMaximumInsuredValue()
    {
        return $this->MaximumInsuredValue;
    }
    /**
     * Set MaximumInsuredValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $maximumInsuredValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setMaximumInsuredValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $maximumInsuredValue = null)
    {
        $this->MaximumInsuredValue = $maximumInsuredValue;
        return $this;
    }
    /**
     * Get DerivedEtdType value
     * @return string|null
     */
    public function getDerivedEtdType()
    {
        return $this->DerivedEtdType;
    }
    /**
     * Set DerivedEtdType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CompletedEtdType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CompletedEtdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $derivedEtdType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
     */
    public function setDerivedEtdType($derivedEtdType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CompletedEtdType::valueIsValid($derivedEtdType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $derivedEtdType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CompletedEtdType::getValidValues())), __LINE__);
        }
        $this->DerivedEtdType = $derivedEtdType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProductDetail
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
