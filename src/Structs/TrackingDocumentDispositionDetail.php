<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingDocumentDispositionDetail Structs
 * @subpackage Structs
 */
class TrackingDocumentDispositionDetail extends AbstractStructBase
{
    /**
     * The DispositionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DispositionType;
    /**
     * The EMailDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail
     */
    public $EMailDetail;
    /**
     * The FaxDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the information used to fax the document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail[]
     */
    public $FaxDetails;
    /**
     * Constructor method for TrackingDocumentDispositionDetail
     * @uses TrackingDocumentDispositionDetail::setDispositionType()
     * @uses TrackingDocumentDispositionDetail::setEMailDetail()
     * @uses TrackingDocumentDispositionDetail::setFaxDetails()
     * @param string $dispositionType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail $eMailDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail[] $faxDetails
     */
    public function __construct($dispositionType = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail $eMailDetail = null, array $faxDetails = array())
    {
        $this
            ->setDispositionType($dispositionType)
            ->setEMailDetail($eMailDetail)
            ->setFaxDetails($faxDetails);
    }
    /**
     * Get DispositionType value
     * @return string|null
     */
    public function getDispositionType()
    {
        return $this->DispositionType;
    }
    /**
     * Set DispositionType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentDispositionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentDispositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dispositionType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentDispositionDetail
     */
    public function setDispositionType($dispositionType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentDispositionType::valueIsValid($dispositionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dispositionType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackingDocumentDispositionType::getValidValues())), __LINE__);
        }
        $this->DispositionType = $dispositionType;
        return $this;
    }
    /**
     * Get EMailDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail|null
     */
    public function getEMailDetail()
    {
        return $this->EMailDetail;
    }
    /**
     * Set EMailDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail $eMailDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentDispositionDetail
     */
    public function setEMailDetail(\NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentEmailDetail $eMailDetail = null)
    {
        $this->EMailDetail = $eMailDetail;
        return $this;
    }
    /**
     * Get FaxDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail[]|null
     */
    public function getFaxDetails()
    {
        return $this->FaxDetails;
    }
    /**
     * Set FaxDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail[] $faxDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentDispositionDetail
     */
    public function setFaxDetails(array $faxDetails = array())
    {
        foreach ($faxDetails as $trackingDocumentDispositionDetailFaxDetailsItem) {
            // validation for constraint: itemType
            if (!$trackingDocumentDispositionDetailFaxDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail) {
                throw new \InvalidArgumentException(sprintf('The FaxDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail, "%s" given', is_object($trackingDocumentDispositionDetailFaxDetailsItem) ? get_class($trackingDocumentDispositionDetailFaxDetailsItem) : gettype($trackingDocumentDispositionDetailFaxDetailsItem)), __LINE__);
            }
        }
        $this->FaxDetails = $faxDetails;
        return $this;
    }
    /**
     * Add item to FaxDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentDispositionDetail
     */
    public function addToFaxDetails(\NicholasCreativeMedia\FedExPHP\Structs\FaxDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail) {
            throw new \InvalidArgumentException(sprintf('The FaxDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FaxDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FaxDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDocumentDispositionDetail
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
