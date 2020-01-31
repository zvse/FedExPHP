<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationSupportedShipmentDetail Structs
 * @subpackage Structs
 */
class LocationSupportedShipmentDetail extends AbstractStructBase
{
    /**
     * The PackageDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail[]
     */
    public $PackageDetails;
    /**
     * Constructor method for LocationSupportedShipmentDetail
     * @uses LocationSupportedShipmentDetail::setPackageDetails()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail[] $packageDetails
     */
    public function __construct(array $packageDetails = array())
    {
        $this
            ->setPackageDetails($packageDetails);
    }
    /**
     * Get PackageDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail[]|null
     */
    public function getPackageDetails()
    {
        return $this->PackageDetails;
    }
    /**
     * Set PackageDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail[] $packageDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail
     */
    public function setPackageDetails(array $packageDetails = array())
    {
        foreach ($packageDetails as $locationSupportedShipmentDetailPackageDetailsItem) {
            // validation for constraint: itemType
            if (!$locationSupportedShipmentDetailPackageDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail) {
                throw new \InvalidArgumentException(sprintf('The PackageDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail, "%s" given', is_object($locationSupportedShipmentDetailPackageDetailsItem) ? get_class($locationSupportedShipmentDetailPackageDetailsItem) : gettype($locationSupportedShipmentDetailPackageDetailsItem)), __LINE__);
            }
        }
        $this->PackageDetails = $packageDetails;
        return $this;
    }
    /**
     * Add item to PackageDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail
     */
    public function addToPackageDetails(\NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail) {
            throw new \InvalidArgumentException(sprintf('The PackageDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedPackageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSupportedShipmentDetail
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
