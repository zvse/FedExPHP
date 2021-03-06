<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCreateOpenShipmentResultsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GetCreateOpenShipmentResultsReply
 * @subpackage Structs
 */
class GetCreateOpenShipmentResultsReply extends AbstractStructBase
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
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * The ErrorLabels
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]
     */
    public $ErrorLabels;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Index;
    /**
     * The AdvisoryDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail
     */
    public $AdvisoryDetail;
    /**
     * Constructor method for GetCreateOpenShipmentResultsReply
     * @uses GetCreateOpenShipmentResultsReply::setHighestSeverity()
     * @uses GetCreateOpenShipmentResultsReply::setNotifications()
     * @uses GetCreateOpenShipmentResultsReply::setVersion()
     * @uses GetCreateOpenShipmentResultsReply::setTransactionDetail()
     * @uses GetCreateOpenShipmentResultsReply::setServiceType()
     * @uses GetCreateOpenShipmentResultsReply::setCompletedShipmentDetail()
     * @uses GetCreateOpenShipmentResultsReply::setErrorLabels()
     * @uses GetCreateOpenShipmentResultsReply::setIndex()
     * @uses GetCreateOpenShipmentResultsReply::setAdvisoryDetail()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $serviceType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $errorLabels
     * @param string $index
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $serviceType = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail = null, array $errorLabels = array(), $index = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setServiceType($serviceType)
            ->setCompletedShipmentDetail($completedShipmentDetail)
            ->setErrorLabels($errorLabels)
            ->setIndex($index)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $getCreateOpenShipmentResultsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$getCreateOpenShipmentResultsReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($getCreateOpenShipmentResultsReplyNotificationsItem) ? get_class($getCreateOpenShipmentResultsReplyNotificationsItem) : gettype($getCreateOpenShipmentResultsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
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
     * Get CompletedShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
     */
    public function setCompletedShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Get ErrorLabels value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]|null
     */
    public function getErrorLabels()
    {
        return $this->ErrorLabels;
    }
    /**
     * Set ErrorLabels value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $errorLabels
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
     */
    public function setErrorLabels(array $errorLabels = array())
    {
        foreach ($errorLabels as $getCreateOpenShipmentResultsReplyErrorLabelsItem) {
            // validation for constraint: itemType
            if (!$getCreateOpenShipmentResultsReplyErrorLabelsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The ErrorLabels property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($getCreateOpenShipmentResultsReplyErrorLabelsItem) ? get_class($getCreateOpenShipmentResultsReplyErrorLabelsItem) : gettype($getCreateOpenShipmentResultsReplyErrorLabelsItem)), __LINE__);
            }
        }
        $this->ErrorLabels = $errorLabels;
        return $this;
    }
    /**
     * Add item to ErrorLabels value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
     */
    public function addToErrorLabels(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
            throw new \InvalidArgumentException(sprintf('The ErrorLabels property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ErrorLabels[] = $item;
        return $this;
    }
    /**
     * Get Index value
     * @return string|null
     */
    public function getIndex()
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param string $index
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        $this->Index = $index;
        return $this;
    }
    /**
     * Get AdvisoryDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail|null
     */
    public function getAdvisoryDetail()
    {
        return $this->AdvisoryDetail;
    }
    /**
     * Set AdvisoryDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
     */
    public function setAdvisoryDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentAdvisoryDetail $advisoryDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply
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
