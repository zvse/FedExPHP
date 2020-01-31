<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadedDangerousGoodsHandlingUnit Structs
 * @subpackage Structs
 */
class UploadedDangerousGoodsHandlingUnit extends AbstractStructBase
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
     * The RadioactiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the radioactive information required for a handling unit.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public $RadioactiveDetail;
    /**
     * The ContainerGroups
     * Meta informations extracted from the WSDL
     * - documentation: A container group is used to specify a single dangerous goods container or specify a group of identical dangerous goods containers. A dangerous goods container may also be known as a dangerous goods package. The term 'package' is not
     * necessarily the same concept as a requested package line item in the shipping domain.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup[]
     */
    public $ContainerGroups;
    /**
     * Constructor method for UploadedDangerousGoodsHandlingUnit
     * @uses UploadedDangerousGoodsHandlingUnit::setAttributes()
     * @uses UploadedDangerousGoodsHandlingUnit::setRadioactiveDetail()
     * @uses UploadedDangerousGoodsHandlingUnit::setContainerGroups()
     * @param string[] $attributes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail $radioactiveDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup[] $containerGroups
     */
    public function __construct(array $attributes = array(), \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail $radioactiveDetail = null, array $containerGroups = array())
    {
        $this
            ->setAttributes($attributes)
            ->setRadioactiveDetail($radioactiveDetail)
            ->setContainerGroups($containerGroups);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $uploadedDangerousGoodsHandlingUnitAttributesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::valueIsValid($uploadedDangerousGoodsHandlingUnitAttributesItem)) {
                $invalidValues[] = var_export($uploadedDangerousGoodsHandlingUnitAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DangerousGoodsHandlingUnitAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get RadioactiveDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail|null
     */
    public function getRadioactiveDetail()
    {
        return $this->RadioactiveDetail;
    }
    /**
     * Set RadioactiveDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail $radioactiveDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit
     */
    public function setRadioactiveDetail(\NicholasCreativeMedia\FedExPHP\Structs\RadioactiveDangerousGoodsHandlingUnitDetail $radioactiveDetail = null)
    {
        $this->RadioactiveDetail = $radioactiveDetail;
        return $this;
    }
    /**
     * Get ContainerGroups value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup[]|null
     */
    public function getContainerGroups()
    {
        return $this->ContainerGroups;
    }
    /**
     * Set ContainerGroups value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup[] $containerGroups
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit
     */
    public function setContainerGroups(array $containerGroups = array())
    {
        foreach ($containerGroups as $uploadedDangerousGoodsHandlingUnitContainerGroupsItem) {
            // validation for constraint: itemType
            if (!$uploadedDangerousGoodsHandlingUnitContainerGroupsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup) {
                throw new \InvalidArgumentException(sprintf('The ContainerGroups property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup, "%s" given', is_object($uploadedDangerousGoodsHandlingUnitContainerGroupsItem) ? get_class($uploadedDangerousGoodsHandlingUnitContainerGroupsItem) : gettype($uploadedDangerousGoodsHandlingUnitContainerGroupsItem)), __LINE__);
            }
        }
        $this->ContainerGroups = $containerGroups;
        return $this;
    }
    /**
     * Add item to ContainerGroups value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit
     */
    public function addToContainerGroups(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup) {
            throw new \InvalidArgumentException(sprintf('The ContainerGroups property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContainerGroups[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsHandlingUnit
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
