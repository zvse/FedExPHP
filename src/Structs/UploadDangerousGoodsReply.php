<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDangerousGoodsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:UploadDangerousGoodsReply
 * @subpackage Structs
 */
class UploadDangerousGoodsReply extends AbstractStructBase
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
     * The UploadId
     * Meta informations extracted from the WSDL
     * - documentation: The identifier of the upload, which can be used for subsequent retrieval or modification transactions.
     * - minOccurs: 0
     * @var string
     */
    public $UploadId;
    /**
     * The MasterTrackingId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId
     */
    public $MasterTrackingId;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * The CompletedHandlingUnitGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[]
     */
    public $CompletedHandlingUnitGroups;
    /**
     * Constructor method for UploadDangerousGoodsReply
     * @uses UploadDangerousGoodsReply::setHighestSeverity()
     * @uses UploadDangerousGoodsReply::setNotifications()
     * @uses UploadDangerousGoodsReply::setVersion()
     * @uses UploadDangerousGoodsReply::setTransactionDetail()
     * @uses UploadDangerousGoodsReply::setUploadId()
     * @uses UploadDangerousGoodsReply::setMasterTrackingId()
     * @uses UploadDangerousGoodsReply::setCompletedShipmentDetail()
     * @uses UploadDangerousGoodsReply::setCompletedHandlingUnitGroups()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $uploadId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[] $completedHandlingUnitGroups
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $uploadId = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail = null, array $completedHandlingUnitGroups = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setUploadId($uploadId)
            ->setMasterTrackingId($masterTrackingId)
            ->setCompletedShipmentDetail($completedShipmentDetail)
            ->setCompletedHandlingUnitGroups($completedHandlingUnitGroups);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $uploadDangerousGoodsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$uploadDangerousGoodsReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($uploadDangerousGoodsReplyNotificationsItem) ? get_class($uploadDangerousGoodsReplyNotificationsItem) : gettype($uploadDangerousGoodsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get UploadId value
     * @return string|null
     */
    public function getUploadId()
    {
        return $this->UploadId;
    }
    /**
     * Set UploadId value
     * @param string $uploadId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
     */
    public function setUploadId($uploadId = null)
    {
        // validation for constraint: string
        if (!is_null($uploadId) && !is_string($uploadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uploadId)), __LINE__);
        }
        $this->UploadId = $uploadId;
        return $this;
    }
    /**
     * Get MasterTrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId|null
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    /**
     * Set MasterTrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
     */
    public function setMasterTrackingId(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId = null)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Get CompletedShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
     */
    public function setCompletedShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Get CompletedHandlingUnitGroups value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[]|null
     */
    public function getCompletedHandlingUnitGroups()
    {
        return $this->CompletedHandlingUnitGroups;
    }
    /**
     * Set CompletedHandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[] $completedHandlingUnitGroups
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
     */
    public function setCompletedHandlingUnitGroups(array $completedHandlingUnitGroups = array())
    {
        foreach ($completedHandlingUnitGroups as $uploadDangerousGoodsReplyCompletedHandlingUnitGroupsItem) {
            // validation for constraint: itemType
            if (!$uploadDangerousGoodsReplyCompletedHandlingUnitGroupsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup) {
                throw new \InvalidArgumentException(sprintf('The CompletedHandlingUnitGroups property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($uploadDangerousGoodsReplyCompletedHandlingUnitGroupsItem) ? get_class($uploadDangerousGoodsReplyCompletedHandlingUnitGroupsItem) : gettype($uploadDangerousGoodsReplyCompletedHandlingUnitGroupsItem)), __LINE__);
            }
        }
        $this->CompletedHandlingUnitGroups = $completedHandlingUnitGroups;
        return $this;
    }
    /**
     * Add item to CompletedHandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
     */
    public function addToCompletedHandlingUnitGroups(\NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup) {
            throw new \InvalidArgumentException(sprintf('The CompletedHandlingUnitGroups property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CompletedHandlingUnitGroups[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDangerousGoodsReply
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
