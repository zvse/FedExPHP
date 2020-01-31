<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedShipmentDetail Structs
 * @subpackage Structs
 */
class AssociatedShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $Sender;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Party
     */
    public $Recipient;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id for the payment on the return.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional customer reference data about the associated shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CustomerReference[]
     */
    public $CustomerReferences;
    /**
     * The ShipmentOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies shipment level operational information.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentOperationalDetail
     */
    public $ShipmentOperationalDetail;
    /**
     * The PackageOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies package level operational information on the associated shipment. This information is not tied to an individual outbound package.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail
     */
    public $PackageOperationalDetail;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for AssociatedShipmentDetail
     * @uses AssociatedShipmentDetail::setType()
     * @uses AssociatedShipmentDetail::setSender()
     * @uses AssociatedShipmentDetail::setRecipient()
     * @uses AssociatedShipmentDetail::setServiceType()
     * @uses AssociatedShipmentDetail::setPackagingType()
     * @uses AssociatedShipmentDetail::setTrackingId()
     * @uses AssociatedShipmentDetail::setCustomerReferences()
     * @uses AssociatedShipmentDetail::setShipmentOperationalDetail()
     * @uses AssociatedShipmentDetail::setPackageOperationalDetail()
     * @uses AssociatedShipmentDetail::setLabel()
     * @param string $type
     * @param \CommerceFedEx\FedExPHP\Structs\Party $sender
     * @param \CommerceFedEx\FedExPHP\Structs\Party $recipient
     * @param string $serviceType
     * @param string $packagingType
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerReference[] $customerReferences
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentOperationalDetail $shipmentOperationalDetail
     * @param \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail $packageOperationalDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument $label
     */
    public function __construct($type = null, \CommerceFedEx\FedExPHP\Structs\Party $sender = null, \CommerceFedEx\FedExPHP\Structs\Party $recipient = null, $serviceType = null, $packagingType = null, \CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId = null, array $customerReferences = array(), \CommerceFedEx\FedExPHP\Structs\ShipmentOperationalDetail $shipmentOperationalDetail = null, \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail $packageOperationalDetail = null, \CommerceFedEx\FedExPHP\Structs\ShippingDocument $label = null)
    {
        $this
            ->setType($type)
            ->setSender($sender)
            ->setRecipient($recipient)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setTrackingId($trackingId)
            ->setCustomerReferences($customerReferences)
            ->setShipmentOperationalDetail($shipmentOperationalDetail)
            ->setPackageOperationalDetail($packageOperationalDetail)
            ->setLabel($label);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\AssociatedShipmentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\AssociatedShipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\AssociatedShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\AssociatedShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Sender value
     * @return \CommerceFedEx\FedExPHP\Structs\Party|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $sender
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setSender(\CommerceFedEx\FedExPHP\Structs\Party $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \CommerceFedEx\FedExPHP\Structs\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \CommerceFedEx\FedExPHP\Structs\Party $recipient
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setRecipient(\CommerceFedEx\FedExPHP\Structs\Party $recipient = null)
    {
        $this->Recipient = $recipient;
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
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
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
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
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
     * Get TrackingId value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setTrackingId(\CommerceFedEx\FedExPHP\Structs\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \CommerceFedEx\FedExPHP\Structs\CustomerReference[]|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerReference[] $customerReferences
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setCustomerReferences(array $customerReferences = array())
    {
        foreach ($customerReferences as $associatedShipmentDetailCustomerReferencesItem) {
            // validation for constraint: itemType
            if (!$associatedShipmentDetailCustomerReferencesItem instanceof \CommerceFedEx\FedExPHP\Structs\CustomerReference) {
                throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomerReference, "%s" given', is_object($associatedShipmentDetailCustomerReferencesItem) ? get_class($associatedShipmentDetailCustomerReferencesItem) : gettype($associatedShipmentDetailCustomerReferencesItem)), __LINE__);
            }
        }
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Add item to CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CustomerReference $item
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function addToCustomerReferences(\CommerceFedEx\FedExPHP\Structs\CustomerReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CustomerReference) {
            throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \CommerceFedEx\FedExPHP\Structs\CustomerReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerReferences[] = $item;
        return $this;
    }
    /**
     * Get ShipmentOperationalDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentOperationalDetail|null
     */
    public function getShipmentOperationalDetail()
    {
        return $this->ShipmentOperationalDetail;
    }
    /**
     * Set ShipmentOperationalDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentOperationalDetail $shipmentOperationalDetail
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setShipmentOperationalDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentOperationalDetail $shipmentOperationalDetail = null)
    {
        $this->ShipmentOperationalDetail = $shipmentOperationalDetail;
        return $this;
    }
    /**
     * Get PackageOperationalDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail|null
     */
    public function getPackageOperationalDetail()
    {
        return $this->PackageOperationalDetail;
    }
    /**
     * Set PackageOperationalDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail $packageOperationalDetail
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setPackageOperationalDetail(\CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail $packageOperationalDetail = null)
    {
        $this->PackageOperationalDetail = $packageOperationalDetail;
        return $this;
    }
    /**
     * Get Label value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument $label
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
     */
    public function setLabel(\CommerceFedEx\FedExPHP\Structs\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedShipmentDetail
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
