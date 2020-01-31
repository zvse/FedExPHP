<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegulatoryAdvisoryDetail Structs
 * @subpackage Structs
 */
class RegulatoryAdvisoryDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Categories
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Categories;
    /**
     * The CommodityIndex
     * Meta informations extracted from the WSDL
     * - documentation: This is a 1-based index identifying the commodity in the request that resulted in this COMMODITY or DOCUMENT type prohibition.
     * - minOccurs: 0
     * @var int
     */
    public $CommodityIndex;
    /**
     * The DerivedHarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DerivedHarmonizedCode;
    /**
     * The Advisories
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Message[]
     */
    public $Advisories;
    /**
     * Constructor method for RegulatoryAdvisoryDetail
     * @uses RegulatoryAdvisoryDetail::setType()
     * @uses RegulatoryAdvisoryDetail::setCategories()
     * @uses RegulatoryAdvisoryDetail::setCommodityIndex()
     * @uses RegulatoryAdvisoryDetail::setDerivedHarmonizedCode()
     * @uses RegulatoryAdvisoryDetail::setAdvisories()
     * @param string $type
     * @param string[] $categories
     * @param int $commodityIndex
     * @param string $derivedHarmonizedCode
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Message[] $advisories
     */
    public function __construct($type = null, array $categories = array(), $commodityIndex = null, $derivedHarmonizedCode = null, array $advisories = array())
    {
        $this
            ->setType($type)
            ->setCategories($categories)
            ->setCommodityIndex($commodityIndex)
            ->setDerivedHarmonizedCode($derivedHarmonizedCode)
            ->setAdvisories($advisories);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ProhibitionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ProhibitionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ProhibitionType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ProhibitionType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Categories value
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }
    /**
     * Set Categories value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $categories
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
     */
    public function setCategories(array $categories = array())
    {
        $invalidValues = array();
        foreach ($categories as $regulatoryAdvisoryDetailCategoriesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::valueIsValid($regulatoryAdvisoryDetailCategoriesItem)) {
                $invalidValues[] = var_export($regulatoryAdvisoryDetailCategoriesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::getValidValues())), __LINE__);
        }
        $this->Categories = $categories;
        return $this;
    }
    /**
     * Add item to Categories value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
     */
    public function addToCategories($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentRuleType::getValidValues())), __LINE__);
        }
        $this->Categories[] = $item;
        return $this;
    }
    /**
     * Get CommodityIndex value
     * @return int|null
     */
    public function getCommodityIndex()
    {
        return $this->CommodityIndex;
    }
    /**
     * Set CommodityIndex value
     * @param int $commodityIndex
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
     */
    public function setCommodityIndex($commodityIndex = null)
    {
        // validation for constraint: int
        if (!is_null($commodityIndex) && !is_numeric($commodityIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($commodityIndex)), __LINE__);
        }
        $this->CommodityIndex = $commodityIndex;
        return $this;
    }
    /**
     * Get DerivedHarmonizedCode value
     * @return string|null
     */
    public function getDerivedHarmonizedCode()
    {
        return $this->DerivedHarmonizedCode;
    }
    /**
     * Set DerivedHarmonizedCode value
     * @param string $derivedHarmonizedCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
     */
    public function setDerivedHarmonizedCode($derivedHarmonizedCode = null)
    {
        // validation for constraint: string
        if (!is_null($derivedHarmonizedCode) && !is_string($derivedHarmonizedCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($derivedHarmonizedCode)), __LINE__);
        }
        $this->DerivedHarmonizedCode = $derivedHarmonizedCode;
        return $this;
    }
    /**
     * Get Advisories value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Message[]|null
     */
    public function getAdvisories()
    {
        return $this->Advisories;
    }
    /**
     * Set Advisories value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Message[] $advisories
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
     */
    public function setAdvisories(array $advisories = array())
    {
        foreach ($advisories as $regulatoryAdvisoryDetailAdvisoriesItem) {
            // validation for constraint: itemType
            if (!$regulatoryAdvisoryDetailAdvisoriesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Message) {
                throw new \InvalidArgumentException(sprintf('The Advisories property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Message, "%s" given', is_object($regulatoryAdvisoryDetailAdvisoriesItem) ? get_class($regulatoryAdvisoryDetailAdvisoriesItem) : gettype($regulatoryAdvisoryDetailAdvisoriesItem)), __LINE__);
            }
        }
        $this->Advisories = $advisories;
        return $this;
    }
    /**
     * Add item to Advisories value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Message $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
     */
    public function addToAdvisories(\NicholasCreativeMedia\FedExPHP\Structs\Message $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Message) {
            throw new \InvalidArgumentException(sprintf('The Advisories property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Message, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Advisories[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RegulatoryAdvisoryDetail
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
