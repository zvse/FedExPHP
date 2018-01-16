<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHazardousShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Computed shipment level hazardous commodity information.
 * @subpackage Structs
 */
class CompletedHazardousShipmentDetail extends AbstractStructBase
{
    /**
     * The HazardousSummaryDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CompletedHazardousSummaryDetail
     */
    public $HazardousSummaryDetail;
    /**
     * The DryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail
     */
    public $DryIceDetail;
    /**
     * The AdrLicense
     * Meta informations extracted from the WSDL
     * - documentation: This contains the ADR License information, which identifies the license number and ADR category under which the customer is allowed to ship.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\AdrLicenseDetail
     */
    public $AdrLicense;
    /**
     * Constructor method for CompletedHazardousShipmentDetail
     * @uses CompletedHazardousShipmentDetail::setHazardousSummaryDetail()
     * @uses CompletedHazardousShipmentDetail::setDryIceDetail()
     * @uses CompletedHazardousShipmentDetail::setAdrLicense()
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @param \CommerceFedEx\FedExPHP\Structs\AdrLicenseDetail $adrLicense
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null, \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null, \CommerceFedEx\FedExPHP\Structs\AdrLicenseDetail $adrLicense = null)
    {
        $this
            ->setHazardousSummaryDetail($hazardousSummaryDetail)
            ->setDryIceDetail($dryIceDetail)
            ->setAdrLicense($adrLicense);
    }
    /**
     * Get HazardousSummaryDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHazardousSummaryDetail|null
     */
    public function getHazardousSummaryDetail()
    {
        return $this->HazardousSummaryDetail;
    }
    /**
     * Set HazardousSummaryDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHazardousShipmentDetail
     */
    public function setHazardousSummaryDetail(\CommerceFedEx\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null)
    {
        $this->HazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    /**
     * Get DryIceDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail|null
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    /**
     * Set DryIceDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHazardousShipmentDetail
     */
    public function setDryIceDetail(\CommerceFedEx\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null)
    {
        $this->DryIceDetail = $dryIceDetail;
        return $this;
    }
    /**
     * Get AdrLicense value
     * @return \CommerceFedEx\FedExPHP\Structs\AdrLicenseDetail|null
     */
    public function getAdrLicense()
    {
        return $this->AdrLicense;
    }
    /**
     * Set AdrLicense value
     * @param \CommerceFedEx\FedExPHP\Structs\AdrLicenseDetail $adrLicense
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHazardousShipmentDetail
     */
    public function setAdrLicense(\CommerceFedEx\FedExPHP\Structs\AdrLicenseDetail $adrLicense = null)
    {
        $this->AdrLicense = $adrLicense;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\CompletedHazardousShipmentDetail
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
