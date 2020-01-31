<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddPackagesToOpenShipmentReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:AddPackagesToOpenShipmentReply
 * @subpackage Structs
 */
class AddPackagesToOpenShipmentReply extends AbstractStructBase
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
     * The JobId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $JobId;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the service type values, like PRIORITY_OVERNIGHT and FEDEX_GROUND.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Provides Completed Shipment Details for PAY AS YOU GO scenarios of FXRS
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * The ErrorLabels
     * Meta informations extracted from the WSDL
     * - documentation: Empty unless error label behavior is PACKAGE_ERROR_LABELS and one or more errors occured during transaction processing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShippingDocument[]
     */
    public $ErrorLabels;
    /**
     * Constructor method for AddPackagesToOpenShipmentReply
     * @uses AddPackagesToOpenShipmentReply::setHighestSeverity()
     * @uses AddPackagesToOpenShipmentReply::setNotifications()
     * @uses AddPackagesToOpenShipmentReply::setVersion()
     * @uses AddPackagesToOpenShipmentReply::setTransactionDetail()
     * @uses AddPackagesToOpenShipmentReply::setJobId()
     * @uses AddPackagesToOpenShipmentReply::setServiceType()
     * @uses AddPackagesToOpenShipmentReply::setCompletedShipmentDetail()
     * @uses AddPackagesToOpenShipmentReply::setErrorLabels()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $jobId
     * @param string $serviceType
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument[] $errorLabels
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $jobId = null, $serviceType = null, \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail = null, array $errorLabels = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setJobId($jobId)
            ->setServiceType($serviceType)
            ->setCompletedShipmentDetail($completedShipmentDetail)
            ->setErrorLabels($errorLabels);
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $addPackagesToOpenShipmentReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$addPackagesToOpenShipmentReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($addPackagesToOpenShipmentReplyNotificationsItem) ? get_class($addPackagesToOpenShipmentReplyNotificationsItem) : gettype($addPackagesToOpenShipmentReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedShipmentDetail $completedShipmentDetail
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
     */
    public function setErrorLabels(array $errorLabels = array())
    {
        foreach ($errorLabels as $addPackagesToOpenShipmentReplyErrorLabelsItem) {
            // validation for constraint: itemType
            if (!$addPackagesToOpenShipmentReplyErrorLabelsItem instanceof \CommerceFedEx\FedExPHP\Structs\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The ErrorLabels property can only contain items of \CommerceFedEx\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($addPackagesToOpenShipmentReplyErrorLabelsItem) ? get_class($addPackagesToOpenShipmentReplyErrorLabelsItem) : gettype($addPackagesToOpenShipmentReplyErrorLabelsItem)), __LINE__);
            }
        }
        $this->ErrorLabels = $errorLabels;
        return $this;
    }
    /**
     * Add item to ErrorLabels value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ShippingDocument $item
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\AddPackagesToOpenShipmentReply
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
