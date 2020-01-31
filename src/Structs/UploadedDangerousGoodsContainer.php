<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadedDangerousGoodsContainer Structs
 * @subpackage Structs
 */
class UploadedDangerousGoodsContainer extends AbstractStructBase
{
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The ContainerType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of container or dangerous goods packaging, like 'Fiberboard Box' or 'Type B(U) Package'.
     * - minOccurs: 0
     * @var string
     */
    public $ContainerType;
    /**
     * The QValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $QValue;
    /**
     * The GrossWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Weight
     */
    public $GrossWeight;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent[]
     */
    public $Commodities;
    /**
     * Constructor method for UploadedDangerousGoodsContainer
     * @uses UploadedDangerousGoodsContainer::setAttributes()
     * @uses UploadedDangerousGoodsContainer::setContainerType()
     * @uses UploadedDangerousGoodsContainer::setQValue()
     * @uses UploadedDangerousGoodsContainer::setGrossWeight()
     * @uses UploadedDangerousGoodsContainer::setCommodities()
     * @param string[] $attributes
     * @param string $containerType
     * @param float $qValue
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $grossWeight
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent[] $commodities
     */
    public function __construct(array $attributes = array(), $containerType = null, $qValue = null, \CommerceFedEx\FedExPHP\Structs\Weight $grossWeight = null, array $commodities = array())
    {
        $this
            ->setAttributes($attributes)
            ->setContainerType($containerType)
            ->setQValue($qValue)
            ->setGrossWeight($grossWeight)
            ->setCommodities($commodities);
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $uploadedDangerousGoodsContainerAttributesItem) {
            if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::valueIsValid($uploadedDangerousGoodsContainerAttributesItem)) {
                $invalidValues[] = var_export($uploadedDangerousGoodsContainerAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \CommerceFedEx\FedExPHP\Enums\DangerousGoodsContainerAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get ContainerType value
     * @return string|null
     */
    public function getContainerType()
    {
        return $this->ContainerType;
    }
    /**
     * Set ContainerType value
     * @param string $containerType
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public function setContainerType($containerType = null)
    {
        // validation for constraint: string
        if (!is_null($containerType) && !is_string($containerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($containerType)), __LINE__);
        }
        $this->ContainerType = $containerType;
        return $this;
    }
    /**
     * Get QValue value
     * @return float|null
     */
    public function getQValue()
    {
        return $this->QValue;
    }
    /**
     * Set QValue value
     * @param float $qValue
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public function setQValue($qValue = null)
    {
        $this->QValue = $qValue;
        return $this;
    }
    /**
     * Get GrossWeight value
     * @return \CommerceFedEx\FedExPHP\Structs\Weight|null
     */
    public function getGrossWeight()
    {
        return $this->GrossWeight;
    }
    /**
     * Set GrossWeight value
     * @param \CommerceFedEx\FedExPHP\Structs\Weight $grossWeight
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public function setGrossWeight(\CommerceFedEx\FedExPHP\Structs\Weight $grossWeight = null)
    {
        $this->GrossWeight = $grossWeight;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent[]|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent[] $commodities
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public function setCommodities(array $commodities = array())
    {
        foreach ($commodities as $uploadedDangerousGoodsContainerCommoditiesItem) {
            // validation for constraint: itemType
            if (!$uploadedDangerousGoodsContainerCommoditiesItem instanceof \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent) {
                throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent, "%s" given', is_object($uploadedDangerousGoodsContainerCommoditiesItem) ? get_class($uploadedDangerousGoodsContainerCommoditiesItem) : gettype($uploadedDangerousGoodsContainerCommoditiesItem)), __LINE__);
            }
        }
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Add item to Commodities value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent $item
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public function addToCommodities(\CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent) {
            throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsCommodityContent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Commodities[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UploadedDangerousGoodsContainer
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
