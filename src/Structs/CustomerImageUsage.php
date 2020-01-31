<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerImageUsage Structs
 * @subpackage Structs
 */
class CustomerImageUsage extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The InternalId
     * Meta informations extracted from the WSDL
     * - documentation: Internal Id used by INET to identify customer provided images during documents generation. Ex COO etc ...
     * - minOccurs: 0
     * @var string
     */
    public $InternalId;
    /**
     * The InternalImageType
     * Meta informations extracted from the WSDL
     * - documentation: Internal image type used by INET to identify customer provided images during documents generation. Ex COO etc ..
     * - minOccurs: 0
     * @var string
     */
    public $InternalImageType;
    /**
     * Constructor method for CustomerImageUsage
     * @uses CustomerImageUsage::setType()
     * @uses CustomerImageUsage::setId()
     * @uses CustomerImageUsage::setInternalId()
     * @uses CustomerImageUsage::setInternalImageType()
     * @param string $type
     * @param string $id
     * @param string $internalId
     * @param string $internalImageType
     */
    public function __construct($type = null, $id = null, $internalId = null, $internalImageType = null)
    {
        $this
            ->setType($type)
            ->setId($id)
            ->setInternalId($internalId)
            ->setInternalImageType($internalImageType);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomerImageUsageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomerImageUsageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CustomerImageUsageType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CustomerImageUsageType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ImageId::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ImageId::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $id
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage
     */
    public function setId($id = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ImageId::valueIsValid($id)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $id, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ImageId::getValidValues())), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get InternalId value
     * @return string|null
     */
    public function getInternalId()
    {
        return $this->InternalId;
    }
    /**
     * Set InternalId value
     * @param string $internalId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage
     */
    public function setInternalId($internalId = null)
    {
        // validation for constraint: string
        if (!is_null($internalId) && !is_string($internalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internalId)), __LINE__);
        }
        $this->InternalId = $internalId;
        return $this;
    }
    /**
     * Get InternalImageType value
     * @return string|null
     */
    public function getInternalImageType()
    {
        return $this->InternalImageType;
    }
    /**
     * Set InternalImageType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\InternalImageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\InternalImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $internalImageType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage
     */
    public function setInternalImageType($internalImageType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\InternalImageType::valueIsValid($internalImageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $internalImageType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\InternalImageType::getValidValues())), __LINE__);
        }
        $this->InternalImageType = $internalImageType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage
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
