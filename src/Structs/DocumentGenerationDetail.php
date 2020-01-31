<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentGenerationDetail Structs
 * @subpackage Structs
 */
class DocumentGenerationDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The MinimumCopiesRequired
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumCopiesRequired;
    /**
     * The Letterhead
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Letterhead;
    /**
     * The ElectronicSignature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ElectronicSignature;
    /**
     * Constructor method for DocumentGenerationDetail
     * @uses DocumentGenerationDetail::setType()
     * @uses DocumentGenerationDetail::setMinimumCopiesRequired()
     * @uses DocumentGenerationDetail::setLetterhead()
     * @uses DocumentGenerationDetail::setElectronicSignature()
     * @param string $type
     * @param int $minimumCopiesRequired
     * @param string $letterhead
     * @param string $electronicSignature
     */
    public function __construct($type = null, $minimumCopiesRequired = null, $letterhead = null, $electronicSignature = null)
    {
        $this
            ->setType($type)
            ->setMinimumCopiesRequired($minimumCopiesRequired)
            ->setLetterhead($letterhead)
            ->setElectronicSignature($electronicSignature);
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
     * @uses \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\EnterpriseDocumentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get MinimumCopiesRequired value
     * @return int|null
     */
    public function getMinimumCopiesRequired()
    {
        return $this->MinimumCopiesRequired;
    }
    /**
     * Set MinimumCopiesRequired value
     * @param int $minimumCopiesRequired
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail
     */
    public function setMinimumCopiesRequired($minimumCopiesRequired = null)
    {
        // validation for constraint: int
        if (!is_null($minimumCopiesRequired) && !is_numeric($minimumCopiesRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumCopiesRequired)), __LINE__);
        }
        $this->MinimumCopiesRequired = $minimumCopiesRequired;
        return $this;
    }
    /**
     * Get Letterhead value
     * @return string|null
     */
    public function getLetterhead()
    {
        return $this->Letterhead;
    }
    /**
     * Set Letterhead value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequirementType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequirementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $letterhead
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail
     */
    public function setLetterhead($letterhead = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RequirementType::valueIsValid($letterhead)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $letterhead, implode(', ', \CommerceFedEx\FedExPHP\Enums\RequirementType::getValidValues())), __LINE__);
        }
        $this->Letterhead = $letterhead;
        return $this;
    }
    /**
     * Get ElectronicSignature value
     * @return string|null
     */
    public function getElectronicSignature()
    {
        return $this->ElectronicSignature;
    }
    /**
     * Set ElectronicSignature value
     * @uses \CommerceFedEx\FedExPHP\Enums\RequirementType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\RequirementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $electronicSignature
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail
     */
    public function setElectronicSignature($electronicSignature = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\RequirementType::valueIsValid($electronicSignature)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $electronicSignature, implode(', ', \CommerceFedEx\FedExPHP\Enums\RequirementType::getValidValues())), __LINE__);
        }
        $this->ElectronicSignature = $electronicSignature;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DocumentGenerationDetail
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
