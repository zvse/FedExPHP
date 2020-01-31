<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContent Structs
 * @subpackage Structs
 */
class DocTabContent extends AbstractStructBase
{
    /**
     * The DocTabContentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $DocTabContentType;
    /**
     * The Zone001
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001
     */
    public $Zone001;
    /**
     * The Barcoded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded
     */
    public $Barcoded;
    /**
     * Constructor method for DocTabContent
     * @uses DocTabContent::setDocTabContentType()
     * @uses DocTabContent::setZone001()
     * @uses DocTabContent::setBarcoded()
     * @param string $docTabContentType
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001 $zone001
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded $barcoded
     */
    public function __construct($docTabContentType = null, \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001 $zone001 = null, \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded $barcoded = null)
    {
        $this
            ->setDocTabContentType($docTabContentType)
            ->setZone001($zone001)
            ->setBarcoded($barcoded);
    }
    /**
     * Get DocTabContentType value
     * @return string
     */
    public function getDocTabContentType()
    {
        return $this->DocTabContentType;
    }
    /**
     * Set DocTabContentType value
     * @uses \CommerceFedEx\FedExPHP\Enums\DocTabContentType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DocTabContentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $docTabContentType
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContent
     */
    public function setDocTabContentType($docTabContentType = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DocTabContentType::valueIsValid($docTabContentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $docTabContentType, implode(', ', \CommerceFedEx\FedExPHP\Enums\DocTabContentType::getValidValues())), __LINE__);
        }
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    /**
     * Get Zone001 value
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001|null
     */
    public function getZone001()
    {
        return $this->Zone001;
    }
    /**
     * Set Zone001 value
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001 $zone001
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContent
     */
    public function setZone001(\CommerceFedEx\FedExPHP\Structs\DocTabContentZone001 $zone001 = null)
    {
        $this->Zone001 = $zone001;
        return $this;
    }
    /**
     * Get Barcoded value
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded|null
     */
    public function getBarcoded()
    {
        return $this->Barcoded;
    }
    /**
     * Set Barcoded value
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded $barcoded
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContent
     */
    public function setBarcoded(\CommerceFedEx\FedExPHP\Structs\DocTabContentBarcoded $barcoded = null)
    {
        $this->Barcoded = $barcoded;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContent
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
