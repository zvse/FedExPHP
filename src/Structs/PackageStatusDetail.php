<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageStatusDetail Structs
 * @subpackage Structs
 */
class PackageStatusDetail extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Status;
    /**
     * The DeletionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail
     */
    public $DeletionDetail;
    /**
     * Constructor method for PackageStatusDetail
     * @uses PackageStatusDetail::setStatus()
     * @uses PackageStatusDetail::setDeletionDetail()
     * @param string[] $status
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail $deletionDetail
     */
    public function __construct(array $status = array(), \NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail $deletionDetail = null)
    {
        $this
            ->setStatus($status)
            ->setDeletionDetail($deletionDetail);
    }
    /**
     * Get Status value
     * @return string[]|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $status
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail
     */
    public function setStatus(array $status = array())
    {
        $invalidValues = array();
        foreach ($status as $packageStatusDetailStatusItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::valueIsValid($packageStatusDetailStatusItem)) {
                $invalidValues[] = var_export($packageStatusDetailStatusItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Add item to Status value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail
     */
    public function addToStatus($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageLineItemStatusType::getValidValues())), __LINE__);
        }
        $this->Status[] = $item;
        return $this;
    }
    /**
     * Get DeletionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail|null
     */
    public function getDeletionDetail()
    {
        return $this->DeletionDetail;
    }
    /**
     * Set DeletionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail $deletionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail
     */
    public function setDeletionDetail(\NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail $deletionDetail = null)
    {
        $this->DeletionDetail = $deletionDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageStatusDetail
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
