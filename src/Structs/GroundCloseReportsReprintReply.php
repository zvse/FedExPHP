<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroundCloseReportsReprintReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GroundCloseReportsReprintReply
 * @subpackage Structs
 */
class GroundCloseReportsReprintReply extends AbstractStructBase
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
     * The CodReport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CodReport;
    /**
     * The HazMatCertificate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HazMatCertificate;
    /**
     * The Manifests
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ManifestFile[]
     */
    public $Manifests;
    /**
     * Constructor method for GroundCloseReportsReprintReply
     * @uses GroundCloseReportsReprintReply::setHighestSeverity()
     * @uses GroundCloseReportsReprintReply::setNotifications()
     * @uses GroundCloseReportsReprintReply::setVersion()
     * @uses GroundCloseReportsReprintReply::setTransactionDetail()
     * @uses GroundCloseReportsReprintReply::setCodReport()
     * @uses GroundCloseReportsReprintReply::setHazMatCertificate()
     * @uses GroundCloseReportsReprintReply::setManifests()
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $codReport
     * @param string $hazMatCertificate
     * @param \CommerceFedEx\FedExPHP\Structs\ManifestFile[] $manifests
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $codReport = null, $hazMatCertificate = null, array $manifests = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setCodReport($codReport)
            ->setHazMatCertificate($hazMatCertificate)
            ->setManifests($manifests);
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $groundCloseReportsReprintReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$groundCloseReportsReprintReplyNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($groundCloseReportsReprintReplyNotificationsItem) ? get_class($groundCloseReportsReprintReplyNotificationsItem) : gettype($groundCloseReportsReprintReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
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
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get CodReport value
     * @return string|null
     */
    public function getCodReport()
    {
        return $this->CodReport;
    }
    /**
     * Set CodReport value
     * @param string $codReport
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
     */
    public function setCodReport($codReport = null)
    {
        // validation for constraint: string
        if (!is_null($codReport) && !is_string($codReport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codReport)), __LINE__);
        }
        $this->CodReport = $codReport;
        return $this;
    }
    /**
     * Get HazMatCertificate value
     * @return string|null
     */
    public function getHazMatCertificate()
    {
        return $this->HazMatCertificate;
    }
    /**
     * Set HazMatCertificate value
     * @param string $hazMatCertificate
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
     */
    public function setHazMatCertificate($hazMatCertificate = null)
    {
        // validation for constraint: string
        if (!is_null($hazMatCertificate) && !is_string($hazMatCertificate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hazMatCertificate)), __LINE__);
        }
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    /**
     * Get Manifests value
     * @return \CommerceFedEx\FedExPHP\Structs\ManifestFile[]|null
     */
    public function getManifests()
    {
        return $this->Manifests;
    }
    /**
     * Set Manifests value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ManifestFile[] $manifests
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
     */
    public function setManifests(array $manifests = array())
    {
        foreach ($manifests as $groundCloseReportsReprintReplyManifestsItem) {
            // validation for constraint: itemType
            if (!$groundCloseReportsReprintReplyManifestsItem instanceof \CommerceFedEx\FedExPHP\Structs\ManifestFile) {
                throw new \InvalidArgumentException(sprintf('The Manifests property can only contain items of \CommerceFedEx\FedExPHP\Structs\ManifestFile, "%s" given', is_object($groundCloseReportsReprintReplyManifestsItem) ? get_class($groundCloseReportsReprintReplyManifestsItem) : gettype($groundCloseReportsReprintReplyManifestsItem)), __LINE__);
            }
        }
        $this->Manifests = $manifests;
        return $this;
    }
    /**
     * Add item to Manifests value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ManifestFile $item
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
     */
    public function addToManifests(\CommerceFedEx\FedExPHP\Structs\ManifestFile $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ManifestFile) {
            throw new \InvalidArgumentException(sprintf('The Manifests property can only contain items of \CommerceFedEx\FedExPHP\Structs\ManifestFile, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Manifests[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\GroundCloseReportsReprintReply
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
