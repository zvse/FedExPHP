<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageSpecialHandlingDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the condition of a package when it was received at a FedEx location.
 * @subpackage Structs
 */
class PackageSpecialHandlingDetail extends AbstractStructBase
{
    /**
     * The PackedBy
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the party who packed the package.
     * - minOccurs: 0
     * @var string
     */
    public $PackedBy;
    /**
     * The DamageKnown
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether any damange to the contents of the package was known.
     * - minOccurs: 0
     * @var string
     */
    public $DamageKnown;
    /**
     * The InspectionStatus
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the package contents were inspected by the agent.
     * - minOccurs: 0
     * @var string
     */
    public $InspectionStatus;
    /**
     * Constructor method for PackageSpecialHandlingDetail
     * @uses PackageSpecialHandlingDetail::setPackedBy()
     * @uses PackageSpecialHandlingDetail::setDamageKnown()
     * @uses PackageSpecialHandlingDetail::setInspectionStatus()
     * @param string $packedBy
     * @param string $damageKnown
     * @param string $inspectionStatus
     */
    public function __construct($packedBy = null, $damageKnown = null, $inspectionStatus = null)
    {
        $this
            ->setPackedBy($packedBy)
            ->setDamageKnown($damageKnown)
            ->setInspectionStatus($inspectionStatus);
    }
    /**
     * Get PackedBy value
     * @return string|null
     */
    public function getPackedBy()
    {
        return $this->PackedBy;
    }
    /**
     * Set PackedBy value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackagePackedByType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackagePackedByType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packedBy
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail
     */
    public function setPackedBy($packedBy = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PackagePackedByType::valueIsValid($packedBy)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packedBy, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackagePackedByType::getValidValues())), __LINE__);
        }
        $this->PackedBy = $packedBy;
        return $this;
    }
    /**
     * Get DamageKnown value
     * @return string|null
     */
    public function getDamageKnown()
    {
        return $this->DamageKnown;
    }
    /**
     * Set DamageKnown value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DamageStatusType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DamageStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $damageKnown
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail
     */
    public function setDamageKnown($damageKnown = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DamageStatusType::valueIsValid($damageKnown)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $damageKnown, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DamageStatusType::getValidValues())), __LINE__);
        }
        $this->DamageKnown = $damageKnown;
        return $this;
    }
    /**
     * Get InspectionStatus value
     * @return string|null
     */
    public function getInspectionStatus()
    {
        return $this->InspectionStatus;
    }
    /**
     * Set InspectionStatus value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\InspectionStatusType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\InspectionStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inspectionStatus
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail
     */
    public function setInspectionStatus($inspectionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\InspectionStatusType::valueIsValid($inspectionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $inspectionStatus, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\InspectionStatusType::getValidValues())), __LINE__);
        }
        $this->InspectionStatus = $inspectionStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialHandlingDetail
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
