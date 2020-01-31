<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessDeliveryReply Structs
 * Meta informations extracted from the WSDL
 * - documentation: Reply parameter of IFSS method to process a specific delivery option
 * - type: ns:ProcessDeliveryReply
 * @subpackage Structs
 */
class ProcessDeliveryReply extends AbstractStructBase
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
     * The Confirmation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Confirmation;
    /**
     * The MasterTrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId
     */
    public $MasterTrackingNumber;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageCount;
    /**
     * The EstimatedDeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Projected delivery time based on delivery option requested.
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryTimestamp;
    /**
     * Constructor method for ProcessDeliveryReply
     * @uses ProcessDeliveryReply::setHighestSeverity()
     * @uses ProcessDeliveryReply::setNotifications()
     * @uses ProcessDeliveryReply::setVersion()
     * @uses ProcessDeliveryReply::setTransactionDetail()
     * @uses ProcessDeliveryReply::setConfirmation()
     * @uses ProcessDeliveryReply::setMasterTrackingNumber()
     * @uses ProcessDeliveryReply::setPackageCount()
     * @uses ProcessDeliveryReply::setEstimatedDeliveryTimestamp()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $confirmation
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingNumber
     * @param int $packageCount
     * @param string $estimatedDeliveryTimestamp
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $confirmation = null, \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingNumber = null, $packageCount = null, $estimatedDeliveryTimestamp = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setConfirmation($confirmation)
            ->setMasterTrackingNumber($masterTrackingNumber)
            ->setPackageCount($packageCount)
            ->setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $processDeliveryReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$processDeliveryReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($processDeliveryReplyNotificationsItem) ? get_class($processDeliveryReplyNotificationsItem) : gettype($processDeliveryReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get Confirmation value
     * @return string|null
     */
    public function getConfirmation()
    {
        return $this->Confirmation;
    }
    /**
     * Set Confirmation value
     * @param string $confirmation
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
     */
    public function setConfirmation($confirmation = null)
    {
        // validation for constraint: string
        if (!is_null($confirmation) && !is_string($confirmation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmation)), __LINE__);
        }
        $this->Confirmation = $confirmation;
        return $this;
    }
    /**
     * Get MasterTrackingNumber value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId|null
     */
    public function getMasterTrackingNumber()
    {
        return $this->MasterTrackingNumber;
    }
    /**
     * Set MasterTrackingNumber value
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
     */
    public function setMasterTrackingNumber(\CommerceFedEx\FedExPHP\Structs\TrackingId $masterTrackingNumber = null)
    {
        $this->MasterTrackingNumber = $masterTrackingNumber;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
     */
    public function setPackageCount($packageCount = null)
    {
        // validation for constraint: int
        if (!is_null($packageCount) && !is_numeric($packageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageCount)), __LINE__);
        }
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimestamp value
     * @return string|null
     */
    public function getEstimatedDeliveryTimestamp()
    {
        return $this->EstimatedDeliveryTimestamp;
    }
    /**
     * Set EstimatedDeliveryTimestamp value
     * @param string $estimatedDeliveryTimestamp
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
     */
    public function setEstimatedDeliveryTimestamp($estimatedDeliveryTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryTimestamp) && !is_string($estimatedDeliveryTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedDeliveryTimestamp)), __LINE__);
        }
        $this->EstimatedDeliveryTimestamp = $estimatedDeliveryTimestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ProcessDeliveryReply
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
