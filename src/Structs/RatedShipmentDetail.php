<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 * @subpackage Structs
 */
class RatedShipmentDetail extends AbstractStructBase
{
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" total net charge.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Express COD is shipment level.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The ShipmentRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: The shipment-level totals for this rate type.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentRateDetail
     */
    public $ShipmentRateDetail;
    /**
     * The RatedPackages
     * Meta informations extracted from the WSDL
     * - documentation: The package-level data for this rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail[]
     */
    public $RatedPackages;
    /**
     * Constructor method for RatedShipmentDetail
     * @uses RatedShipmentDetail::setEffectiveNetDiscount()
     * @uses RatedShipmentDetail::setAdjustedCodCollectionAmount()
     * @uses RatedShipmentDetail::setShipmentRateDetail()
     * @uses RatedShipmentDetail::setRatedPackages()
     * @param \CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount
     * @param \CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentRateDetail $shipmentRateDetail
     * @param \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail[] $ratedPackages
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount = null, \CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount = null, \CommerceFedEx\FedExPHP\Structs\ShipmentRateDetail $shipmentRateDetail = null, array $ratedPackages = array())
    {
        $this
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setShipmentRateDetail($shipmentRateDetail)
            ->setRatedPackages($ratedPackages);
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount
     * @return \CommerceFedEx\FedExPHP\Structs\RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(\CommerceFedEx\FedExPHP\Structs\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get AdjustedCodCollectionAmount value
     * @return \CommerceFedEx\FedExPHP\Structs\Money|null
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }
    /**
     * Set AdjustedCodCollectionAmount value
     * @param \CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount
     * @return \CommerceFedEx\FedExPHP\Structs\RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(\CommerceFedEx\FedExPHP\Structs\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    /**
     * Get ShipmentRateDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentRateDetail|null
     */
    public function getShipmentRateDetail()
    {
        return $this->ShipmentRateDetail;
    }
    /**
     * Set ShipmentRateDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentRateDetail $shipmentRateDetail
     * @return \CommerceFedEx\FedExPHP\Structs\RatedShipmentDetail
     */
    public function setShipmentRateDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentRateDetail $shipmentRateDetail = null)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    /**
     * Get RatedPackages value
     * @return \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail[]|null
     */
    public function getRatedPackages()
    {
        return $this->RatedPackages;
    }
    /**
     * Set RatedPackages value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail[] $ratedPackages
     * @return \CommerceFedEx\FedExPHP\Structs\RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages = array())
    {
        foreach ($ratedPackages as $ratedShipmentDetailRatedPackagesItem) {
            // validation for constraint: itemType
            if (!$ratedShipmentDetailRatedPackagesItem instanceof \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail) {
                throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail, "%s" given', is_object($ratedShipmentDetailRatedPackagesItem) ? get_class($ratedShipmentDetailRatedPackagesItem) : gettype($ratedShipmentDetailRatedPackagesItem)), __LINE__);
            }
        }
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    /**
     * Add item to RatedPackages value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail $item
     * @return \CommerceFedEx\FedExPHP\Structs\RatedShipmentDetail
     */
    public function addToRatedPackages(\CommerceFedEx\FedExPHP\Structs\RatedPackageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail) {
            throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \CommerceFedEx\FedExPHP\Structs\RatedPackageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatedPackages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RatedShipmentDetail
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
