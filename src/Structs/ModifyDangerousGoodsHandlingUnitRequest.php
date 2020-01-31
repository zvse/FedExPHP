<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyDangerousGoodsHandlingUnitRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ModifyDangerousGoodsHandlingUnitRequest
 * @subpackage Structs
 */
class ModifyDangerousGoodsHandlingUnitRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
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
     * The UploadId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UploadId;
    /**
     * The HandlingUnitGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup
     */
    public $HandlingUnitGroup;
    /**
     * Constructor method for ModifyDangerousGoodsHandlingUnitRequest
     * @uses ModifyDangerousGoodsHandlingUnitRequest::setWebAuthenticationDetail()
     * @uses ModifyDangerousGoodsHandlingUnitRequest::setClientDetail()
     * @uses ModifyDangerousGoodsHandlingUnitRequest::setVersion()
     * @uses ModifyDangerousGoodsHandlingUnitRequest::setTransactionDetail()
     * @uses ModifyDangerousGoodsHandlingUnitRequest::setUploadId()
     * @uses ModifyDangerousGoodsHandlingUnitRequest::setHandlingUnitGroup()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $uploadId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $uploadId = null, \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setUploadId($uploadId)
            ->setHandlingUnitGroup($handlingUnitGroup);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest
     */
    public function setWebAuthenticationDetail(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest
     */
    public function setClientDetail(\NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest
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
     * Get HandlingUnitGroup value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup|null
     */
    public function getHandlingUnitGroup()
    {
        return $this->HandlingUnitGroup;
    }
    /**
     * Set HandlingUnitGroup value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest
     */
    public function setHandlingUnitGroup(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup = null)
    {
        $this->HandlingUnitGroup = $handlingUnitGroup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyDangerousGoodsHandlingUnitRequest
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
