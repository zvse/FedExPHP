<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadedDangerousGoodsContainerGroup Structs
 * @subpackage Structs
 */
class UploadedDangerousGoodsContainerGroup extends AbstractStructBase
{
    /**
     * The NumberOfIdenticalContainers
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of identical containers in this group.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfIdenticalContainers;
    /**
     * The Container
     * Meta informations extracted from the WSDL
     * - documentation: This specifies the commodities in the container. A container may also be known as a dangerous goods package, but this is not necessarily the same as the 'package' or handling unit that a courier transports for shipping. If the
     * handling unit is an OVERPACK, then this container is inside the handling unit.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainer
     */
    public $Container;
    /**
     * Constructor method for UploadedDangerousGoodsContainerGroup
     * @uses UploadedDangerousGoodsContainerGroup::setNumberOfIdenticalContainers()
     * @uses UploadedDangerousGoodsContainerGroup::setContainer()
     * @param int $numberOfIdenticalContainers
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainer $container
     */
    public function __construct($numberOfIdenticalContainers = null, \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainer $container = null)
    {
        $this
            ->setNumberOfIdenticalContainers($numberOfIdenticalContainers)
            ->setContainer($container);
    }
    /**
     * Get NumberOfIdenticalContainers value
     * @return int|null
     */
    public function getNumberOfIdenticalContainers()
    {
        return $this->NumberOfIdenticalContainers;
    }
    /**
     * Set NumberOfIdenticalContainers value
     * @param int $numberOfIdenticalContainers
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup
     */
    public function setNumberOfIdenticalContainers($numberOfIdenticalContainers = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfIdenticalContainers) && !is_numeric($numberOfIdenticalContainers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfIdenticalContainers)), __LINE__);
        }
        $this->NumberOfIdenticalContainers = $numberOfIdenticalContainers;
        return $this;
    }
    /**
     * Get Container value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainer|null
     */
    public function getContainer()
    {
        return $this->Container;
    }
    /**
     * Set Container value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainer $container
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup
     */
    public function setContainer(\NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainer $container = null)
    {
        $this->Container = $container;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadedDangerousGoodsContainerGroup
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
