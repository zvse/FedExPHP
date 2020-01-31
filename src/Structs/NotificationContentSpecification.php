<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationContentSpecification Structs
 * @subpackage Structs
 */
class NotificationContentSpecification extends AbstractStructBase
{
    /**
     * The Exclusions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Exclusions;
    /**
     * Constructor method for NotificationContentSpecification
     * @uses NotificationContentSpecification::setExclusions()
     * @param string[] $exclusions
     */
    public function __construct(array $exclusions = array())
    {
        $this
            ->setExclusions($exclusions);
    }
    /**
     * Get Exclusions value
     * @return string[]|null
     */
    public function getExclusions()
    {
        return $this->Exclusions;
    }
    /**
     * Set Exclusions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $exclusions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationContentSpecification
     */
    public function setExclusions(array $exclusions = array())
    {
        $invalidValues = array();
        foreach ($exclusions as $notificationContentSpecificationExclusionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::valueIsValid($notificationContentSpecificationExclusionsItem)) {
                $invalidValues[] = var_export($notificationContentSpecificationExclusionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::getValidValues())), __LINE__);
        }
        $this->Exclusions = $exclusions;
        return $this;
    }
    /**
     * Add item to Exclusions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationContentSpecification
     */
    public function addToExclusions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationContentType::getValidValues())), __LINE__);
        }
        $this->Exclusions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NotificationContentSpecification
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
