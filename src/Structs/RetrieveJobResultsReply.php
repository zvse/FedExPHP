<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrieveJobResultsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:RetrieveJobResultsReply
 * @subpackage Structs
 */
class RetrieveJobResultsReply extends AbstractStructBase
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
     * The Artifacts
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact[]
     */
    public $Artifacts;
    /**
     * Constructor method for RetrieveJobResultsReply
     * @uses RetrieveJobResultsReply::setHighestSeverity()
     * @uses RetrieveJobResultsReply::setNotifications()
     * @uses RetrieveJobResultsReply::setVersion()
     * @uses RetrieveJobResultsReply::setTransactionDetail()
     * @uses RetrieveJobResultsReply::setArtifacts()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact[] $artifacts
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $artifacts = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setArtifacts($artifacts);
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $retrieveJobResultsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$retrieveJobResultsReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($retrieveJobResultsReplyNotificationsItem) ? get_class($retrieveJobResultsReplyNotificationsItem) : gettype($retrieveJobResultsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get Artifacts value
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact[]|null
     */
    public function getArtifacts()
    {
        return $this->Artifacts;
    }
    /**
     * Set Artifacts value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact[] $artifacts
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
     */
    public function setArtifacts(array $artifacts = array())
    {
        foreach ($artifacts as $retrieveJobResultsReplyArtifactsItem) {
            // validation for constraint: itemType
            if (!$retrieveJobResultsReplyArtifactsItem instanceof \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact) {
                throw new \InvalidArgumentException(sprintf('The Artifacts property can only contain items of \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact, "%s" given', is_object($retrieveJobResultsReplyArtifactsItem) ? get_class($retrieveJobResultsReplyArtifactsItem) : gettype($retrieveJobResultsReplyArtifactsItem)), __LINE__);
            }
        }
        $this->Artifacts = $artifacts;
        return $this;
    }
    /**
     * Add item to Artifacts value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact $item
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
     */
    public function addToArtifacts(\CommerceFedEx\FedExPHP\Structs\RetrievedArtifact $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact) {
            throw new \InvalidArgumentException(sprintf('The Artifacts property can only contain items of \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Artifacts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
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