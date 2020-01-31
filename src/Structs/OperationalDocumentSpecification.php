<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationalDocumentSpecification Structs
 * @subpackage Structs
 */
class OperationalDocumentSpecification extends AbstractStructBase
{
    /**
     * The DocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the types of operational documents to be produced.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DocumentTypes;
    /**
     * The SignatureReleaseDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the data required to produce a singature release document.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureReleaseDocumentDetail
     */
    public $SignatureReleaseDocumentDetail;
    /**
     * Constructor method for OperationalDocumentSpecification
     * @uses OperationalDocumentSpecification::setDocumentTypes()
     * @uses OperationalDocumentSpecification::setSignatureReleaseDocumentDetail()
     * @param string[] $documentTypes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureReleaseDocumentDetail $signatureReleaseDocumentDetail
     */
    public function __construct(array $documentTypes = array(), \NicholasCreativeMedia\FedExPHP\Structs\SignatureReleaseDocumentDetail $signatureReleaseDocumentDetail = null)
    {
        $this
            ->setDocumentTypes($documentTypes)
            ->setSignatureReleaseDocumentDetail($signatureReleaseDocumentDetail);
    }
    /**
     * Get DocumentTypes value
     * @return string[]|null
     */
    public function getDocumentTypes()
    {
        return $this->DocumentTypes;
    }
    /**
     * Set DocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $documentTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\OperationalDocumentSpecification
     */
    public function setDocumentTypes(array $documentTypes = array())
    {
        $invalidValues = array();
        foreach ($documentTypes as $operationalDocumentSpecificationDocumentTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::valueIsValid($operationalDocumentSpecificationDocumentTypesItem)) {
                $invalidValues[] = var_export($operationalDocumentSpecificationDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentTypes = $documentTypes;
        return $this;
    }
    /**
     * Add item to DocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\OperationalDocumentSpecification
     */
    public function addToDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\OperationalDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get SignatureReleaseDocumentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureReleaseDocumentDetail|null
     */
    public function getSignatureReleaseDocumentDetail()
    {
        return $this->SignatureReleaseDocumentDetail;
    }
    /**
     * Set SignatureReleaseDocumentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureReleaseDocumentDetail $signatureReleaseDocumentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\OperationalDocumentSpecification
     */
    public function setSignatureReleaseDocumentDetail(\NicholasCreativeMedia\FedExPHP\Structs\SignatureReleaseDocumentDetail $signatureReleaseDocumentDetail = null)
    {
        $this->SignatureReleaseDocumentDetail = $signatureReleaseDocumentDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\OperationalDocumentSpecification
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
