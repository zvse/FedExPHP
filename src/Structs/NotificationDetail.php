<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationDetail Structs
 * @subpackage Structs
 */
class NotificationDetail extends AbstractStructBase
{
    /**
     * The NotificationType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of notification that will be sent.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationType;
    /**
     * The EmailDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the email notification details.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail
     */
    public $EmailDetail;
    /**
     * The FaxDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the fax notification details.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail
     */
    public $FaxDetail;
    /**
     * The SmsDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the SMS notification details.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail
     */
    public $SmsDetail;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the localization for this notification.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for NotificationDetail
     * @uses NotificationDetail::setNotificationType()
     * @uses NotificationDetail::setEmailDetail()
     * @uses NotificationDetail::setFaxDetail()
     * @uses NotificationDetail::setSmsDetail()
     * @uses NotificationDetail::setLocalization()
     * @param string $notificationType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $emailDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail $faxDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail $smsDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     */
    public function __construct($notificationType = null, \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $emailDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail $faxDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail $smsDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
    {
        $this
            ->setNotificationType($notificationType)
            ->setEmailDetail($emailDetail)
            ->setFaxDetail($faxDetail)
            ->setSmsDetail($smsDetail)
            ->setLocalization($localization);
    }
    /**
     * Get NotificationType value
     * @return string|null
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }
    /**
     * Set NotificationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notificationType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationDetail
     */
    public function setNotificationType($notificationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationType::valueIsValid($notificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationType::getValidValues())), __LINE__);
        }
        $this->NotificationType = $notificationType;
        return $this;
    }
    /**
     * Get EmailDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail|null
     */
    public function getEmailDetail()
    {
        return $this->EmailDetail;
    }
    /**
     * Set EmailDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $emailDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationDetail
     */
    public function setEmailDetail(\NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $emailDetail = null)
    {
        $this->EmailDetail = $emailDetail;
        return $this;
    }
    /**
     * Get FaxDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail|null
     */
    public function getFaxDetail()
    {
        return $this->FaxDetail;
    }
    /**
     * Set FaxDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail $faxDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationDetail
     */
    public function setFaxDetail(\NicholasCreativeMedia\FedExPHP\Structs\FaxDetail $faxDetail = null)
    {
        $this->FaxDetail = $faxDetail;
        return $this;
    }
    /**
     * Get SmsDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail|null
     */
    public function getSmsDetail()
    {
        return $this->SmsDetail;
    }
    /**
     * Set SmsDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail $smsDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationDetail
     */
    public function setSmsDetail(\NicholasCreativeMedia\FedExPHP\Structs\SmsDetail $smsDetail = null)
    {
        $this->SmsDetail = $smsDetail;
        return $this;
    }
    /**
     * Get Localization value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationDetail
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationDetail
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
