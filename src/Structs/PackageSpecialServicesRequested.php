<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageSpecialServicesRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the
 * specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class PackageSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the package special service types that are requested on this shipment. For a list of the valid package special service types, please consult your integration documentation or get the list of the available special services
     * from the getAllSpecialServices method of the Validation Availability and Commitment service.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use with FedEx Ground services only; COD must be present in shipment's special services.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public $CodDetail;
    /**
     * The DangerousGoodsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail
     */
    public $DangerousGoodsDetail;
    /**
     * The BatteryDetails
     * Meta informations extracted from the WSDL
     * - documentation: Provides details about the batteries or cells that are contained within this specific package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail[]
     */
    public $BatteryDetails;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $DryIceWeight;
    /**
     * The SignatureOptionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail
     */
    public $SignatureOptionDetail;
    /**
     * The PieceCountVerificationBoxCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PieceCountVerificationBoxCount;
    /**
     * The PriorityAlertDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail
     */
    public $PriorityAlertDetail;
    /**
     * The AlcoholDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail
     */
    public $AlcoholDetail;
    /**
     * Constructor method for PackageSpecialServicesRequested
     * @uses PackageSpecialServicesRequested::setSpecialServiceTypes()
     * @uses PackageSpecialServicesRequested::setCodDetail()
     * @uses PackageSpecialServicesRequested::setDangerousGoodsDetail()
     * @uses PackageSpecialServicesRequested::setBatteryDetails()
     * @uses PackageSpecialServicesRequested::setDryIceWeight()
     * @uses PackageSpecialServicesRequested::setSignatureOptionDetail()
     * @uses PackageSpecialServicesRequested::setPieceCountVerificationBoxCount()
     * @uses PackageSpecialServicesRequested::setPriorityAlertDetail()
     * @uses PackageSpecialServicesRequested::setAlcoholDetail()
     * @param string[] $specialServiceTypes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail[] $batteryDetails
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail
     * @param int $pieceCountVerificationBoxCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail
     */
    public function __construct(array $specialServiceTypes = array(), \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail = null, array $batteryDetails = array(), \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail = null, $pieceCountVerificationBoxCount = null, \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDangerousGoodsDetail($dangerousGoodsDetail)
            ->setBatteryDetails($batteryDetails)
            ->setDryIceWeight($dryIceWeight)
            ->setSignatureOptionDetail($signatureOptionDetail)
            ->setPieceCountVerificationBoxCount($pieceCountVerificationBoxCount)
            ->setPriorityAlertDetail($priorityAlertDetail)
            ->setAlcoholDetail($alcoholDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        foreach ($specialServiceTypes as $packageSpecialServicesRequestedSpecialServiceTypesItem) {
            // validation for constraint: itemType
            if (!is_string($packageSpecialServicesRequestedSpecialServiceTypesItem)) {
                throw new \InvalidArgumentException(sprintf('The SpecialServiceTypes property can only contain items of string, "%s" given', is_object($packageSpecialServicesRequestedSpecialServiceTypesItem) ? get_class($packageSpecialServicesRequestedSpecialServiceTypesItem) : gettype($packageSpecialServicesRequestedSpecialServiceTypesItem)), __LINE__);
            }
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SpecialServiceTypes property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setCodDetail(\NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DangerousGoodsDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail|null
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }
    /**
     * Set DangerousGoodsDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(\NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail = null)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Get BatteryDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail[]|null
     */
    public function getBatteryDetails()
    {
        return $this->BatteryDetails;
    }
    /**
     * Set BatteryDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail[] $batteryDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setBatteryDetails(array $batteryDetails = array())
    {
        foreach ($batteryDetails as $packageSpecialServicesRequestedBatteryDetailsItem) {
            // validation for constraint: itemType
            if (!$packageSpecialServicesRequestedBatteryDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail) {
                throw new \InvalidArgumentException(sprintf('The BatteryDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail, "%s" given', is_object($packageSpecialServicesRequestedBatteryDetailsItem) ? get_class($packageSpecialServicesRequestedBatteryDetailsItem) : gettype($packageSpecialServicesRequestedBatteryDetailsItem)), __LINE__);
            }
        }
        $this->BatteryDetails = $batteryDetails;
        return $this;
    }
    /**
     * Add item to BatteryDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function addToBatteryDetails(\NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail) {
            throw new \InvalidArgumentException(sprintf('The BatteryDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\BatteryClassificationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BatteryDetails[] = $item;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setDryIceWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get SignatureOptionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail|null
     */
    public function getSignatureOptionDetail()
    {
        return $this->SignatureOptionDetail;
    }
    /**
     * Set SignatureOptionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(\NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail = null)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * Get PieceCountVerificationBoxCount value
     * @return int|null
     */
    public function getPieceCountVerificationBoxCount()
    {
        return $this->PieceCountVerificationBoxCount;
    }
    /**
     * Set PieceCountVerificationBoxCount value
     * @param int $pieceCountVerificationBoxCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setPieceCountVerificationBoxCount($pieceCountVerificationBoxCount = null)
    {
        // validation for constraint: int
        if (!is_null($pieceCountVerificationBoxCount) && !is_numeric($pieceCountVerificationBoxCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieceCountVerificationBoxCount)), __LINE__);
        }
        $this->PieceCountVerificationBoxCount = $pieceCountVerificationBoxCount;
        return $this;
    }
    /**
     * Get PriorityAlertDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail|null
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }
    /**
     * Set PriorityAlertDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(\NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * Get AlcoholDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail|null
     */
    public function getAlcoholDetail()
    {
        return $this->AlcoholDetail;
    }
    /**
     * Set AlcoholDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setAlcoholDetail(\NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail = null)
    {
        $this->AlcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
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
