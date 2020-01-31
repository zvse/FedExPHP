<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageOperationalDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Package-level data required for labeling and/or movement.
 * @subpackage Structs
 */
class PackageOperationalDetail extends AbstractStructBase
{
    /**
     * The AstraHandlingText
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text for pre-January 2011 clients.
     * - minOccurs: 0
     * @var string
     */
    public $AstraHandlingText;
    /**
     * The OperationalInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable content for use on a label.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\OperationalInstruction[]
     */
    public $OperationalInstructions;
    /**
     * The Barcodes
     * Meta informations extracted from the WSDL
     * - documentation: The operational barcodes pertaining to the current package.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\PackageBarcodes
     */
    public $Barcodes;
    /**
     * The GroundServiceCode
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx internal code that represents the service and/or features of service for the current package moving under a FedEx Ground service.
     * - minOccurs: 0
     * @var string
     */
    public $GroundServiceCode;
    /**
     * Constructor method for PackageOperationalDetail
     * @uses PackageOperationalDetail::setAstraHandlingText()
     * @uses PackageOperationalDetail::setOperationalInstructions()
     * @uses PackageOperationalDetail::setBarcodes()
     * @uses PackageOperationalDetail::setGroundServiceCode()
     * @param string $astraHandlingText
     * @param \CommerceFedEx\FedExPHP\Structs\OperationalInstruction[] $operationalInstructions
     * @param \CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes
     * @param string $groundServiceCode
     */
    public function __construct($astraHandlingText = null, array $operationalInstructions = array(), \CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes = null, $groundServiceCode = null)
    {
        $this
            ->setAstraHandlingText($astraHandlingText)
            ->setOperationalInstructions($operationalInstructions)
            ->setBarcodes($barcodes)
            ->setGroundServiceCode($groundServiceCode);
    }
    /**
     * Get AstraHandlingText value
     * @return string|null
     */
    public function getAstraHandlingText()
    {
        return $this->AstraHandlingText;
    }
    /**
     * Set AstraHandlingText value
     * @param string $astraHandlingText
     * @return \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail
     */
    public function setAstraHandlingText($astraHandlingText = null)
    {
        // validation for constraint: string
        if (!is_null($astraHandlingText) && !is_string($astraHandlingText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($astraHandlingText)), __LINE__);
        }
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    /**
     * Get OperationalInstructions value
     * @return \CommerceFedEx\FedExPHP\Structs\OperationalInstruction[]|null
     */
    public function getOperationalInstructions()
    {
        return $this->OperationalInstructions;
    }
    /**
     * Set OperationalInstructions value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\OperationalInstruction[] $operationalInstructions
     * @return \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail
     */
    public function setOperationalInstructions(array $operationalInstructions = array())
    {
        foreach ($operationalInstructions as $packageOperationalDetailOperationalInstructionsItem) {
            // validation for constraint: itemType
            if (!$packageOperationalDetailOperationalInstructionsItem instanceof \CommerceFedEx\FedExPHP\Structs\OperationalInstruction) {
                throw new \InvalidArgumentException(sprintf('The OperationalInstructions property can only contain items of \CommerceFedEx\FedExPHP\Structs\OperationalInstruction, "%s" given', is_object($packageOperationalDetailOperationalInstructionsItem) ? get_class($packageOperationalDetailOperationalInstructionsItem) : gettype($packageOperationalDetailOperationalInstructionsItem)), __LINE__);
            }
        }
        $this->OperationalInstructions = $operationalInstructions;
        return $this;
    }
    /**
     * Add item to OperationalInstructions value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\OperationalInstruction $item
     * @return \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail
     */
    public function addToOperationalInstructions(\CommerceFedEx\FedExPHP\Structs\OperationalInstruction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\OperationalInstruction) {
            throw new \InvalidArgumentException(sprintf('The OperationalInstructions property can only contain items of \CommerceFedEx\FedExPHP\Structs\OperationalInstruction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OperationalInstructions[] = $item;
        return $this;
    }
    /**
     * Get Barcodes value
     * @return \CommerceFedEx\FedExPHP\Structs\PackageBarcodes|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    /**
     * Set Barcodes value
     * @param \CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes
     * @return \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail
     */
    public function setBarcodes(\CommerceFedEx\FedExPHP\Structs\PackageBarcodes $barcodes = null)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    /**
     * Get GroundServiceCode value
     * @return string|null
     */
    public function getGroundServiceCode()
    {
        return $this->GroundServiceCode;
    }
    /**
     * Set GroundServiceCode value
     * @param string $groundServiceCode
     * @return \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail
     */
    public function setGroundServiceCode($groundServiceCode = null)
    {
        // validation for constraint: string
        if (!is_null($groundServiceCode) && !is_string($groundServiceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groundServiceCode)), __LINE__);
        }
        $this->GroundServiceCode = $groundServiceCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\PackageOperationalDetail
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
