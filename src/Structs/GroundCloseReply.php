<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroundCloseReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:GroundCloseReply
 * @subpackage Structs
 */
class GroundCloseReply extends AbstractStructBase
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
     * The Manifest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile
     */
    public $Manifest;
    /**
     * The MultiweightReport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MultiweightReport;
    /**
     * Constructor method for GroundCloseReply
     * @uses GroundCloseReply::setHighestSeverity()
     * @uses GroundCloseReply::setNotifications()
     * @uses GroundCloseReply::setVersion()
     * @uses GroundCloseReply::setTransactionDetail()
     * @uses GroundCloseReply::setCodReport()
     * @uses GroundCloseReply::setHazMatCertificate()
     * @uses GroundCloseReply::setManifest()
     * @uses GroundCloseReply::setMultiweightReport()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $codReport
     * @param string $hazMatCertificate
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile $manifest
     * @param string $multiweightReport
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $codReport = null, $hazMatCertificate = null, \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile $manifest = null, $multiweightReport = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setCodReport($codReport)
            ->setHazMatCertificate($hazMatCertificate)
            ->setManifest($manifest)
            ->setMultiweightReport($multiweightReport);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $groundCloseReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$groundCloseReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($groundCloseReplyNotificationsItem) ? get_class($groundCloseReplyNotificationsItem) : gettype($groundCloseReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
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
     * Get Manifest value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile|null
     */
    public function getManifest()
    {
        return $this->Manifest;
    }
    /**
     * Set Manifest value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ManifestFile $manifest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
     */
    public function setManifest(\NicholasCreativeMedia\FedExPHP\Structs\ManifestFile $manifest = null)
    {
        $this->Manifest = $manifest;
        return $this;
    }
    /**
     * Get MultiweightReport value
     * @return string|null
     */
    public function getMultiweightReport()
    {
        return $this->MultiweightReport;
    }
    /**
     * Set MultiweightReport value
     * @param string $multiweightReport
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
     */
    public function setMultiweightReport($multiweightReport = null)
    {
        // validation for constraint: string
        if (!is_null($multiweightReport) && !is_string($multiweightReport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($multiweightReport)), __LINE__);
        }
        $this->MultiweightReport = $multiweightReport;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GroundCloseReply
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
