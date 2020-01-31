<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadedDangerousGoodsCommodityDescription Structs
 * @subpackage Structs
 */
class UploadedDangerousGoodsCommodityDescription extends AbstractStructBase
{
    /**
     * The IdType
     * Meta informations extracted from the WSDL
     * - documentation: This identifies the commodity ID type (e.g. - UN, ID, or NA)
     * - minOccurs: 0
     * @var string
     */
    public $IdType;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Regulatory identifier for a commodity (e.g. - 1845)
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: In conjunction with the regulatory identifier, this field uniquely identifies a specific record in the commodity regulation table.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The PackingGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackingGroup;
    /**
     * The PackingInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackingInstructions;
    /**
     * The AircraftCategoryType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of aircraft available for this commodity
     * - minOccurs: 0
     * @var string
     */
    public $AircraftCategoryType;
    /**
     * The ProperShippingName
     * Meta informations extracted from the WSDL
     * - documentation: This identifies the proper shipping name as defined by the regulation. This could also include qualifying words.
     * - minOccurs: 0
     * @var string
     */
    public $ProperShippingName;
    /**
     * The TechnicalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TechnicalName;
    /**
     * The PrimaryClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryClass;
    /**
     * The SubsidiaryClasses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SubsidiaryClasses;
    /**
     * The ReportableQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReportableQuantity;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Percentage;
    /**
     * The AuthorizationInformation
     * Meta informations extracted from the WSDL
     * - documentation: This field should be populated with any authorization and other required information. Depending on the regulation, this could include the Type DOT Label(s), special permit numbers, or other information as needed. For ground
     * shipments, this is equivalent to the labelText field.
     * - minOccurs: 0
     * @var string
     */
    public $AuthorizationInformation;
    /**
     * Constructor method for UploadedDangerousGoodsCommodityDescription
     * @uses UploadedDangerousGoodsCommodityDescription::setIdType()
     * @uses UploadedDangerousGoodsCommodityDescription::setId()
     * @uses UploadedDangerousGoodsCommodityDescription::setSequenceNumber()
     * @uses UploadedDangerousGoodsCommodityDescription::setPackingGroup()
     * @uses UploadedDangerousGoodsCommodityDescription::setPackingInstructions()
     * @uses UploadedDangerousGoodsCommodityDescription::setAircraftCategoryType()
     * @uses UploadedDangerousGoodsCommodityDescription::setProperShippingName()
     * @uses UploadedDangerousGoodsCommodityDescription::setTechnicalName()
     * @uses UploadedDangerousGoodsCommodityDescription::setPrimaryClass()
     * @uses UploadedDangerousGoodsCommodityDescription::setSubsidiaryClasses()
     * @uses UploadedDangerousGoodsCommodityDescription::setReportableQuantity()
     * @uses UploadedDangerousGoodsCommodityDescription::setPercentage()
     * @uses UploadedDangerousGoodsCommodityDescription::setAuthorizationInformation()
     * @param string $idType
     * @param string $id
     * @param int $sequenceNumber
     * @param string $packingGroup
     * @param string $packingInstructions
     * @param string $aircraftCategoryType
     * @param string $properShippingName
     * @param string $technicalName
     * @param string $primaryClass
     * @param string[] $subsidiaryClasses
     * @param bool $reportableQuantity
     * @param float $percentage
     * @param string $authorizationInformation
     */
    public function __construct($idType = null, $id = null, $sequenceNumber = null, $packingGroup = null, $packingInstructions = null, $aircraftCategoryType = null, $properShippingName = null, $technicalName = null, $primaryClass = null, array $subsidiaryClasses = array(), $reportableQuantity = null, $percentage = null, $authorizationInformation = null)
    {
        $this
            ->setIdType($idType)
            ->setId($id)
            ->setSequenceNumber($sequenceNumber)
            ->setPackingGroup($packingGroup)
            ->setPackingInstructions($packingInstructions)
            ->setAircraftCategoryType($aircraftCategoryType)
            ->setProperShippingName($properShippingName)
            ->setTechnicalName($technicalName)
            ->setPrimaryClass($primaryClass)
            ->setSubsidiaryClasses($subsidiaryClasses)
            ->setReportableQuantity($reportableQuantity)
            ->setPercentage($percentage)
            ->setAuthorizationInformation($authorizationInformation);
    }
    /**
     * Get IdType value
     * @return string|null
     */
    public function getIdType()
    {
        return $this->IdType;
    }
    /**
     * Set IdType value
     * @param string $idType
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setIdType($idType = null)
    {
        // validation for constraint: string
        if (!is_null($idType) && !is_string($idType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($idType)), __LINE__);
        }
        $this->IdType = $idType;
        return $this;
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
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
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get PackingGroup value
     * @return string|null
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }
    /**
     * Set PackingGroup value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsPackingGroupType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsPackingGroupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packingGroup
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setPackingGroup($packingGroup = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsPackingGroupType::valueIsValid($packingGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingGroup, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsPackingGroupType::getValidValues())), __LINE__);
        }
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    /**
     * Get PackingInstructions value
     * @return string|null
     */
    public function getPackingInstructions()
    {
        return $this->PackingInstructions;
    }
    /**
     * Set PackingInstructions value
     * @param string $packingInstructions
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setPackingInstructions($packingInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($packingInstructions) && !is_string($packingInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packingInstructions)), __LINE__);
        }
        $this->PackingInstructions = $packingInstructions;
        return $this;
    }
    /**
     * Get AircraftCategoryType value
     * @return string|null
     */
    public function getAircraftCategoryType()
    {
        return $this->AircraftCategoryType;
    }
    /**
     * Set AircraftCategoryType value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aircraftCategoryType
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setAircraftCategoryType($aircraftCategoryType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::valueIsValid($aircraftCategoryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aircraftCategoryType, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsAircraftCategoryType::getValidValues())), __LINE__);
        }
        $this->AircraftCategoryType = $aircraftCategoryType;
        return $this;
    }
    /**
     * Get ProperShippingName value
     * @return string|null
     */
    public function getProperShippingName()
    {
        return $this->ProperShippingName;
    }
    /**
     * Set ProperShippingName value
     * @param string $properShippingName
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setProperShippingName($properShippingName = null)
    {
        // validation for constraint: string
        if (!is_null($properShippingName) && !is_string($properShippingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($properShippingName)), __LINE__);
        }
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    /**
     * Get TechnicalName value
     * @return string|null
     */
    public function getTechnicalName()
    {
        return $this->TechnicalName;
    }
    /**
     * Set TechnicalName value
     * @param string $technicalName
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setTechnicalName($technicalName = null)
    {
        // validation for constraint: string
        if (!is_null($technicalName) && !is_string($technicalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($technicalName)), __LINE__);
        }
        $this->TechnicalName = $technicalName;
        return $this;
    }
    /**
     * Get PrimaryClass value
     * @return string|null
     */
    public function getPrimaryClass()
    {
        return $this->PrimaryClass;
    }
    /**
     * Set PrimaryClass value
     * @param string $primaryClass
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setPrimaryClass($primaryClass = null)
    {
        // validation for constraint: string
        if (!is_null($primaryClass) && !is_string($primaryClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryClass)), __LINE__);
        }
        $this->PrimaryClass = $primaryClass;
        return $this;
    }
    /**
     * Get SubsidiaryClasses value
     * @return string[]|null
     */
    public function getSubsidiaryClasses()
    {
        return $this->SubsidiaryClasses;
    }
    /**
     * Set SubsidiaryClasses value
     * @throws \InvalidArgumentException
     * @param string[] $subsidiaryClasses
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses = array())
    {
        foreach ($subsidiaryClasses as $uploadedDangerousGoodsCommodityDescriptionSubsidiaryClassesItem) {
            // validation for constraint: itemType
            if (!is_string($uploadedDangerousGoodsCommodityDescriptionSubsidiaryClassesItem)) {
                throw new \InvalidArgumentException(sprintf('The SubsidiaryClasses property can only contain items of string, "%s" given', is_object($uploadedDangerousGoodsCommodityDescriptionSubsidiaryClassesItem) ? get_class($uploadedDangerousGoodsCommodityDescriptionSubsidiaryClassesItem) : gettype($uploadedDangerousGoodsCommodityDescriptionSubsidiaryClassesItem)), __LINE__);
            }
        }
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    /**
     * Add item to SubsidiaryClasses value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function addToSubsidiaryClasses($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SubsidiaryClasses property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubsidiaryClasses[] = $item;
        return $this;
    }
    /**
     * Get ReportableQuantity value
     * @return bool|null
     */
    public function getReportableQuantity()
    {
        return $this->ReportableQuantity;
    }
    /**
     * Set ReportableQuantity value
     * @param bool $reportableQuantity
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setReportableQuantity($reportableQuantity = null)
    {
        $this->ReportableQuantity = $reportableQuantity;
        return $this;
    }
    /**
     * Get Percentage value
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param float $percentage
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setPercentage($percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get AuthorizationInformation value
     * @return string|null
     */
    public function getAuthorizationInformation()
    {
        return $this->AuthorizationInformation;
    }
    /**
     * Set AuthorizationInformation value
     * @param string $authorizationInformation
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
     */
    public function setAuthorizationInformation($authorizationInformation = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationInformation) && !is_string($authorizationInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizationInformation)), __LINE__);
        }
        $this->AuthorizationInformation = $authorizationInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityDescription
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
