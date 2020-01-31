<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCard Structs
 * @subpackage Structs
 */
class CreditCard extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The CreditCardType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardType;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Must be in one of the following formats: YYMM, YYYYMM, or YYYYMMDD.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * The LastAuthenticationByFedexDate
     * Meta informations extracted from the WSDL
     * - documentation: Date when the credit card was last used in a FedEx online transaction.
     * - minOccurs: 0
     * @var string
     */
    public $LastAuthenticationByFedexDate;
    /**
     * The VerificationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VerificationCode;
    /**
     * The CreditCardHolder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress
     */
    public $CreditCardHolder;
    /**
     * The TrackData
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the track data from the credit card stripe.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $TrackData;
    /**
     * Constructor method for CreditCard
     * @uses CreditCard::setNumber()
     * @uses CreditCard::setCreditCardType()
     * @uses CreditCard::setExpirationDate()
     * @uses CreditCard::setLastAuthenticationByFedexDate()
     * @uses CreditCard::setVerificationCode()
     * @uses CreditCard::setCreditCardHolder()
     * @uses CreditCard::setTrackData()
     * @param string $number
     * @param string $creditCardType
     * @param string $expirationDate
     * @param string $lastAuthenticationByFedexDate
     * @param string $verificationCode
     * @param \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress $creditCardHolder
     * @param string[] $trackData
     */
    public function __construct($number = null, $creditCardType = null, $expirationDate = null, $lastAuthenticationByFedexDate = null, $verificationCode = null, \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress $creditCardHolder = null, array $trackData = array())
    {
        $this
            ->setNumber($number)
            ->setCreditCardType($creditCardType)
            ->setExpirationDate($expirationDate)
            ->setLastAuthenticationByFedexDate($lastAuthenticationByFedexDate)
            ->setVerificationCode($verificationCode)
            ->setCreditCardHolder($creditCardHolder)
            ->setTrackData($trackData);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get CreditCardType value
     * @return string|null
     */
    public function getCreditCardType()
    {
        return $this->CreditCardType;
    }
    /**
     * Set CreditCardType value
     * @uses \CommerceFedEx\FedExPHP\Enums\CreditCardType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CreditCardType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $creditCardType
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function setCreditCardType($creditCardType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CreditCardType::valueIsValid($creditCardType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $creditCardType, implode(', ', \CommerceFedEx\FedExPHP\Enums\CreditCardType::getValidValues())), __LINE__);
        }
        $this->CreditCardType = $creditCardType;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get LastAuthenticationByFedexDate value
     * @return string|null
     */
    public function getLastAuthenticationByFedexDate()
    {
        return $this->LastAuthenticationByFedexDate;
    }
    /**
     * Set LastAuthenticationByFedexDate value
     * @param string $lastAuthenticationByFedexDate
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function setLastAuthenticationByFedexDate($lastAuthenticationByFedexDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastAuthenticationByFedexDate) && !is_string($lastAuthenticationByFedexDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastAuthenticationByFedexDate)), __LINE__);
        }
        $this->LastAuthenticationByFedexDate = $lastAuthenticationByFedexDate;
        return $this;
    }
    /**
     * Get VerificationCode value
     * @return string|null
     */
    public function getVerificationCode()
    {
        return $this->VerificationCode;
    }
    /**
     * Set VerificationCode value
     * @param string $verificationCode
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function setVerificationCode($verificationCode = null)
    {
        // validation for constraint: string
        if (!is_null($verificationCode) && !is_string($verificationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($verificationCode)), __LINE__);
        }
        $this->VerificationCode = $verificationCode;
        return $this;
    }
    /**
     * Get CreditCardHolder value
     * @return \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress|null
     */
    public function getCreditCardHolder()
    {
        return $this->CreditCardHolder;
    }
    /**
     * Set CreditCardHolder value
     * @param \CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress $creditCardHolder
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function setCreditCardHolder(\CommerceFedEx\FedExPHP\Structs\ParsedContactAndAddress $creditCardHolder = null)
    {
        $this->CreditCardHolder = $creditCardHolder;
        return $this;
    }
    /**
     * Get TrackData value
     * @return string[]|null
     */
    public function getTrackData()
    {
        return $this->TrackData;
    }
    /**
     * Set TrackData value
     * @throws \InvalidArgumentException
     * @param string[] $trackData
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function setTrackData(array $trackData = array())
    {
        foreach ($trackData as $creditCardTrackDataItem) {
            // validation for constraint: itemType
            if (!is_string($creditCardTrackDataItem)) {
                throw new \InvalidArgumentException(sprintf('The TrackData property can only contain items of string, "%s" given', is_object($creditCardTrackDataItem) ? get_class($creditCardTrackDataItem) : gettype($creditCardTrackDataItem)), __LINE__);
            }
        }
        $this->TrackData = $trackData;
        return $this;
    }
    /**
     * Add item to TrackData value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
     */
    public function addToTrackData($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TrackData property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CreditCard
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
