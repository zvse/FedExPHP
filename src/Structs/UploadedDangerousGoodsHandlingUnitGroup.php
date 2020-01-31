<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadedDangerousGoodsHandlingUnitGroup Structs
 * @subpackage Structs
 */
class UploadedDangerousGoodsHandlingUnitGroup extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Specifies detailed commodity information related to the regulations.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The NumberOfHandlingUnits
     * Meta informations extracted from the WSDL
     * - documentation: This specifies the number of identical handling units in the shipment for this group.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfHandlingUnits;
    /**
     * The AssociatedDocumentDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail[]
     */
    public $AssociatedDocumentDetails;
    /**
     * The TrackingNumberUnits
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[]
     */
    public $TrackingNumberUnits;
    /**
     * The HandlingUnit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit
     */
    public $HandlingUnit;
    /**
     * Constructor method for UploadedDangerousGoodsHandlingUnitGroup
     * @uses UploadedDangerousGoodsHandlingUnitGroup::setId()
     * @uses UploadedDangerousGoodsHandlingUnitGroup::setDescription()
     * @uses UploadedDangerousGoodsHandlingUnitGroup::setNumberOfHandlingUnits()
     * @uses UploadedDangerousGoodsHandlingUnitGroup::setAssociatedDocumentDetails()
     * @uses UploadedDangerousGoodsHandlingUnitGroup::setTrackingNumberUnits()
     * @uses UploadedDangerousGoodsHandlingUnitGroup::setHandlingUnit()
     * @param string $id
     * @param string $description
     * @param int $numberOfHandlingUnits
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail[] $associatedDocumentDetails
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[] $trackingNumberUnits
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit $handlingUnit
     */
    public function __construct($id = null, $description = null, $numberOfHandlingUnits = null, array $associatedDocumentDetails = array(), array $trackingNumberUnits = array(), \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit $handlingUnit = null)
    {
        $this
            ->setId($id)
            ->setDescription($description)
            ->setNumberOfHandlingUnits($numberOfHandlingUnits)
            ->setAssociatedDocumentDetails($associatedDocumentDetails)
            ->setTrackingNumberUnits($trackingNumberUnits)
            ->setHandlingUnit($handlingUnit);
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
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
     * Get NumberOfHandlingUnits value
     * @return int|null
     */
    public function getNumberOfHandlingUnits()
    {
        return $this->NumberOfHandlingUnits;
    }
    /**
     * Set NumberOfHandlingUnits value
     * @param int $numberOfHandlingUnits
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setNumberOfHandlingUnits($numberOfHandlingUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfHandlingUnits) && !is_numeric($numberOfHandlingUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfHandlingUnits)), __LINE__);
        }
        $this->NumberOfHandlingUnits = $numberOfHandlingUnits;
        return $this;
    }
    /**
     * Get AssociatedDocumentDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail[]|null
     */
    public function getAssociatedDocumentDetails()
    {
        return $this->AssociatedDocumentDetails;
    }
    /**
     * Set AssociatedDocumentDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail[] $associatedDocumentDetails
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setAssociatedDocumentDetails(array $associatedDocumentDetails = array())
    {
        foreach ($associatedDocumentDetails as $uploadedDangerousGoodsHandlingUnitGroupAssociatedDocumentDetailsItem) {
            // validation for constraint: itemType
            if (!$uploadedDangerousGoodsHandlingUnitGroupAssociatedDocumentDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The AssociatedDocumentDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail, "%s" given', is_object($uploadedDangerousGoodsHandlingUnitGroupAssociatedDocumentDetailsItem) ? get_class($uploadedDangerousGoodsHandlingUnitGroupAssociatedDocumentDetailsItem) : gettype($uploadedDangerousGoodsHandlingUnitGroupAssociatedDocumentDetailsItem)), __LINE__);
            }
        }
        $this->AssociatedDocumentDetails = $associatedDocumentDetails;
        return $this;
    }
    /**
     * Add item to AssociatedDocumentDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public function addToAssociatedDocumentDetails(\CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The AssociatedDocumentDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedDocumentDetails[] = $item;
        return $this;
    }
    /**
     * Get TrackingNumberUnits value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[]|null
     */
    public function getTrackingNumberUnits()
    {
        return $this->TrackingNumberUnits;
    }
    /**
     * Set TrackingNumberUnits value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit[] $trackingNumberUnits
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setTrackingNumberUnits(array $trackingNumberUnits = array())
    {
        foreach ($trackingNumberUnits as $uploadedDangerousGoodsHandlingUnitGroupTrackingNumberUnitsItem) {
            // validation for constraint: itemType
            if (!$uploadedDangerousGoodsHandlingUnitGroupTrackingNumberUnitsItem instanceof \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit) {
                throw new \InvalidArgumentException(sprintf('The TrackingNumberUnits property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit, "%s" given', is_object($uploadedDangerousGoodsHandlingUnitGroupTrackingNumberUnitsItem) ? get_class($uploadedDangerousGoodsHandlingUnitGroupTrackingNumberUnitsItem) : gettype($uploadedDangerousGoodsHandlingUnitGroupTrackingNumberUnitsItem)), __LINE__);
            }
        }
        $this->TrackingNumberUnits = $trackingNumberUnits;
        return $this;
    }
    /**
     * Add item to TrackingNumberUnits value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public function addToTrackingNumberUnits(\CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit) {
            throw new \InvalidArgumentException(sprintf('The TrackingNumberUnits property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingNumberUnit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingNumberUnits[] = $item;
        return $this;
    }
    /**
     * Get HandlingUnit value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit|null
     */
    public function getHandlingUnit()
    {
        return $this->HandlingUnit;
    }
    /**
     * Set HandlingUnit value
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit $handlingUnit
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setHandlingUnit(\CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit $handlingUnit = null)
    {
        $this->HandlingUnit = $handlingUnit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
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
