<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReprintShippingDocumentsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ReprintShippingDocumentsRequest
 * @subpackage Structs
 */
class ReprintShippingDocumentsRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id of the package for which documents are being asked to be reprinted.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId
     */
    public $TrackingId;
    /**
     * The ShipmentCreatorAccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the account number that was used to create the shipment containing the supplied trackingId.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentCreatorAccountNumber;
    /**
     * The ShipmentCreatorMeterNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the meter number that was used to create the shipment containing the supplied trackingId.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentCreatorMeterNumber;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to reprint a shipping label.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * Constructor method for ReprintShippingDocumentsRequest
     * @uses ReprintShippingDocumentsRequest::setWebAuthenticationDetail()
     * @uses ReprintShippingDocumentsRequest::setClientDetail()
     * @uses ReprintShippingDocumentsRequest::setVersion()
     * @uses ReprintShippingDocumentsRequest::setTransactionDetail()
     * @uses ReprintShippingDocumentsRequest::setTrackingId()
     * @uses ReprintShippingDocumentsRequest::setShipmentCreatorAccountNumber()
     * @uses ReprintShippingDocumentsRequest::setShipmentCreatorMeterNumber()
     * @uses ReprintShippingDocumentsRequest::setLabelSpecification()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId
     * @param string $shipmentCreatorAccountNumber
     * @param string $shipmentCreatorMeterNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId = null, $shipmentCreatorAccountNumber = null, $shipmentCreatorMeterNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setTrackingId($trackingId)
            ->setShipmentCreatorAccountNumber($shipmentCreatorAccountNumber)
            ->setShipmentCreatorMeterNumber($shipmentCreatorMeterNumber)
            ->setLabelSpecification($labelSpecification);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setWebAuthenticationDetail(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setClientDetail(\NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setTrackingId(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Get ShipmentCreatorAccountNumber value
     * @return string|null
     */
    public function getShipmentCreatorAccountNumber()
    {
        return $this->ShipmentCreatorAccountNumber;
    }
    /**
     * Set ShipmentCreatorAccountNumber value
     * @param string $shipmentCreatorAccountNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setShipmentCreatorAccountNumber($shipmentCreatorAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentCreatorAccountNumber) && !is_string($shipmentCreatorAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentCreatorAccountNumber)), __LINE__);
        }
        $this->ShipmentCreatorAccountNumber = $shipmentCreatorAccountNumber;
        return $this;
    }
    /**
     * Get ShipmentCreatorMeterNumber value
     * @return string|null
     */
    public function getShipmentCreatorMeterNumber()
    {
        return $this->ShipmentCreatorMeterNumber;
    }
    /**
     * Set ShipmentCreatorMeterNumber value
     * @param string $shipmentCreatorMeterNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setShipmentCreatorMeterNumber($shipmentCreatorMeterNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentCreatorMeterNumber) && !is_string($shipmentCreatorMeterNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentCreatorMeterNumber)), __LINE__);
        }
        $this->ShipmentCreatorMeterNumber = $shipmentCreatorMeterNumber;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
     */
    public function setLabelSpecification(\NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest
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
