<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReprintGroundCloseDocumentsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ReprintGroundCloseDocumentsRequest
 * @subpackage Structs
 */
class ReprintGroundCloseDocumentsRequest extends AbstractStructBase
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
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
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
     * The ReprintOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReprintOption;
    /**
     * The CloseDate
     * Meta informations extracted from the WSDL
     * - documentation: Date on which shipments were closed
     * - minOccurs: 0
     * @var string
     */
    public $CloseDate;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The CloseDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of document(s) to be returned for this request.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CloseDocumentSpecification
     */
    public $CloseDocumentSpecification;
    /**
     * Constructor method for ReprintGroundCloseDocumentsRequest
     * @uses ReprintGroundCloseDocumentsRequest::setWebAuthenticationDetail()
     * @uses ReprintGroundCloseDocumentsRequest::setClientDetail()
     * @uses ReprintGroundCloseDocumentsRequest::setVersion()
     * @uses ReprintGroundCloseDocumentsRequest::setTransactionDetail()
     * @uses ReprintGroundCloseDocumentsRequest::setReprintOption()
     * @uses ReprintGroundCloseDocumentsRequest::setCloseDate()
     * @uses ReprintGroundCloseDocumentsRequest::setTrackingNumber()
     * @uses ReprintGroundCloseDocumentsRequest::setCloseDocumentSpecification()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $reprintOption
     * @param string $closeDate
     * @param string $trackingNumber
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $reprintOption = null, $closeDate = null, $trackingNumber = null, \CommerceFedEx\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setReprintOption($reprintOption)
            ->setCloseDate($closeDate)
            ->setTrackingNumber($trackingNumber)
            ->setCloseDocumentSpecification($closeDocumentSpecification);
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
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ReprintOption value
     * @return string|null
     */
    public function getReprintOption()
    {
        return $this->ReprintOption;
    }
    /**
     * Set ReprintOption value
     * @uses \CommerceFedEx\FedExPHP\Enums\ReprintGroundCloseDocumentsOptionType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ReprintGroundCloseDocumentsOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reprintOption
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
     */
    public function setReprintOption($reprintOption = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ReprintGroundCloseDocumentsOptionType::valueIsValid($reprintOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $reprintOption, implode(', ', \CommerceFedEx\FedExPHP\Enums\ReprintGroundCloseDocumentsOptionType::getValidValues())), __LINE__);
        }
        $this->ReprintOption = $reprintOption;
        return $this;
    }
    /**
     * Get CloseDate value
     * @return string|null
     */
    public function getCloseDate()
    {
        return $this->CloseDate;
    }
    /**
     * Set CloseDate value
     * @param string $closeDate
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDate($closeDate = null)
    {
        // validation for constraint: string
        if (!is_null($closeDate) && !is_string($closeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closeDate)), __LINE__);
        }
        $this->CloseDate = $closeDate;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get CloseDocumentSpecification value
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentSpecification|null
     */
    public function getCloseDocumentSpecification()
    {
        return $this->CloseDocumentSpecification;
    }
    /**
     * Set CloseDocumentSpecification value
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDocumentSpecification(\CommerceFedEx\FedExPHP\Structs\CloseDocumentSpecification $closeDocumentSpecification = null)
    {
        $this->CloseDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ReprintGroundCloseDocumentsRequest
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
