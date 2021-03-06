<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReprintShippingDocumentsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ReprintShippingDocumentsReply
 * @subpackage Structs
 */
class ReprintShippingDocumentsReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The JobId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $JobId;
    /**
     * The ShipmentDocuments
     * Meta informations extracted from the WSDL
     * - documentation: Shipment level shipping documents for reprint
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]
     */
    public $ShipmentDocuments;
    /**
     * The PackageDocuments
     * Meta informations extracted from the WSDL
     * - documentation: Package-level shipping documents for reprint
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument[]
     */
    public $PackageDocuments;
    /**
     * Constructor method for ReprintShippingDocumentsReply
     * @uses ReprintShippingDocumentsReply::setHighestSeverity()
     * @uses ReprintShippingDocumentsReply::setNotifications()
     * @uses ReprintShippingDocumentsReply::setVersion()
     * @uses ReprintShippingDocumentsReply::setTransactionDetail()
     * @uses ReprintShippingDocumentsReply::setJobId()
     * @uses ReprintShippingDocumentsReply::setShipmentDocuments()
     * @uses ReprintShippingDocumentsReply::setPackageDocuments()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $jobId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $shipmentDocuments
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument[] $packageDocuments
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $jobId = null, array $shipmentDocuments = array(), array $packageDocuments = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setJobId($jobId)
            ->setShipmentDocuments($shipmentDocuments)
            ->setPackageDocuments($packageDocuments);
    }
    /**
     * Get HighestSeverity value
     * @return string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $reprintShippingDocumentsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$reprintShippingDocumentsReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($reprintShippingDocumentsReplyNotificationsItem) ? get_class($reprintShippingDocumentsReplyNotificationsItem) : gettype($reprintShippingDocumentsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get JobId value
     * @return string|null
     */
    public function getJobId()
    {
        return $this->JobId;
    }
    /**
     * Set JobId value
     * @param string $jobId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function setJobId($jobId = null)
    {
        // validation for constraint: string
        if (!is_null($jobId) && !is_string($jobId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jobId)), __LINE__);
        }
        $this->JobId = $jobId;
        return $this;
    }
    /**
     * Get ShipmentDocuments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]|null
     */
    public function getShipmentDocuments()
    {
        return $this->ShipmentDocuments;
    }
    /**
     * Set ShipmentDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $shipmentDocuments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function setShipmentDocuments(array $shipmentDocuments = array())
    {
        foreach ($shipmentDocuments as $reprintShippingDocumentsReplyShipmentDocumentsItem) {
            // validation for constraint: itemType
            if (!$reprintShippingDocumentsReplyShipmentDocumentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The ShipmentDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($reprintShippingDocumentsReplyShipmentDocumentsItem) ? get_class($reprintShippingDocumentsReplyShipmentDocumentsItem) : gettype($reprintShippingDocumentsReplyShipmentDocumentsItem)), __LINE__);
            }
        }
        $this->ShipmentDocuments = $shipmentDocuments;
        return $this;
    }
    /**
     * Add item to ShipmentDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function addToShipmentDocuments(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
            throw new \InvalidArgumentException(sprintf('The ShipmentDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentDocuments[] = $item;
        return $this;
    }
    /**
     * Get PackageDocuments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument[]|null
     */
    public function getPackageDocuments()
    {
        return $this->PackageDocuments;
    }
    /**
     * Set PackageDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument[] $packageDocuments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function setPackageDocuments(array $packageDocuments = array())
    {
        foreach ($packageDocuments as $reprintShippingDocumentsReplyPackageDocumentsItem) {
            // validation for constraint: itemType
            if (!$reprintShippingDocumentsReplyPackageDocumentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument) {
                throw new \InvalidArgumentException(sprintf('The PackageDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument, "%s" given', is_object($reprintShippingDocumentsReplyPackageDocumentsItem) ? get_class($reprintShippingDocumentsReplyPackageDocumentsItem) : gettype($reprintShippingDocumentsReplyPackageDocumentsItem)), __LINE__);
            }
        }
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    /**
     * Add item to PackageDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
     */
    public function addToPackageDocuments(\NicholasCreativeMedia\FedExPHP\Structs\PackageDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument) {
            throw new \InvalidArgumentException(sprintf('The PackageDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PackageDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageDocuments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply
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
