<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadImagesReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:UploadImagesReply
 * @subpackage Structs
 */
class UploadImagesReply extends AbstractStructBase
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
     * The ImageStatuses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail[]
     */
    public $ImageStatuses;
    /**
     * Constructor method for UploadImagesReply
     * @uses UploadImagesReply::setHighestSeverity()
     * @uses UploadImagesReply::setNotifications()
     * @uses UploadImagesReply::setVersion()
     * @uses UploadImagesReply::setTransactionDetail()
     * @uses UploadImagesReply::setImageStatuses()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail[] $imageStatuses
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $imageStatuses = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setImageStatuses($imageStatuses);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $uploadImagesReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$uploadImagesReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($uploadImagesReplyNotificationsItem) ? get_class($uploadImagesReplyNotificationsItem) : gettype($uploadImagesReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ImageStatuses value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail[]|null
     */
    public function getImageStatuses()
    {
        return $this->ImageStatuses;
    }
    /**
     * Set ImageStatuses value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail[] $imageStatuses
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
     */
    public function setImageStatuses(array $imageStatuses = array())
    {
        foreach ($imageStatuses as $uploadImagesReplyImageStatusesItem) {
            // validation for constraint: itemType
            if (!$uploadImagesReplyImageStatusesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail) {
                throw new \InvalidArgumentException(sprintf('The ImageStatuses property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail, "%s" given', is_object($uploadImagesReplyImageStatusesItem) ? get_class($uploadImagesReplyImageStatusesItem) : gettype($uploadImagesReplyImageStatusesItem)), __LINE__);
            }
        }
        $this->ImageStatuses = $imageStatuses;
        return $this;
    }
    /**
     * Add item to ImageStatuses value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
     */
    public function addToImageStatuses(\NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail) {
            throw new \InvalidArgumentException(sprintf('The ImageStatuses property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ImageUploadStatusDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ImageStatuses[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadImagesReply
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
