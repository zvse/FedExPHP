<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateDangerousGoodsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ValidateDangerousGoodsReply
 * @subpackage Structs
 */
class ValidateDangerousGoodsReply extends AbstractStructBase
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
     * @var \CommerceFedEx\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * The CompletedHandlingUnitGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[]
     */
    public $CompletedHandlingUnitGroups;
    /**
     * Constructor method for ValidateDangerousGoodsReply
     * @uses ValidateDangerousGoodsReply::setHighestSeverity()
     * @uses ValidateDangerousGoodsReply::setNotifications()
     * @uses ValidateDangerousGoodsReply::setVersion()
     * @uses ValidateDangerousGoodsReply::setTransactionDetail()
     * @uses ValidateDangerousGoodsReply::setCompletedShipmentDetail()
     * @uses ValidateDangerousGoodsReply::setCompletedHandlingUnitGroups()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[] $completedHandlingUnitGroups
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail = null, array $completedHandlingUnitGroups = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
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
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \CommerceFedEx\FedExPHP\Structs\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $validateDangerousGoodsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$validateDangerousGoodsReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($validateDangerousGoodsReplyNotificationsItem) ? get_class($validateDangerousGoodsReplyNotificationsItem) : gettype($validateDangerousGoodsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function addToNotifications(\CommerceFedEx\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function setVersion(\CommerceFedEx\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get CompletedShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function setCompletedShipmentDetail(\CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Get CompletedHandlingUnitGroups value
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[]|null
     */
    public function getCompletedHandlingUnitGroups()
    {
        return $this->CompletedHandlingUnitGroups;
    }
    /**
     * Set CompletedHandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup[] $completedHandlingUnitGroups
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function setCompletedHandlingUnitGroups(array $completedHandlingUnitGroups = array())
    {
        foreach ($completedHandlingUnitGroups as $validateDangerousGoodsReplyCompletedHandlingUnitGroupsItem) {
            // validation for constraint: itemType
            if (!$validateDangerousGoodsReplyCompletedHandlingUnitGroupsItem instanceof \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup) {
                throw new \InvalidArgumentException(sprintf('The CompletedHandlingUnitGroups property can only contain items of \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($validateDangerousGoodsReplyCompletedHandlingUnitGroupsItem) ? get_class($validateDangerousGoodsReplyCompletedHandlingUnitGroupsItem) : gettype($validateDangerousGoodsReplyCompletedHandlingUnitGroupsItem)), __LINE__);
            }
        }
        $this->CompletedHandlingUnitGroups = $completedHandlingUnitGroups;
        return $this;
    }
    /**
     * Add item to CompletedHandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup $item
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
     */
    public function addToCompletedHandlingUnitGroups(\CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup) {
            throw new \InvalidArgumentException(sprintf('The CompletedHandlingUnitGroups property can only contain items of \CommerceFedEx\FedExPHP\Structs\CompletedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ValidateDangerousGoodsReply
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