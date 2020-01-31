<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentStorageDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to store shipping documents.
 * @subpackage Structs
 */
class ShippingDocumentStorageDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the mechanism by which a shipping document will be stored for later retrieval.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The FilePath
     * Meta informations extracted from the WSDL
     * - documentation: Provides the path to be used for STORED or DEFERRED documents.
     * - minOccurs: 0
     * @var string
     */
    public $FilePath;
    /**
     * The FileNaming
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
     * - minOccurs: 0
     * @var string
     */
    public $FileNaming;
    /**
     * The FileSuffix
     * Meta informations extracted from the WSDL
     * - documentation: Suffix to be placed at the end of the file name; required on some platforms to determine file type.
     * - minOccurs: 0
     * @var string
     */
    public $FileSuffix;
    /**
     * Constructor method for ShippingDocumentStorageDetail
     * @uses ShippingDocumentStorageDetail::setType()
     * @uses ShippingDocumentStorageDetail::setFilePath()
     * @uses ShippingDocumentStorageDetail::setFileNaming()
     * @uses ShippingDocumentStorageDetail::setFileSuffix()
     * @param string $type
     * @param string $filePath
     * @param string $fileNaming
     * @param string $fileSuffix
     */
    public function __construct($type = null, $filePath = null, $fileNaming = null, $fileSuffix = null)
    {
        $this
            ->setType($type)
            ->setFilePath($filePath)
            ->setFileNaming($fileNaming)
            ->setFileSuffix($fileSuffix);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentStorageDetailType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentStorageDetailType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentStorageDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShippingDocumentStorageDetailType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShippingDocumentStorageDetailType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get FilePath value
     * @return string|null
     */
    public function getFilePath()
    {
        return $this->FilePath;
    }
    /**
     * Set FilePath value
     * @param string $filePath
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentStorageDetail
     */
    public function setFilePath($filePath = null)
    {
        // validation for constraint: string
        if (!is_null($filePath) && !is_string($filePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filePath)), __LINE__);
        }
        $this->FilePath = $filePath;
        return $this;
    }
    /**
     * Get FileNaming value
     * @return string|null
     */
    public function getFileNaming()
    {
        return $this->FileNaming;
    }
    /**
     * Set FileNaming value
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentNamingType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ShippingDocumentNamingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fileNaming
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentStorageDetail
     */
    public function setFileNaming($fileNaming = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ShippingDocumentNamingType::valueIsValid($fileNaming)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fileNaming, implode(', ', \CommerceFedEx\FedExPHP\Enums\ShippingDocumentNamingType::getValidValues())), __LINE__);
        }
        $this->FileNaming = $fileNaming;
        return $this;
    }
    /**
     * Get FileSuffix value
     * @return string|null
     */
    public function getFileSuffix()
    {
        return $this->FileSuffix;
    }
    /**
     * Set FileSuffix value
     * @param string $fileSuffix
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentStorageDetail
     */
    public function setFileSuffix($fileSuffix = null)
    {
        // validation for constraint: string
        if (!is_null($fileSuffix) && !is_string($fileSuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileSuffix)), __LINE__);
        }
        $this->FileSuffix = $fileSuffix;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ShippingDocumentStorageDetail
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
