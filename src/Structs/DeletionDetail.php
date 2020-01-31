<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletionDetail Structs
 * @subpackage Structs
 */
class DeletionDetail extends AbstractStructBase
{
    /**
     * The DeleteStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeleteStatus;
    /**
     * Constructor method for DeletionDetail
     * @uses DeletionDetail::setDeleteStatus()
     * @param string $deleteStatus
     */
    public function __construct($deleteStatus = null)
    {
        $this
            ->setDeleteStatus($deleteStatus);
    }
    /**
     * Get DeleteStatus value
     * @return string|null
     */
    public function getDeleteStatus()
    {
        return $this->DeleteStatus;
    }
    /**
     * Set DeleteStatus value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DeleteRecordedShipmentRequestServiceLevel::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DeleteRecordedShipmentRequestServiceLevel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deleteStatus
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail
     */
    public function setDeleteStatus($deleteStatus = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DeleteRecordedShipmentRequestServiceLevel::valueIsValid($deleteStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deleteStatus, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DeleteRecordedShipmentRequestServiceLevel::getValidValues())), __LINE__);
        }
        $this->DeleteStatus = $deleteStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletionDetail
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
