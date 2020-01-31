<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetModifyOpenShipmentResultsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GetModifyOpenShipmentResultsReply
 * @subpackage Structs
 */
class GetModifyOpenShipmentResultsReply extends AbstractStructBase
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
     * @var \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * The ErrorLabels
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocument[]
     */
    public $ErrorLabels;
    /**
     * The AdvisoryDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentAdvisoryDetail
     */
    public $AdvisoryDetail;
    /**
     * Constructor method for GetModifyOpenShipmentResultsReply
     * @uses GetModifyOpenShipmentResultsReply::setHighestSeverity()
     * @uses GetModifyOpenShipmentResultsReply::setNotifications()
     * @uses GetModifyOpenShipmentResultsReply::setVersion()
     * @uses GetModifyOpenShipmentResultsReply::setTransactionDetail()
     * @uses GetModifyOpenShipmentResultsReply::setCompletedShipmentDetail()
     * @uses GetModifyOpenShipmentResultsReply::setErrorLabels()
     * @uses GetModifyOpenShipmentResultsReply::setAdvisoryDetail()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument[] $errorLabels
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail = null, array $errorLabels = array(), \CommerceFedEx\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setCompletedShipmentDetail($completedShipmentDetail)
            ->setErrorLabels($errorLabels)
            ->setAdvisoryDetail($advisoryDetail);
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
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $getModifyOpenShipmentResultsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$getModifyOpenShipmentResultsReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($getModifyOpenShipmentResultsReplyNotificationsItem) ? get_class($getModifyOpenShipmentResultsReplyNotificationsItem) : gettype($getModifyOpenShipmentResultsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get CompletedShipmentDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
     */
    public function setCompletedShipmentDetail(\CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Get ErrorLabels value
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocument[]|null
     */
    public function getErrorLabels()
    {
        return $this->ErrorLabels;
    }
    /**
     * Set ErrorLabels value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument[] $errorLabels
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
     */
    public function setErrorLabels(array $errorLabels = array())
    {
        foreach ($errorLabels as $getModifyOpenShipmentResultsReplyErrorLabelsItem) {
            // validation for constraint: itemType
            if (!$getModifyOpenShipmentResultsReplyErrorLabelsItem instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The ErrorLabels property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($getModifyOpenShipmentResultsReplyErrorLabelsItem) ? get_class($getModifyOpenShipmentResultsReplyErrorLabelsItem) : gettype($getModifyOpenShipmentResultsReplyErrorLabelsItem)), __LINE__);
            }
        }
        $this->ErrorLabels = $errorLabels;
        return $this;
    }
    /**
     * Add item to ErrorLabels value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument $item
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
     */
    public function addToErrorLabels(\CommerceFedEx\FedExPHP\Structs\ShippingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocument) {
            throw new \InvalidArgumentException(sprintf('The ErrorLabels property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ErrorLabels[] = $item;
        return $this;
    }
    /**
     * Get AdvisoryDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentAdvisoryDetail|null
     */
    public function getAdvisoryDetail()
    {
        return $this->AdvisoryDetail;
    }
    /**
     * Set AdvisoryDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
     */
    public function setAdvisoryDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail = null)
    {
        $this->AdvisoryDetail = $advisoryDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\GetModifyOpenShipmentResultsReply
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