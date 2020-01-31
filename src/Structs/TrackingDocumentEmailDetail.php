<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingDocumentEmailDetail Structs
 * @subpackage Structs
 */
class TrackingDocumentEmailDetail extends AbstractStructBase
{
    /**
     * The Recipients
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the recipients of the email.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail[]
     */
    public $Recipients;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the person initiating the email.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail
     */
    public $Sender;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: This is the localization of the email content.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Localization
     */
    public $Localization;
    /**
     * The PersonalMessage
     * Meta informations extracted from the WSDL
     * - documentation: A message included in the body of the email.
     * - minOccurs: 0
     * @var string
     */
    public $PersonalMessage;
    /**
     * Constructor method for TrackingDocumentEmailDetail
     * @uses TrackingDocumentEmailDetail::setRecipients()
     * @uses TrackingDocumentEmailDetail::setSender()
     * @uses TrackingDocumentEmailDetail::setLocalization()
     * @uses TrackingDocumentEmailDetail::setPersonalMessage()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail[] $recipients
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $sender
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     * @param string $personalMessage
     */
    public function __construct(array $recipients = array(), \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $sender = null, \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null, $personalMessage = null)
    {
        $this
            ->setRecipients($recipients)
            ->setSender($sender)
            ->setLocalization($localization)
            ->setPersonalMessage($personalMessage);
    }
    /**
     * Get Recipients value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail[]|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail[] $recipients
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail
     */
    public function setRecipients(array $recipients = array())
    {
        foreach ($recipients as $trackingDocumentEmailDetailRecipientsItem) {
            // validation for constraint: itemType
            if (!$trackingDocumentEmailDetailRecipientsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail) {
                throw new \InvalidArgumentException(sprintf('The Recipients property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail, "%s" given', is_object($trackingDocumentEmailDetailRecipientsItem) ? get_class($trackingDocumentEmailDetailRecipientsItem) : gettype($trackingDocumentEmailDetailRecipientsItem)), __LINE__);
            }
        }
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Add item to Recipients value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail
     */
    public function addToRecipients(\NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail) {
            throw new \InvalidArgumentException(sprintf('The Recipients property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Recipients[] = $item;
        return $this;
    }
    /**
     * Get Sender value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $sender
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail
     */
    public function setSender(\NicholasCreativeMedia\FedExPHP\Structs\EMailDetail $sender = null)
    {
        $this->Sender = $sender;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Get PersonalMessage value
     * @return string|null
     */
    public function getPersonalMessage()
    {
        return $this->PersonalMessage;
    }
    /**
     * Set PersonalMessage value
     * @param string $personalMessage
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail
     */
    public function setPersonalMessage($personalMessage = null)
    {
        // validation for constraint: string
        if (!is_null($personalMessage) && !is_string($personalMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalMessage)), __LINE__);
        }
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail
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
