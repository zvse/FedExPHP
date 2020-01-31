<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class OpenshipService extends AbstractSoapClientBase
{

    /**
     * RateService constructor.
     * @param array $wsdlOptions
     * @param bool $resetSoapClient
     * @param bool $beta
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $mode = 'test')
    {
        if ($mode === false) $mode = 'test';
        if ($mode === true) $mode = 'live';
        $default_options = [
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'OpenshipService_v17.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\OpenshipClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('ship',17,0,0);
    }
    /**
     * Method to call the operation originally named modifyConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ModifyConsolidationRequest $modifyConsolidationRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyConsolidationReply|bool
     */
    public function modifyConsolidation(\NicholasCreativeMedia\FedExPHP\Structs\ModifyConsolidationRequest $modifyConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyConsolidation($modifyConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidateOpenShipmentRequest $validateOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidateOpenShipmentReply|bool
     */
    public function validateOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\ValidateOpenShipmentRequest $validateOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateOpenShipment($validateOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RetrieveOpenShipmentRequest $retrieveOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrieveOpenShipmentReply|bool
     */
    public function retrieveOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\RetrieveOpenShipmentRequest $retrieveOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveOpenShipment($retrieveOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOpenConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenConsolidationRequest $deleteOpenConsolidationRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenConsolidationReply|bool
     */
    public function deleteOpenConsolidation(\NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenConsolidationRequest $deleteOpenConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteOpenConsolidation($deleteOpenConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest $createConsolidationRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply|bool
     */
    public function createConsolidation(\NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationRequest $createConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createConsolidation($createConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrievePackageInOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RetrievePackageInOpenShipmentRequest $retrievePackageInOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrievePackageInOpenShipmentReply|bool
     */
    public function retrievePackageInOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\RetrievePackageInOpenShipmentRequest $retrievePackageInOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrievePackageInOpenShipment($retrievePackageInOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveConsolidatedCommodities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidatedCommoditiesRequest $retrieveConsolidatedCommoditiesRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidatedCommoditiesReply|bool
     */
    public function retrieveConsolidatedCommodities(\NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidatedCommoditiesRequest $retrieveConsolidatedCommoditiesRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveConsolidatedCommodities($retrieveConsolidatedCommoditiesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named modifyPackageInOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest $modifyPackageInOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentReply|bool
     */
    public function modifyPackageInOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentRequest $modifyPackageInOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyPackageInOpenShipment($modifyPackageInOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentReply|bool
     */
    public function deleteShipment(\NicholasCreativeMedia\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteShipment($deleteShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreateOpenShipmentRequest $createOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateOpenShipmentReply|bool
     */
    public function createOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\CreateOpenShipmentRequest $createOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createOpenShipment($createOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePendingShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest $deletePendingShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentReply|bool
     */
    public function deletePendingShipment(\NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentRequest $deletePendingShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deletePendingShipment($deletePendingShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named confirmOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConfirmOpenShipmentRequest $confirmOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmOpenShipmentReply|bool
     */
    public function confirmOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\ConfirmOpenShipmentRequest $confirmOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->confirmOpenShipment($confirmOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConfirmOpenShipmentResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\GetConfirmOpenShipmentResultsRequest $getConfirmOpenShipmentResultsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetConfirmOpenShipmentResultsReply|bool
     */
    public function getConfirmOpenShipmentResults(\NicholasCreativeMedia\FedExPHP\Structs\GetConfirmOpenShipmentResultsRequest $getConfirmOpenShipmentResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getConfirmOpenShipmentResults($getConfirmOpenShipmentResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConfirmConsolidationResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\GetConfirmConsolidationResultsRequest $getConfirmConsolidationResultsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetConfirmConsolidationResultsReply|bool
     */
    public function getConfirmConsolidationResults(\NicholasCreativeMedia\FedExPHP\Structs\GetConfirmConsolidationResultsRequest $getConfirmConsolidationResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getConfirmConsolidationResults($getConfirmConsolidationResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named modifyOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ModifyOpenShipmentRequest $modifyOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ModifyOpenShipmentReply|bool
     */
    public function modifyOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\ModifyOpenShipmentRequest $modifyOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->modifyOpenShipment($modifyOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named confirmConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest $confirmConsolidationRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationReply|bool
     */
    public function confirmConsolidation(\NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationRequest $confirmConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->confirmConsolidation($confirmConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPendingShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreateOpenShipmentRequest $createPendingShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreateOpenShipmentReply|bool
     */
    public function createPendingShipment(\NicholasCreativeMedia\FedExPHP\Structs\CreateOpenShipmentRequest $createPendingShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createPendingShipment($createPendingShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getModifyOpenShipmentResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\GetModifyOpenShipmentResultsRequest $getModifyOpenShipmentResultsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetModifyOpenShipmentResultsReply|bool
     */
    public function getModifyOpenShipmentResults(\NicholasCreativeMedia\FedExPHP\Structs\GetModifyOpenShipmentResultsRequest $getModifyOpenShipmentResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getModifyOpenShipmentResults($getModifyOpenShipmentResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePackagesFromOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest $deletePackagesFromOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeletePackagesFromOpenShipmentReply|bool
     */
    public function deletePackagesFromOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\DeletePackagesFromOpenShipmentRequest $deletePackagesFromOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deletePackagesFromOpenShipment($deletePackagesFromOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named reprintShippingDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest $reprintShippingDocumentsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply|bool
     */
    public function reprintShippingDocuments(\NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsRequest $reprintShippingDocumentsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->reprintShippingDocuments($reprintShippingDocumentsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named addPackagesToOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest $addPackagesToOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentReply|bool
     */
    public function addPackagesToOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentRequest $addPackagesToOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->addPackagesToOpenShipment($addPackagesToOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCreateOpenShipmentResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsRequest $getCreateOpenShipmentResultsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply|bool
     */
    public function getCreateOpenShipmentResults(\NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsRequest $getCreateOpenShipmentResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getCreateOpenShipmentResults($getCreateOpenShipmentResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retrieveConsolidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidationRequest $retrieveConsolidationRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidationReply|bool
     */
    public function retrieveConsolidation(\NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidationRequest $retrieveConsolidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveConsolidation($retrieveConsolidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOpenShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenShipmentRequest $deleteOpenShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenShipmentReply|bool
     */
    public function deleteOpenShipment(\NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenShipmentRequest $deleteOpenShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteOpenShipment($deleteOpenShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddPackagesToOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\ConfirmConsolidationReply|\NicholasCreativeMedia\FedExPHP\Structs\ConfirmOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\CreateConsolidationReply|\NicholasCreativeMedia\FedExPHP\Structs\CreateOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenConsolidationReply|\NicholasCreativeMedia\FedExPHP\Structs\DeleteOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\DeletePackagesFromOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\DeletePendingShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\GetConfirmConsolidationResultsReply|\NicholasCreativeMedia\FedExPHP\Structs\GetConfirmOpenShipmentResultsReply|\NicholasCreativeMedia\FedExPHP\Structs\GetCreateOpenShipmentResultsReply|\NicholasCreativeMedia\FedExPHP\Structs\GetModifyOpenShipmentResultsReply|\NicholasCreativeMedia\FedExPHP\Structs\ModifyConsolidationReply|\NicholasCreativeMedia\FedExPHP\Structs\ModifyOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\ModifyPackageInOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\ReprintShippingDocumentsReply|\NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidatedCommoditiesReply|\NicholasCreativeMedia\FedExPHP\Structs\RetrieveConsolidationReply|\NicholasCreativeMedia\FedExPHP\Structs\RetrieveOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\RetrievePackageInOpenShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\ShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\ValidateOpenShipmentReply
     */
    public function getResult()
    {
        return parent::getResult();
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
