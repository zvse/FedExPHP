<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePendingShipmentRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:DeletePendingShipmentRequest
 * @subpackage Structs
 */
class DeletePendingShipmentRequest extends AbstractStructBase
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
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - documentation: Tracking ids of the package to be deleted. The tracking ids are for the same package to support the use case where a package can have more than one type of tracking id, such as package shipped with the SmartPost service.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * Constructor method for DeletePendingShipmentRequest
     * @uses DeletePendingShipmentRequest::setWebAuthenticationDetail()
     * @uses DeletePendingShipmentRequest::setClientDetail()
     * @uses DeletePendingShipmentRequest::setVersion()
     * @uses DeletePendingShipmentRequest::setTransactionDetail()
     * @uses DeletePendingShipmentRequest::setTrackingIds()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $trackingIds = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setTrackingIds($trackingIds);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $deletePendingShipmentRequestTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$deletePendingShipmentRequestTrackingIdsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($deletePendingShipmentRequestTrackingIdsItem) ? get_class($deletePendingShipmentRequestTrackingIdsItem) : gettype($deletePendingShipmentRequestTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest
     */
    public function addToTrackingIds(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest
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
