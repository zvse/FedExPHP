<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationCapabilityDetail Structs
 * @subpackage Structs
 */
class LocationCapabilityDetail extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: The carrier code for which this capability applies.
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The ServiceCategory
     * Meta informations extracted from the WSDL
     * - documentation: The service category for which this capability applies.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCategory;
    /**
     * The TransferOfPossessionType
     * Meta informations extracted from the WSDL
     * - documentation: The method by which a package is transferred to the possession of a FedEx location.
     * - minOccurs: 0
     * @var string
     */
    public $TransferOfPossessionType;
    /**
     * The DaysOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The days of the week for which this capability applies.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DaysOfWeek;
    /**
     * Constructor method for LocationCapabilityDetail
     * @uses LocationCapabilityDetail::setCarrierCode()
     * @uses LocationCapabilityDetail::setServiceType()
     * @uses LocationCapabilityDetail::setServiceCategory()
     * @uses LocationCapabilityDetail::setTransferOfPossessionType()
     * @uses LocationCapabilityDetail::setDaysOfWeek()
     * @param string $carrierCode
     * @param string $serviceType
     * @param string $serviceCategory
     * @param string $transferOfPossessionType
     * @param string[] $daysOfWeek
     */
    public function __construct($carrierCode = null, $serviceType = null, $serviceCategory = null, $transferOfPossessionType = null, array $daysOfWeek = array())
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setServiceType($serviceType)
            ->setServiceCategory($serviceCategory)
            ->setTransferOfPossessionType($transferOfPossessionType)
            ->setDaysOfWeek($daysOfWeek);
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get ServiceCategory value
     * @return string|null
     */
    public function getServiceCategory()
    {
        return $this->ServiceCategory;
    }
    /**
     * Set ServiceCategory value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceCategory
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail
     */
    public function setServiceCategory($serviceCategory = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::valueIsValid($serviceCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceCategory, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceCategoryType::getValidValues())), __LINE__);
        }
        $this->ServiceCategory = $serviceCategory;
        return $this;
    }
    /**
     * Get TransferOfPossessionType value
     * @return string|null
     */
    public function getTransferOfPossessionType()
    {
        return $this->TransferOfPossessionType;
    }
    /**
     * Set TransferOfPossessionType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationTransferOfPossessionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationTransferOfPossessionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transferOfPossessionType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail
     */
    public function setTransferOfPossessionType($transferOfPossessionType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationTransferOfPossessionType::valueIsValid($transferOfPossessionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transferOfPossessionType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationTransferOfPossessionType::getValidValues())), __LINE__);
        }
        $this->TransferOfPossessionType = $transferOfPossessionType;
        return $this;
    }
    /**
     * Get DaysOfWeek value
     * @return string[]|null
     */
    public function getDaysOfWeek()
    {
        return $this->DaysOfWeek;
    }
    /**
     * Set DaysOfWeek value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $daysOfWeek
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail
     */
    public function setDaysOfWeek(array $daysOfWeek = array())
    {
        $invalidValues = array();
        foreach ($daysOfWeek as $locationCapabilityDetailDaysOfWeekItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($locationCapabilityDetailDaysOfWeekItem)) {
                $invalidValues[] = var_export($locationCapabilityDetailDaysOfWeekItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DaysOfWeek = $daysOfWeek;
        return $this;
    }
    /**
     * Add item to DaysOfWeek value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail
     */
    public function addToDaysOfWeek($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DaysOfWeek[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationCapabilityDetail
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
