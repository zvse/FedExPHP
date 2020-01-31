<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmConsolidationReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ConfirmConsolidationReply
 * @subpackage Structs
 */
class ConfirmConsolidationReply extends AbstractStructBase
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
     * The AsynchronousProcessingResults
     * Meta informations extracted from the WSDL
     * - documentation: This indicates whether the transaction was processed synchronously or asynchronously.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingResultsDetail
     */
    public $AsynchronousProcessingResults;
    /**
     * The CompletedConsolidationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail
     */
    public $CompletedConsolidationDetail;
    /**
     * Constructor method for ConfirmConsolidationReply
     * @uses ConfirmConsolidationReply::setHighestSeverity()
     * @uses ConfirmConsolidationReply::setNotifications()
     * @uses ConfirmConsolidationReply::setVersion()
     * @uses ConfirmConsolidationReply::setTransactionDetail()
     * @uses ConfirmConsolidationReply::setJobId()
     * @uses ConfirmConsolidationReply::setAsynchronousProcessingResults()
     * @uses ConfirmConsolidationReply::setCompletedConsolidationDetail()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $jobId
     * @param \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingResultsDetail $asynchronousProcessingResults
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail $completedConsolidationDetail
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $jobId = null, \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingResultsDetail $asynchronousProcessingResults = null, \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail $completedConsolidationDetail = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setJobId($jobId)
            ->setAsynchronousProcessingResults($asynchronousProcessingResults)
            ->setCompletedConsolidationDetail($completedConsolidationDetail);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $confirmConsolidationReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$confirmConsolidationReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($confirmConsolidationReplyNotificationsItem) ? get_class($confirmConsolidationReplyNotificationsItem) : gettype($confirmConsolidationReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
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
     * Get AsynchronousProcessingResults value
     * @return \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingResultsDetail|null
     */
    public function getAsynchronousProcessingResults()
    {
        return $this->AsynchronousProcessingResults;
    }
    /**
     * Set AsynchronousProcessingResults value
     * @param \CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingResultsDetail $asynchronousProcessingResults
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
     */
    public function setAsynchronousProcessingResults(\CommerceFedEx\FedExPHP\Structs\AsynchronousProcessingResultsDetail $asynchronousProcessingResults = null)
    {
        $this->AsynchronousProcessingResults = $asynchronousProcessingResults;
        return $this;
    }
    /**
     * Get CompletedConsolidationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail|null
     */
    public function getCompletedConsolidationDetail()
    {
        return $this->CompletedConsolidationDetail;
    }
    /**
     * Set CompletedConsolidationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail $completedConsolidationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
     */
    public function setCompletedConsolidationDetail(\CommerceFedEx\FedExPHP\Structs\CompletedConsolidationDetail $completedConsolidationDetail = null)
    {
        $this->CompletedConsolidationDetail = $completedConsolidationDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ConfirmConsolidationReply
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
