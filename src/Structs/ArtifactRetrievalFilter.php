<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArtifactRetrievalFilter Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about the criteria used for artifact selection during retrieval.
 * @subpackage Structs
 */
class ArtifactRetrievalFilter extends AbstractStructBase
{
    /**
     * The AccessReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccessReference;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
    /**
     * Constructor method for ArtifactRetrievalFilter
     * @uses ArtifactRetrievalFilter::setAccessReference()
     * @uses ArtifactRetrievalFilter::setType()
     * @uses ArtifactRetrievalFilter::setReferenceId()
     * @param string $accessReference
     * @param string $type
     * @param string $referenceId
     */
    public function __construct($accessReference = null, $type = null, $referenceId = null)
    {
        $this
            ->setAccessReference($accessReference)
            ->setType($type)
            ->setReferenceId($referenceId);
    }
    /**
     * Get AccessReference value
     * @return string|null
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    /**
     * Set AccessReference value
     * @param string $accessReference
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ArtifactRetrievalFilter
     */
    public function setAccessReference($accessReference = null)
    {
        // validation for constraint: string
        if (!is_null($accessReference) && !is_string($accessReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessReference)), __LINE__);
        }
        $this->AccessReference = $accessReference;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ArtifactRetrievalFilter
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ArtifactType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ArtifactRetrievalFilter
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceId)), __LINE__);
        }
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ArtifactRetrievalFilter
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
