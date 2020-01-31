<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentPart Structs
 * Meta informations extracted from the WSDL
 * - documentation: Successive parts of the document (only one, for PDF documents).
 * @subpackage Structs
 */
class DocumentPart extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The one-origin position of this part within a document.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - documentation: Graphic or printer commands for this image within a document.
     * - minOccurs: 0
     * @var string
     */
    public $Content;
    /**
     * Constructor method for DocumentPart
     * @uses DocumentPart::setSequenceNumber()
     * @uses DocumentPart::setContent()
     * @param int $sequenceNumber
     * @param string $content
     */
    public function __construct($sequenceNumber = null, $content = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setContent($content);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart
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
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentPart
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
