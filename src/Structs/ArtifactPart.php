<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArtifactPart Structs
 * @subpackage Structs
 */
class ArtifactPart extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the sequence of this part of the artifact.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The Contents
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the contents of this retrieved artifact part.
     * - minOccurs: 0
     * @var string
     */
    public $Contents;
    /**
     * Constructor method for ArtifactPart
     * @uses ArtifactPart::setSequenceNumber()
     * @uses ArtifactPart::setContents()
     * @param int $sequenceNumber
     * @param string $contents
     */
    public function __construct($sequenceNumber = null, $contents = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setContents($contents);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \CommerceFedEx\FedExPHP\Structs\ArtifactPart
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get Contents value
     * @return string|null
     */
    public function getContents()
    {
        return $this->Contents;
    }
    /**
     * Set Contents value
     * @param string $contents
     * @return \CommerceFedEx\FedExPHP\Structs\ArtifactPart
     */
    public function setContents($contents = null)
    {
        // validation for constraint: string
        if (!is_null($contents) && !is_string($contents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contents)), __LINE__);
        }
        $this->Contents = $contents;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\ArtifactPart
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
