<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveDangerousGoodsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:RetrieveDangerousGoodsReply
 * @subpackage Structs
 */
class RetrieveDangerousGoodsReply extends AbstractStructBase
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
     * The ShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail
     */
    public $ShipmentDetail;
    /**
     * The HandlingUnitGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup[]
     */
    public $HandlingUnitGroups;
    /**
     * Constructor method for RetrieveDangerousGoodsReply
     * @uses RetrieveDangerousGoodsReply::setHighestSeverity()
     * @uses RetrieveDangerousGoodsReply::setNotifications()
     * @uses RetrieveDangerousGoodsReply::setVersion()
     * @uses RetrieveDangerousGoodsReply::setTransactionDetail()
     * @uses RetrieveDangerousGoodsReply::setShipmentDetail()
     * @uses RetrieveDangerousGoodsReply::setHandlingUnitGroups()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail $shipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup[] $handlingUnitGroups
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail $shipmentDetail = null, array $handlingUnitGroups = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setShipmentDetail($shipmentDetail)
            ->setHandlingUnitGroups($handlingUnitGroups);
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $retrieveDangerousGoodsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$retrieveDangerousGoodsReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($retrieveDangerousGoodsReplyNotificationsItem) ? get_class($retrieveDangerousGoodsReplyNotificationsItem) : gettype($retrieveDangerousGoodsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail|null
     */
    public function getShipmentDetail()
    {
        return $this->ShipmentDetail;
    }
    /**
     * Set ShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail $shipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
     */
    public function setShipmentDetail(\CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsShipmentDetail $shipmentDetail = null)
    {
        $this->ShipmentDetail = $shipmentDetail;
        return $this;
    }
    /**
     * Get HandlingUnitGroups value
     * @return \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup[]|null
     */
    public function getHandlingUnitGroups()
    {
        return $this->HandlingUnitGroups;
    }
    /**
     * Set HandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup[] $handlingUnitGroups
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
     */
    public function setHandlingUnitGroups(array $handlingUnitGroups = array())
    {
        foreach ($handlingUnitGroups as $retrieveDangerousGoodsReplyHandlingUnitGroupsItem) {
            // validation for constraint: itemType
            if (!$retrieveDangerousGoodsReplyHandlingUnitGroupsItem instanceof \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup) {
                throw new \InvalidArgumentException(sprintf('The HandlingUnitGroups property can only contain items of \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($retrieveDangerousGoodsReplyHandlingUnitGroupsItem) ? get_class($retrieveDangerousGoodsReplyHandlingUnitGroupsItem) : gettype($retrieveDangerousGoodsReplyHandlingUnitGroupsItem)), __LINE__);
            }
        }
        $this->HandlingUnitGroups = $handlingUnitGroups;
        return $this;
    }
    /**
     * Add item to HandlingUnitGroups value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup $item
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
     */
    public function addToHandlingUnitGroups(\CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup) {
            throw new \InvalidArgumentException(sprintf('The HandlingUnitGroups property can only contain items of \CommerceFedEx\FedExPHP\Structs\RecordedDangerousGoodsHandlingUnitGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HandlingUnitGroups[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveDangerousGoodsReply
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
