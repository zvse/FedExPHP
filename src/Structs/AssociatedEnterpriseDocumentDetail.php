<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedEnterpriseDocumentDetail Structs
 * @subpackage Structs
 */
class AssociatedEnterpriseDocumentDetail extends AbstractStructBase
{
    /**
     * The DocumentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentId;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * Constructor method for AssociatedEnterpriseDocumentDetail
     * @uses AssociatedEnterpriseDocumentDetail::setDocumentId()
     * @uses AssociatedEnterpriseDocumentDetail::setTrackingNumber()
     * @param string $documentId
     * @param string $trackingNumber
     */
    public function __construct($documentId = null, $trackingNumber = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setTrackingNumber($trackingNumber);
    }
    /**
     * Get DocumentId value
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentId)), __LINE__);
        }
        $this->DocumentId = $documentId;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\AssociatedEnterpriseDocumentDetail
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
