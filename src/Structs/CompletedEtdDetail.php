<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedEtdDetail Structs
 * @subpackage Structs
 */
class CompletedEtdDetail extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - documentation: The identifier for all clearance documents associated with this shipment.
     * - minOccurs: 0
     * @var string
     */
    public $FolderId;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The UploadDocumentReferenceDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[]
     */
    public $UploadDocumentReferenceDetails;
    /**
     * Constructor method for CompletedEtdDetail
     * @uses CompletedEtdDetail::setFolderId()
     * @uses CompletedEtdDetail::setType()
     * @uses CompletedEtdDetail::setUploadDocumentReferenceDetails()
     * @param string $folderId
     * @param string $type
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     */
    public function __construct($folderId = null, $type = null, array $uploadDocumentReferenceDetails = array())
    {
        $this
            ->setFolderId($folderId)
            ->setType($type)
            ->setUploadDocumentReferenceDetails($uploadDocumentReferenceDetails);
    }
    /**
     * Get FolderId value
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param string $folderId
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedEtdDetail
     */
    public function setFolderId($folderId = null)
    {
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folderId)), __LINE__);
        }
        $this->FolderId = $folderId;
        return $this;
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
     * @uses \CommerceFedEx\FedExPHP\Enums\CompletedEtdType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CompletedEtdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedEtdDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CompletedEtdType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\CompletedEtdType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get UploadDocumentReferenceDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[]|null
     */
    public function getUploadDocumentReferenceDetails()
    {
        return $this->UploadDocumentReferenceDetails;
    }
    /**
     * Set UploadDocumentReferenceDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails = array())
    {
        foreach ($uploadDocumentReferenceDetails as $completedEtdDetailUploadDocumentReferenceDetailsItem) {
            // validation for constraint: itemType
            if (!$completedEtdDetailUploadDocumentReferenceDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The UploadDocumentReferenceDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail, "%s" given', is_object($completedEtdDetailUploadDocumentReferenceDetailsItem) ? get_class($completedEtdDetailUploadDocumentReferenceDetailsItem) : gettype($completedEtdDetailUploadDocumentReferenceDetailsItem)), __LINE__);
            }
        }
        $this->UploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
    /**
     * Add item to UploadDocumentReferenceDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedEtdDetail
     */
    public function addToUploadDocumentReferenceDetails(\CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The UploadDocumentReferenceDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UploadDocumentReferenceDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedEtdDetail
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
