<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentZone001 Structs
 * @subpackage Structs
 */
class DocTabContentZone001 extends AbstractStructBase
{
    /**
     * The DocTabZoneSpecifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: 12
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification[]
     */
    public $DocTabZoneSpecifications;
    /**
     * Constructor method for DocTabContentZone001
     * @uses DocTabContentZone001::setDocTabZoneSpecifications()
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification[] $docTabZoneSpecifications
     */
    public function __construct(array $docTabZoneSpecifications = array())
    {
        $this
            ->setDocTabZoneSpecifications($docTabZoneSpecifications);
    }
    /**
     * Get DocTabZoneSpecifications value
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification[]
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->DocTabZoneSpecifications;
    }
    /**
     * Set DocTabZoneSpecifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification[] $docTabZoneSpecifications
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications = array())
    {
        foreach ($docTabZoneSpecifications as $docTabContentZone001DocTabZoneSpecificationsItem) {
            // validation for constraint: itemType
            if (!$docTabContentZone001DocTabZoneSpecificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification) {
                throw new \InvalidArgumentException(sprintf('The DocTabZoneSpecifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification, "%s" given', is_object($docTabContentZone001DocTabZoneSpecificationsItem) ? get_class($docTabContentZone001DocTabZoneSpecificationsItem) : gettype($docTabContentZone001DocTabZoneSpecificationsItem)), __LINE__);
            }
        }
        $this->DocTabZoneSpecifications = $docTabZoneSpecifications;
        return $this;
    }
    /**
     * Add item to DocTabZoneSpecifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification $item
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001
     */
    public function addToDocTabZoneSpecifications(\CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification) {
            throw new \InvalidArgumentException(sprintf('The DocTabZoneSpecifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\DocTabZoneSpecification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocTabZoneSpecifications[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DocTabContentZone001
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
