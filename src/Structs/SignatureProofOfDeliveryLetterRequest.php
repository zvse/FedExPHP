<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryLetterRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SignatureProofOfDeliveryLetterRequest
 * @subpackage Structs
 */
class SignatureProofOfDeliveryLetterRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data identifying the client submitting the transaction.
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the request being used.
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The QualifiedTrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\QualifiedTrackingNumber
     */
    public $QualifiedTrackingNumber;
    /**
     * The AdditionalComments
     * Meta informations extracted from the WSDL
     * - documentation: Additional customer-supplied text to be added to the body of the letter.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalComments;
    /**
     * The LetterFormat
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the set of SPOD image types.
     * - minOccurs: 0
     * @var string
     */
    public $LetterFormat;
    /**
     * The Consignee
     * Meta informations extracted from the WSDL
     * - documentation: If provided this information will be print on the letter.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ContactAndAddress
     */
    public $Consignee;
    /**
     * Constructor method for SignatureProofOfDeliveryLetterRequest
     * @uses SignatureProofOfDeliveryLetterRequest::setWebAuthenticationDetail()
     * @uses SignatureProofOfDeliveryLetterRequest::setClientDetail()
     * @uses SignatureProofOfDeliveryLetterRequest::setVersion()
     * @uses SignatureProofOfDeliveryLetterRequest::setTransactionDetail()
     * @uses SignatureProofOfDeliveryLetterRequest::setQualifiedTrackingNumber()
     * @uses SignatureProofOfDeliveryLetterRequest::setAdditionalComments()
     * @uses SignatureProofOfDeliveryLetterRequest::setLetterFormat()
     * @uses SignatureProofOfDeliveryLetterRequest::setConsignee()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \CommerceFedEx\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @param string $additionalComments
     * @param string $letterFormat
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $consignee
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \CommerceFedEx\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber = null, $additionalComments = null, $letterFormat = null, \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $consignee = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setQualifiedTrackingNumber($qualifiedTrackingNumber)
            ->setAdditionalComments($additionalComments)
            ->setLetterFormat($letterFormat)
            ->setConsignee($consignee);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
     */
    public function setWebAuthenticationDetail(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
     */
    public function setClientDetail(\CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
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
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get QualifiedTrackingNumber value
     * @return \CommerceFedEx\FedExPHP\Structs\QualifiedTrackingNumber|null
     */
    public function getQualifiedTrackingNumber()
    {
        return $this->QualifiedTrackingNumber;
    }
    /**
     * Set QualifiedTrackingNumber value
     * @param \CommerceFedEx\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
     */
    public function setQualifiedTrackingNumber(\CommerceFedEx\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber = null)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    /**
     * Get AdditionalComments value
     * @return string|null
     */
    public function getAdditionalComments()
    {
        return $this->AdditionalComments;
    }
    /**
     * Set AdditionalComments value
     * @param string $additionalComments
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
     */
    public function setAdditionalComments($additionalComments = null)
    {
        // validation for constraint: string
        if (!is_null($additionalComments) && !is_string($additionalComments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalComments)), __LINE__);
        }
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    /**
     * Get LetterFormat value
     * @return string|null
     */
    public function getLetterFormat()
    {
        return $this->LetterFormat;
    }
    /**
     * Set LetterFormat value
     * @uses \CommerceFedEx\FedExPHP\Enums\SignatureProofOfDeliveryImageType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\SignatureProofOfDeliveryImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $letterFormat
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
     */
    public function setLetterFormat($letterFormat = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\SignatureProofOfDeliveryImageType::valueIsValid($letterFormat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $letterFormat, implode(', ', \CommerceFedEx\FedExPHP\Enums\SignatureProofOfDeliveryImageType::getValidValues())), __LINE__);
        }
        $this->LetterFormat = $letterFormat;
        return $this;
    }
    /**
     * Get Consignee value
     * @return \CommerceFedEx\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getConsignee()
    {
        return $this->Consignee;
    }
    /**
     * Set Consignee value
     * @param \CommerceFedEx\FedExPHP\Structs\ContactAndAddress $consignee
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
     */
    public function setConsignee(\CommerceFedEx\FedExPHP\Structs\ContactAndAddress $consignee = null)
    {
        $this->Consignee = $consignee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest
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
