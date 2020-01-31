<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransborderDistributionSummaryDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the summary of aggregates that are maintianed for a transborder consolidation.
 * @subpackage Structs
 */
class TransborderDistributionSummaryDetail extends AbstractStructBase
{
    /**
     * The ExpressPackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ExpressPackageCount;
    /**
     * The ExpressTotalPackageWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $ExpressTotalPackageWeight;
    /**
     * The ExpressTotalPackageAdjustedWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $ExpressTotalPackageAdjustedWeight;
    /**
     * The ExpressFreightPackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ExpressFreightPackageCount;
    /**
     * The ExpressTotalFreightWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $ExpressTotalFreightWeight;
    /**
     * The ExpressTotalFreightAdjustedWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $ExpressTotalFreightAdjustedWeight;
    /**
     * The GroundPackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GroundPackageCount;
    /**
     * The GroundTotalPackageWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $GroundTotalPackageWeight;
    /**
     * The GroundTotalPackageAdjustedWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $GroundTotalPackageAdjustedWeight;
    /**
     * The NumberOfUnconsolidatedCommodities
     * Meta informations extracted from the WSDL
     * - documentation: The number of commodities that are unique commodities in the consolidation. These commodities are mentioned as separate items on the consolidated commercial invoice.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfUnconsolidatedCommodities;
    /**
     * Constructor method for TransborderDistributionSummaryDetail
     * @uses TransborderDistributionSummaryDetail::setExpressPackageCount()
     * @uses TransborderDistributionSummaryDetail::setExpressTotalPackageWeight()
     * @uses TransborderDistributionSummaryDetail::setExpressTotalPackageAdjustedWeight()
     * @uses TransborderDistributionSummaryDetail::setExpressFreightPackageCount()
     * @uses TransborderDistributionSummaryDetail::setExpressTotalFreightWeight()
     * @uses TransborderDistributionSummaryDetail::setExpressTotalFreightAdjustedWeight()
     * @uses TransborderDistributionSummaryDetail::setGroundPackageCount()
     * @uses TransborderDistributionSummaryDetail::setGroundTotalPackageWeight()
     * @uses TransborderDistributionSummaryDetail::setGroundTotalPackageAdjustedWeight()
     * @uses TransborderDistributionSummaryDetail::setNumberOfUnconsolidatedCommodities()
     * @param int $expressPackageCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageAdjustedWeight
     * @param int $expressFreightPackageCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightAdjustedWeight
     * @param int $groundPackageCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageAdjustedWeight
     * @param int $numberOfUnconsolidatedCommodities
     */
    public function __construct($expressPackageCount = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageAdjustedWeight = null, $expressFreightPackageCount = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightAdjustedWeight = null, $groundPackageCount = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageAdjustedWeight = null, $numberOfUnconsolidatedCommodities = null)
    {
        $this
            ->setExpressPackageCount($expressPackageCount)
            ->setExpressTotalPackageWeight($expressTotalPackageWeight)
            ->setExpressTotalPackageAdjustedWeight($expressTotalPackageAdjustedWeight)
            ->setExpressFreightPackageCount($expressFreightPackageCount)
            ->setExpressTotalFreightWeight($expressTotalFreightWeight)
            ->setExpressTotalFreightAdjustedWeight($expressTotalFreightAdjustedWeight)
            ->setGroundPackageCount($groundPackageCount)
            ->setGroundTotalPackageWeight($groundTotalPackageWeight)
            ->setGroundTotalPackageAdjustedWeight($groundTotalPackageAdjustedWeight)
            ->setNumberOfUnconsolidatedCommodities($numberOfUnconsolidatedCommodities);
    }
    /**
     * Get ExpressPackageCount value
     * @return int|null
     */
    public function getExpressPackageCount()
    {
        return $this->ExpressPackageCount;
    }
    /**
     * Set ExpressPackageCount value
     * @param int $expressPackageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setExpressPackageCount($expressPackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($expressPackageCount) && !is_numeric($expressPackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expressPackageCount)), __LINE__);
        }
        $this->ExpressPackageCount = $expressPackageCount;
        return $this;
    }
    /**
     * Get ExpressTotalPackageWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getExpressTotalPackageWeight()
    {
        return $this->ExpressTotalPackageWeight;
    }
    /**
     * Set ExpressTotalPackageWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setExpressTotalPackageWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageWeight = null)
    {
        $this->ExpressTotalPackageWeight = $expressTotalPackageWeight;
        return $this;
    }
    /**
     * Get ExpressTotalPackageAdjustedWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getExpressTotalPackageAdjustedWeight()
    {
        return $this->ExpressTotalPackageAdjustedWeight;
    }
    /**
     * Set ExpressTotalPackageAdjustedWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageAdjustedWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setExpressTotalPackageAdjustedWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalPackageAdjustedWeight = null)
    {
        $this->ExpressTotalPackageAdjustedWeight = $expressTotalPackageAdjustedWeight;
        return $this;
    }
    /**
     * Get ExpressFreightPackageCount value
     * @return int|null
     */
    public function getExpressFreightPackageCount()
    {
        return $this->ExpressFreightPackageCount;
    }
    /**
     * Set ExpressFreightPackageCount value
     * @param int $expressFreightPackageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setExpressFreightPackageCount($expressFreightPackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($expressFreightPackageCount) && !is_numeric($expressFreightPackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expressFreightPackageCount)), __LINE__);
        }
        $this->ExpressFreightPackageCount = $expressFreightPackageCount;
        return $this;
    }
    /**
     * Get ExpressTotalFreightWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getExpressTotalFreightWeight()
    {
        return $this->ExpressTotalFreightWeight;
    }
    /**
     * Set ExpressTotalFreightWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setExpressTotalFreightWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightWeight = null)
    {
        $this->ExpressTotalFreightWeight = $expressTotalFreightWeight;
        return $this;
    }
    /**
     * Get ExpressTotalFreightAdjustedWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getExpressTotalFreightAdjustedWeight()
    {
        return $this->ExpressTotalFreightAdjustedWeight;
    }
    /**
     * Set ExpressTotalFreightAdjustedWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightAdjustedWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setExpressTotalFreightAdjustedWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $expressTotalFreightAdjustedWeight = null)
    {
        $this->ExpressTotalFreightAdjustedWeight = $expressTotalFreightAdjustedWeight;
        return $this;
    }
    /**
     * Get GroundPackageCount value
     * @return int|null
     */
    public function getGroundPackageCount()
    {
        return $this->GroundPackageCount;
    }
    /**
     * Set GroundPackageCount value
     * @param int $groundPackageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setGroundPackageCount($groundPackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($groundPackageCount) && !is_numeric($groundPackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groundPackageCount)), __LINE__);
        }
        $this->GroundPackageCount = $groundPackageCount;
        return $this;
    }
    /**
     * Get GroundTotalPackageWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getGroundTotalPackageWeight()
    {
        return $this->GroundTotalPackageWeight;
    }
    /**
     * Set GroundTotalPackageWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setGroundTotalPackageWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageWeight = null)
    {
        $this->GroundTotalPackageWeight = $groundTotalPackageWeight;
        return $this;
    }
    /**
     * Get GroundTotalPackageAdjustedWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getGroundTotalPackageAdjustedWeight()
    {
        return $this->GroundTotalPackageAdjustedWeight;
    }
    /**
     * Set GroundTotalPackageAdjustedWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageAdjustedWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setGroundTotalPackageAdjustedWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $groundTotalPackageAdjustedWeight = null)
    {
        $this->GroundTotalPackageAdjustedWeight = $groundTotalPackageAdjustedWeight;
        return $this;
    }
    /**
     * Get NumberOfUnconsolidatedCommodities value
     * @return int|null
     */
    public function getNumberOfUnconsolidatedCommodities()
    {
        return $this->NumberOfUnconsolidatedCommodities;
    }
    /**
     * Set NumberOfUnconsolidatedCommodities value
     * @param int $numberOfUnconsolidatedCommodities
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
     */
    public function setNumberOfUnconsolidatedCommodities($numberOfUnconsolidatedCommodities = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnconsolidatedCommodities) && !is_numeric($numberOfUnconsolidatedCommodities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnconsolidatedCommodities)), __LINE__);
        }
        $this->NumberOfUnconsolidatedCommodities = $numberOfUnconsolidatedCommodities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransborderDistributionSummaryDetail
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
