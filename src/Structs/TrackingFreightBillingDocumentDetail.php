<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingFreightBillingDocumentDetail Structs
 * @subpackage Structs
 */
class TrackingFreightBillingDocumentDetail extends AbstractStructBase
{
    /**
     * The DocumentFormat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentFormat
     */
    public $DocumentFormat;
    /**
     * Constructor method for TrackingFreightBillingDocumentDetail
     * @uses TrackingFreightBillingDocumentDetail::setDocumentFormat()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentFormat $documentFormat
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentFormat $documentFormat = null)
    {
        $this
            ->setDocumentFormat($documentFormat);
    }
    /**
     * Get DocumentFormat value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentFormat|null
     */
    public function getDocumentFormat()
    {
        return $this->DocumentFormat;
    }
    /**
     * Set DocumentFormat value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentFormat $documentFormat
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail
     */
    public function setDocumentFormat(\NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentFormat $documentFormat = null)
    {
        $this->DocumentFormat = $documentFormat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingFreightBillingDocumentDetail
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
