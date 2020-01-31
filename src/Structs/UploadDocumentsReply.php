<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDocumentsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:UploadDocumentsReply
 * @subpackage Structs
 */
class UploadDocumentsReply extends AbstractStructBase
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
     * The DocumentStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail[]
     */
    public $DocumentStatuses;
    /**
     * The DocumentRequirements
     * Meta informations extracted from the WSDL
     * - documentation: For an upload making use of the POST_SHIPMENT_UPLOAD option, this will indicate information about the required documents necessary for package movement.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DocumentRequirementsDetail
     */
    public $DocumentRequirements;
    /**
     * Constructor method for UploadDocumentsReply
     * @uses UploadDocumentsReply::setHighestSeverity()
     * @uses UploadDocumentsReply::setNotifications()
     * @uses UploadDocumentsReply::setVersion()
     * @uses UploadDocumentsReply::setTransactionDetail()
     * @uses UploadDocumentsReply::setDocumentStatuses()
     * @uses UploadDocumentsReply::setDocumentRequirements()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail[] $documentStatuses
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocumentRequirementsDetail $documentRequirements
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $documentStatuses = array(), \NicholasCreativeMedia\FedExPHP\Structs\DocumentRequirementsDetail $documentRequirements = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setDocumentStatuses($documentStatuses)
            ->setDocumentRequirements($documentRequirements);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $uploadDocumentsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$uploadDocumentsReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($uploadDocumentsReplyNotificationsItem) ? get_class($uploadDocumentsReplyNotificationsItem) : gettype($uploadDocumentsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get DocumentStatuses value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail[]|null
     */
    public function getDocumentStatuses()
    {
        return $this->DocumentStatuses;
    }
    /**
     * Set DocumentStatuses value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail[] $documentStatuses
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
     */
    public function setDocumentStatuses(array $documentStatuses = array())
    {
        foreach ($documentStatuses as $uploadDocumentsReplyDocumentStatusesItem) {
            // validation for constraint: itemType
            if (!$uploadDocumentsReplyDocumentStatusesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail) {
                throw new \InvalidArgumentException(sprintf('The DocumentStatuses property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail, "%s" given', is_object($uploadDocumentsReplyDocumentStatusesItem) ? get_class($uploadDocumentsReplyDocumentStatusesItem) : gettype($uploadDocumentsReplyDocumentStatusesItem)), __LINE__);
            }
        }
        $this->DocumentStatuses = $documentStatuses;
        return $this;
    }
    /**
     * Add item to DocumentStatuses value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
     */
    public function addToDocumentStatuses(\NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail) {
            throw new \InvalidArgumentException(sprintf('The DocumentStatuses property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentStatusDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocumentStatuses[] = $item;
        return $this;
    }
    /**
     * Get DocumentRequirements value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentRequirementsDetail|null
     */
    public function getDocumentRequirements()
    {
        return $this->DocumentRequirements;
    }
    /**
     * Set DocumentRequirements value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocumentRequirementsDetail $documentRequirements
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
     */
    public function setDocumentRequirements(\NicholasCreativeMedia\FedExPHP\Structs\DocumentRequirementsDetail $documentRequirements = null)
    {
        $this->DocumentRequirements = $documentRequirements;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentsReply
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
