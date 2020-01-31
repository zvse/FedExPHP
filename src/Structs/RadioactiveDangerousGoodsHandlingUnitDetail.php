<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RadioactiveDangerousGoodsHandlingUnitDetail Structs
 * @subpackage Structs
 */
class RadioactiveDangerousGoodsHandlingUnitDetail extends AbstractStructBase
{
    /**
     * The TransportIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $TransportIndex;
    /**
     * The SurfaceReading
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $SurfaceReading;
    /**
     * The CriticalitySafetyIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CriticalitySafetyIndex;
    /**
     * The LabelType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the radioactive label type for this handling unit or package.
     * - minOccurs: 0
     * @var string
     */
    public $LabelType;
    /**
     * Constructor method for RadioactiveDangerousGoodsHandlingUnitDetail
     * @uses RadioactiveDangerousGoodsHandlingUnitDetail::setTransportIndex()
     * @uses RadioactiveDangerousGoodsHandlingUnitDetail::setSurfaceReading()
     * @uses RadioactiveDangerousGoodsHandlingUnitDetail::setCriticalitySafetyIndex()
     * @uses RadioactiveDangerousGoodsHandlingUnitDetail::setLabelType()
     * @param float $transportIndex
     * @param float $surfaceReading
     * @param float $criticalitySafetyIndex
     * @param string $labelType
     */
    public function __construct($transportIndex = null, $surfaceReading = null, $criticalitySafetyIndex = null, $labelType = null)
    {
        $this
            ->setTransportIndex($transportIndex)
            ->setSurfaceReading($surfaceReading)
            ->setCriticalitySafetyIndex($criticalitySafetyIndex)
            ->setLabelType($labelType);
    }
    /**
     * Get TransportIndex value
     * @return float|null
     */
    public function getTransportIndex()
    {
        return $this->TransportIndex;
    }
    /**
     * Set TransportIndex value
     * @param float $transportIndex
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setTransportIndex($transportIndex = null)
    {
        $this->TransportIndex = $transportIndex;
        return $this;
    }
    /**
     * Get SurfaceReading value
     * @return float|null
     */
    public function getSurfaceReading()
    {
        return $this->SurfaceReading;
    }
    /**
     * Set SurfaceReading value
     * @param float $surfaceReading
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setSurfaceReading($surfaceReading = null)
    {
        $this->SurfaceReading = $surfaceReading;
        return $this;
    }
    /**
     * Get CriticalitySafetyIndex value
     * @return float|null
     */
    public function getCriticalitySafetyIndex()
    {
        return $this->CriticalitySafetyIndex;
    }
    /**
     * Set CriticalitySafetyIndex value
     * @param float $criticalitySafetyIndex
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setCriticalitySafetyIndex($criticalitySafetyIndex = null)
    {
        $this->CriticalitySafetyIndex = $criticalitySafetyIndex;
        return $this;
    }
    /**
     * Get LabelType value
     * @return string|null
     */
    public function getLabelType()
    {
        return $this->LabelType;
    }
    /**
     * Set LabelType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RadioactiveLabelType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RadioactiveLabelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setLabelType($labelType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RadioactiveLabelType::valueIsValid($labelType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RadioactiveLabelType::getValidValues())), __LINE__);
        }
        $this->LabelType = $labelType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail
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
