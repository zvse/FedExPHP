<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadedDangerousGoodsShipmentDetail Structs
 * @subpackage Structs
 */
class UploadedDangerousGoodsShipmentDetail extends AbstractStructBase
{
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $Origin;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Address
     */
    public $Destination;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipDate;
    /**
     * The Offeror
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Offeror;
    /**
     * The Signatory
     * Meta informations extracted from the WSDL
     * - documentation: Name, title and place of the signatory for this shipment.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DangerousGoodsSignatory
     */
    public $Signatory;
    /**
     * The InfectiousSubstanceResponsibleContact
     * Meta informations extracted from the WSDL
     * - documentation: The contact information for infectious substances.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Contact
     */
    public $InfectiousSubstanceResponsibleContact;
    /**
     * The EmergencyContactNumber
     * Meta informations extracted from the WSDL
     * - documentation: Telephone number to use for contact in the event of an emergency.
     * - minOccurs: 0
     * @var string
     */
    public $EmergencyContactNumber;
    /**
     * The AircraftCategoryType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of aircraft available for this shipment.
     * - minOccurs: 0
     * @var string
     */
    public $AircraftCategoryType;
    /**
     * The AdditionalHandling
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalHandling;
    /**
     * The MasterTrackingId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId
     */
    public $MasterTrackingId;
    /**
     * Constructor method for UploadedDangerousGoodsShipmentDetail
     * @uses UploadedDangerousGoodsShipmentDetail::setAttributes()
     * @uses UploadedDangerousGoodsShipmentDetail::setOrigin()
     * @uses UploadedDangerousGoodsShipmentDetail::setDestination()
     * @uses UploadedDangerousGoodsShipmentDetail::setCarrierCode()
     * @uses UploadedDangerousGoodsShipmentDetail::setServiceType()
     * @uses UploadedDangerousGoodsShipmentDetail::setShipDate()
     * @uses UploadedDangerousGoodsShipmentDetail::setOfferor()
     * @uses UploadedDangerousGoodsShipmentDetail::setSignatory()
     * @uses UploadedDangerousGoodsShipmentDetail::setInfectiousSubstanceResponsibleContact()
     * @uses UploadedDangerousGoodsShipmentDetail::setEmergencyContactNumber()
     * @uses UploadedDangerousGoodsShipmentDetail::setAircraftCategoryType()
     * @uses UploadedDangerousGoodsShipmentDetail::setAdditionalHandling()
     * @uses UploadedDangerousGoodsShipmentDetail::setMasterTrackingId()
     * @param string[] $attributes
     * @param \CommerceFedEx\FedExPHP\Structs\Address $origin
     * @param \CommerceFedEx\FedExPHP\Structs\Address $destination
     * @param string $carrierCode
     * @param string $serviceType
     * @param string $shipDate
     * @param string $offeror
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsSignatory $signatory
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $infectiousSubstanceResponsibleContact
     * @param string $emergencyContactNumber
     * @param string $aircraftCategoryType
     * @param string $additionalHandling
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId
     */
    public function __construct(array $attributes = array(), \CommerceFedEx\FedExPHP\Structs\Address $origin = null, \CommerceFedEx\FedExPHP\Structs\Address $destination = null, $carrierCode = null, $serviceType = null, $shipDate = null, $offeror = null, \CommerceFedEx\FedExPHP\Structs\DangerousGoodsSignatory $signatory = null, \CommerceFedEx\FedExPHP\Structs\Contact $infectiousSubstanceResponsibleContact = null, $emergencyContactNumber = null, $aircraftCategoryType = null, $additionalHandling = null, \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId = null)
    {
        $this
            ->setAttributes($attributes)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCarrierCode($carrierCode)
            ->setServiceType($serviceType)
            ->setShipDate($shipDate)
            ->setOfferor($offeror)
            ->setSignatory($signatory)
            ->setInfectiousSubstanceResponsibleContact($infectiousSubstanceResponsibleContact)
            ->setEmergencyContactNumber($emergencyContactNumber)
            ->setAircraftCategoryType($aircraftCategoryType)
            ->setAdditionalHandling($additionalHandling)
            ->setMasterTrackingId($masterTrackingId);
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $uploadedDangerousGoodsShipmentDetailAttributesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::valueIsValid($uploadedDangerousGoodsShipmentDetailAttributesItem)) {
                $invalidValues[] = var_export($uploadedDangerousGoodsShipmentDetailAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadedDangerousGoodsShipmentAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get Origin value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $origin
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setOrigin(\CommerceFedEx\FedExPHP\Structs\Address $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get Destination value
     * @return \CommerceFedEx\FedExPHP\Structs\Address|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \CommerceFedEx\FedExPHP\Structs\Address $destination
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setDestination(\CommerceFedEx\FedExPHP\Structs\Address $destination = null)
    {
        $this->Destination = $destination;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \CommerceFedEx\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
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
     * Get ShipDate value
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    /**
     * Set ShipDate value
     * @param string $shipDate
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setShipDate($shipDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDate)), __LINE__);
        }
        $this->ShipDate = $shipDate;
        return $this;
    }
    /**
     * Get Offeror value
     * @return string|null
     */
    public function getOfferor()
    {
        return $this->Offeror;
    }
    /**
     * Set Offeror value
     * @param string $offeror
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setOfferor($offeror = null)
    {
        // validation for constraint: string
        if (!is_null($offeror) && !is_string($offeror)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offeror)), __LINE__);
        }
        $this->Offeror = $offeror;
        return $this;
    }
    /**
     * Get Signatory value
     * @return \CommerceFedEx\FedExPHP\Structs\DangerousGoodsSignatory|null
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }
    /**
     * Set Signatory value
     * @param \CommerceFedEx\FedExPHP\Structs\DangerousGoodsSignatory $signatory
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setSignatory(\CommerceFedEx\FedExPHP\Structs\DangerousGoodsSignatory $signatory = null)
    {
        $this->Signatory = $signatory;
        return $this;
    }
    /**
     * Get InfectiousSubstanceResponsibleContact value
     * @return \CommerceFedEx\FedExPHP\Structs\Contact|null
     */
    public function getInfectiousSubstanceResponsibleContact()
    {
        return $this->InfectiousSubstanceResponsibleContact;
    }
    /**
     * Set InfectiousSubstanceResponsibleContact value
     * @param \CommerceFedEx\FedExPHP\Structs\Contact $infectiousSubstanceResponsibleContact
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setInfectiousSubstanceResponsibleContact(\CommerceFedEx\FedExPHP\Structs\Contact $infectiousSubstanceResponsibleContact = null)
    {
        $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
        return $this;
    }
    /**
     * Get EmergencyContactNumber value
     * @return string|null
     */
    public function getEmergencyContactNumber()
    {
        return $this->EmergencyContactNumber;
    }
    /**
     * Set EmergencyContactNumber value
     * @param string $emergencyContactNumber
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber = null)
    {
        // validation for constraint: string
        if (!is_null($emergencyContactNumber) && !is_string($emergencyContactNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emergencyContactNumber)), __LINE__);
        }
        $this->EmergencyContactNumber = $emergencyContactNumber;
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
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
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
     * Get AdditionalHandling value
     * @return string|null
     */
    public function getAdditionalHandling()
    {
        return $this->AdditionalHandling;
    }
    /**
     * Set AdditionalHandling value
     * @param string $additionalHandling
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setAdditionalHandling($additionalHandling = null)
    {
        // validation for constraint: string
        if (!is_null($additionalHandling) && !is_string($additionalHandling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalHandling)), __LINE__);
        }
        $this->AdditionalHandling = $additionalHandling;
        return $this;
    }
    /**
     * Get MasterTrackingId value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId|null
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    /**
     * Set MasterTrackingId value
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
     */
    public function setMasterTrackingId(\CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingId = null)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsShipmentDetail
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
