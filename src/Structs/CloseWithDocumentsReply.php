<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CloseWithDocumentsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CloseWithDocumentsReply
 * @subpackage Structs
 */
class CloseWithDocumentsReply extends AbstractStructBase
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
     * The Documents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CloseDocument[]
     */
    public $Documents;
    /**
     * Constructor method for CloseWithDocumentsReply
     * @uses CloseWithDocumentsReply::setHighestSeverity()
     * @uses CloseWithDocumentsReply::setNotifications()
     * @uses CloseWithDocumentsReply::setVersion()
     * @uses CloseWithDocumentsReply::setTransactionDetail()
     * @uses CloseWithDocumentsReply::setDocuments()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocument[] $documents
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $documents = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setDocuments($documents);
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
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $closeWithDocumentsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$closeWithDocumentsReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($closeWithDocumentsReplyNotificationsItem) ? get_class($closeWithDocumentsReplyNotificationsItem) : gettype($closeWithDocumentsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get Documents value
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocument[]|null
     */
    public function getDocuments()
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocument[] $documents
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
     */
    public function setDocuments(array $documents = array())
    {
        foreach ($documents as $closeWithDocumentsReplyDocumentsItem) {
            // validation for constraint: itemType
            if (!$closeWithDocumentsReplyDocumentsItem instanceof \CommerceFedEx\FedExPHP\Structs\CloseDocument) {
                throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \CommerceFedEx\FedExPHP\Structs\CloseDocument, "%s" given', is_object($closeWithDocumentsReplyDocumentsItem) ? get_class($closeWithDocumentsReplyDocumentsItem) : gettype($closeWithDocumentsReplyDocumentsItem)), __LINE__);
            }
        }
        $this->Documents = $documents;
        return $this;
    }
    /**
     * Add item to Documents value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocument $item
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
     */
    public function addToDocuments(\CommerceFedEx\FedExPHP\Structs\CloseDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\CloseDocument) {
            throw new \InvalidArgumentException(sprintf('The Documents property can only contain items of \CommerceFedEx\FedExPHP\Structs\CloseDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Documents[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CloseWithDocumentsReply
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
