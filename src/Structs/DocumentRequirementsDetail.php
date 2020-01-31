<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentRequirementsDetail Structs
 * @subpackage Structs
 */
class DocumentRequirementsDetail extends AbstractStructBase
{
    /**
     * The RequiredDocuments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequiredDocuments;
    /**
     * The GenerationDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail[]
     */
    public $GenerationDetails;
    /**
     * The ProhibitedDocuments
     * Meta informations extracted from the WSDL
     * - documentation: Lists the documents that are not accepted by FedEx for this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ProhibitedDocuments;
    /**
     * Constructor method for DocumentRequirementsDetail
     * @uses DocumentRequirementsDetail::setRequiredDocuments()
     * @uses DocumentRequirementsDetail::setGenerationDetails()
     * @uses DocumentRequirementsDetail::setProhibitedDocuments()
     * @param string[] $requiredDocuments
     * @param \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail[] $generationDetails
     * @param string[] $prohibitedDocuments
     */
    public function __construct(array $requiredDocuments = array(), array $generationDetails = array(), array $prohibitedDocuments = array())
    {
        $this
            ->setRequiredDocuments($requiredDocuments)
            ->setGenerationDetails($generationDetails)
            ->setProhibitedDocuments($prohibitedDocuments);
    }
    /**
     * Get RequiredDocuments value
     * @return string[]|null
     */
    public function getRequiredDocuments()
    {
        return $this->RequiredDocuments;
    }
    /**
     * Set RequiredDocuments value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requiredDocuments
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentRequirementsDetail
     */
    public function setRequiredDocuments(array $requiredDocuments = array())
    {
        $invalidValues = array();
        foreach ($requiredDocuments as $documentRequirementsDetailRequiredDocumentsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::valueIsValid($documentRequirementsDetailRequiredDocumentsItem)) {
                $invalidValues[] = var_export($documentRequirementsDetailRequiredDocumentsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::getValidValues())), __LINE__);
        }
        $this->RequiredDocuments = $requiredDocuments;
        return $this;
    }
    /**
     * Add item to RequiredDocuments value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentRequirementsDetail
     */
    public function addToRequiredDocuments($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\RequiredDocumentType::getValidValues())), __LINE__);
        }
        $this->RequiredDocuments[] = $item;
        return $this;
    }
    /**
     * Get GenerationDetails value
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail[]|null
     */
    public function getGenerationDetails()
    {
        return $this->GenerationDetails;
    }
    /**
     * Set GenerationDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail[] $generationDetails
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentRequirementsDetail
     */
    public function setGenerationDetails(array $generationDetails = array())
    {
        foreach ($generationDetails as $documentRequirementsDetailGenerationDetailsItem) {
            // validation for constraint: itemType
            if (!$documentRequirementsDetailGenerationDetailsItem instanceof \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail) {
                throw new \InvalidArgumentException(sprintf('The GenerationDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail, "%s" given', is_object($documentRequirementsDetailGenerationDetailsItem) ? get_class($documentRequirementsDetailGenerationDetailsItem) : gettype($documentRequirementsDetailGenerationDetailsItem)), __LINE__);
            }
        }
        $this->GenerationDetails = $generationDetails;
        return $this;
    }
    /**
     * Add item to GenerationDetails value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentRequirementsDetail
     */
    public function addToGenerationDetails(\CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail) {
            throw new \InvalidArgumentException(sprintf('The GenerationDetails property can only contain items of \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GenerationDetails[] = $item;
        return $this;
    }
    /**
     * Get ProhibitedDocuments value
     * @return string[]|null
     */
    public function getProhibitedDocuments()
    {
        return $this->ProhibitedDocuments;
    }
    /**
     * Set ProhibitedDocuments value
     * @uses \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $prohibitedDocuments
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentRequirementsDetail
     */
    public function setProhibitedDocuments(array $prohibitedDocuments = array())
    {
        $invalidValues = array();
        foreach ($prohibitedDocuments as $documentRequirementsDetailProhibitedDocumentsItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::valueIsValid($documentRequirementsDetailProhibitedDocumentsItem)) {
                $invalidValues[] = var_export($documentRequirementsDetailProhibitedDocumentsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::getValidValues())), __LINE__);
        }
        $this->ProhibitedDocuments = $prohibitedDocuments;
        return $this;
    }
    /**
     * Add item to ProhibitedDocuments value
     * @uses \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentRequirementsDetail
     */
    public function addToProhibitedDocuments($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::getValidValues())), __LINE__);
        }
        $this->ProhibitedDocuments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentRequirementsDetail
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
