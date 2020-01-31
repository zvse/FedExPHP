<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageUploadStatusDetail Structs
 * @subpackage Structs
 */
class ImageUploadStatusDetail extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The StatusInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusInfo;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * Constructor method for ImageUploadStatusDetail
     * @uses ImageUploadStatusDetail::setId()
     * @uses ImageUploadStatusDetail::setStatus()
     * @uses ImageUploadStatusDetail::setStatusInfo()
     * @uses ImageUploadStatusDetail::setMessage()
     * @param string $id
     * @param string $status
     * @param string $statusInfo
     * @param string $message
     */
    public function __construct($id = null, $status = null, $statusInfo = null, $message = null)
    {
        $this
            ->setId($id)
            ->setStatus($status)
            ->setStatusInfo($statusInfo)
            ->setMessage($message);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @uses \CommerceFedEx\FedExPHP\Enums\ImageId::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ImageId::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $id
     * @return \CommerceFedEx\FedExPHP\Structs\ImageUploadStatusDetail
     */
    public function setId($id = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ImageId::valueIsValid($id)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $id, implode(', ', \CommerceFedEx\FedExPHP\Enums\ImageId::getValidValues())), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadImageStatusType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadImageStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \CommerceFedEx\FedExPHP\Structs\ImageUploadStatusDetail
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadImageStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadImageStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get StatusInfo value
     * @return string|null
     */
    public function getStatusInfo()
    {
        return $this->StatusInfo;
    }
    /**
     * Set StatusInfo value
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadImageStatusInfoType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\UploadImageStatusInfoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $statusInfo
     * @return \CommerceFedEx\FedExPHP\Structs\ImageUploadStatusDetail
     */
    public function setStatusInfo($statusInfo = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\UploadImageStatusInfoType::valueIsValid($statusInfo)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $statusInfo, implode(', ', \CommerceFedEx\FedExPHP\Enums\UploadImageStatusInfoType::getValidValues())), __LINE__);
        }
        $this->StatusInfo = $statusInfo;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \CommerceFedEx\FedExPHP\Structs\ImageUploadStatusDetail
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ImageUploadStatusDetail
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
