<?php

namespace CommerceFedEx\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'ASYNCService_v4.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \CommerceFedEx\FedExPHP\ASYNCClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \CommerceFedEx\FedExPHP\Structs\VersionId('async',4,0,0);
    }
    /**
     * Method to call the operation originally named retrieveJobResults
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest $retrieveJobResultsRequest
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply|bool
     */
    public function retrieveJobResults(\CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsRequest $retrieveJobResultsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveJobResults($retrieveJobResultsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \CommerceFedEx\FedExPHP\Structs\RetrieveJobResultsReply
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
