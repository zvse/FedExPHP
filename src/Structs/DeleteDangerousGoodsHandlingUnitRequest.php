<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDangerousGoodsHandlingUnitRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:DeleteDangerousGoodsHandlingUnitRequest
 * @subpackage Structs
 */
class DeleteDangerousGoodsHandlingUnitRequest extends AbstractStructBase
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
     * The UploadId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UploadId;
    /**
     * The HandlingUnitGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HandlingUnitGroupId;
    /**
     * The TrackingNumbers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $TrackingNumbers;
    /**
     * Constructor method for DeleteDangerousGoodsHandlingUnitRequest
     * @uses DeleteDangerousGoodsHandlingUnitRequest::setWebAuthenticationDetail()
     * @uses DeleteDangerousGoodsHandlingUnitRequest::setClientDetail()
     * @uses DeleteDangerousGoodsHandlingUnitRequest::setVersion()
     * @uses DeleteDangerousGoodsHandlingUnitRequest::setTransactionDetail()
     * @uses DeleteDangerousGoodsHandlingUnitRequest::setUploadId()
     * @uses DeleteDangerousGoodsHandlingUnitRequest::setHandlingUnitGroupId()
     * @uses DeleteDangerousGoodsHandlingUnitRequest::setTrackingNumbers()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $uploadId
     * @param string $handlingUnitGroupId
     * @param string[] $trackingNumbers
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $uploadId = null, $handlingUnitGroupId = null, array $trackingNumbers = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setUploadId($uploadId)
            ->setHandlingUnitGroupId($handlingUnitGroupId)
            ->setTrackingNumbers($trackingNumbers);
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get UploadId value
     * @return string|null
     */
    public function getUploadId()
    {
        return $this->UploadId;
    }
    /**
     * Set UploadId value
     * @param string $uploadId
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
     */
    public function setUploadId($uploadId = null)
    {
        // validation for constraint: string
        if (!is_null($uploadId) && !is_string($uploadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uploadId)), __LINE__);
        }
        $this->UploadId = $uploadId;
        return $this;
    }
    /**
     * Get HandlingUnitGroupId value
     * @return string|null
     */
    public function getHandlingUnitGroupId()
    {
        return $this->HandlingUnitGroupId;
    }
    /**
     * Set HandlingUnitGroupId value
     * @param string $handlingUnitGroupId
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
     */
    public function setHandlingUnitGroupId($handlingUnitGroupId = null)
    {
        // validation for constraint: string
        if (!is_null($handlingUnitGroupId) && !is_string($handlingUnitGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($handlingUnitGroupId)), __LINE__);
        }
        $this->HandlingUnitGroupId = $handlingUnitGroupId;
        return $this;
    }
    /**
     * Get TrackingNumbers value
     * @return string[]|null
     */
    public function getTrackingNumbers()
    {
        return $this->TrackingNumbers;
    }
    /**
     * Set TrackingNumbers value
     * @throws \InvalidArgumentException
     * @param string[] $trackingNumbers
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
     */
    public function setTrackingNumbers(array $trackingNumbers = array())
    {
        foreach ($trackingNumbers as $deleteDangerousGoodsHandlingUnitRequestTrackingNumbersItem) {
            // validation for constraint: itemType
            if (!is_string($deleteDangerousGoodsHandlingUnitRequestTrackingNumbersItem)) {
                throw new \InvalidArgumentException(sprintf('The TrackingNumbers property can only contain items of string, "%s" given', is_object($deleteDangerousGoodsHandlingUnitRequestTrackingNumbersItem) ? get_class($deleteDangerousGoodsHandlingUnitRequestTrackingNumbersItem) : gettype($deleteDangerousGoodsHandlingUnitRequestTrackingNumbersItem)), __LINE__);
            }
        }
        $this->TrackingNumbers = $trackingNumbers;
        return $this;
    }
    /**
     * Add item to TrackingNumbers value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
     */
    public function addToTrackingNumbers($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TrackingNumbers property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingNumbers[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteDangerousGoodsHandlingUnitRequest
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
