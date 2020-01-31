<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePackagesFromOpenShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - documentation: This request removes one or more packages from an open shipment.
 * - type: ns:DeletePackagesFromOpenShipmentRequest
 * @subpackage Structs
 */
class DeletePackagesFromOpenShipmentRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - documentation: Customer-assigned identifier for this shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).
     * - minOccurs: 0
     * @var string
     */
    public $Index;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: One or more tracking IDs, each of which is to be removed from the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * Constructor method for DeletePackagesFromOpenShipmentRequest
     * @uses DeletePackagesFromOpenShipmentRequest::setWebAuthenticationDetail()
     * @uses DeletePackagesFromOpenShipmentRequest::setClientDetail()
     * @uses DeletePackagesFromOpenShipmentRequest::setVersion()
     * @uses DeletePackagesFromOpenShipmentRequest::setTransactionDetail()
     * @uses DeletePackagesFromOpenShipmentRequest::setIndex()
     * @uses DeletePackagesFromOpenShipmentRequest::setTrackingIds()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $index
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId[] $trackingIds
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $index = null, array $trackingIds = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setIndex($index)
            ->setTrackingIds($trackingIds);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
     */
    public function setWebAuthenticationDetail(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
     */
    public function setClientDetail(\CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \CommerceFedEx\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
     */
    public function setVersion(\CommerceFedEx\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \CommerceFedEx\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get Index value
     * @return string|null
     */
    public function getIndex()
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param string $index
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        $this->Index = $index;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \CommerceFedEx\FedExPHP\Structs\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId[] $trackingIds
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $deletePackagesFromOpenShipmentRequestTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$deletePackagesFromOpenShipmentRequestTrackingIdsItem instanceof \CommerceFedEx\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingId, "%s" given', is_object($deletePackagesFromOpenShipmentRequestTrackingIdsItem) ? get_class($deletePackagesFromOpenShipmentRequestTrackingIdsItem) : gettype($deletePackagesFromOpenShipmentRequestTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\TrackingId $item
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
     */
    public function addToTrackingIds(\CommerceFedEx\FedExPHP\Structs\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \CommerceFedEx\FedExPHP\Structs\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingIds[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest
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
