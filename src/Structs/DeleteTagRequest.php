<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTagRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:DeleteTagRequest
 * @subpackage Structs
 */
class DeleteTagRequest extends AbstractStructBase
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
     * The Payment
     * Meta informations extracted from the WSDL
     * - documentation: If the original ProcessTagRequest specified third-party payment, then the delete request must contain the same pay type and payor account number for security purposes.
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public $Payment;
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The DispatchLocationId
     * Meta informations extracted from the WSDL
     * - documentation: Only used for tags which had FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $DispatchLocationId;
    /**
     * The DispatchDate
     * Meta informations extracted from the WSDL
     * - documentation: Only used for tags which had FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $DispatchDate;
    /**
     * Constructor method for DeleteTagRequest
     * @uses DeleteTagRequest::setWebAuthenticationDetail()
     * @uses DeleteTagRequest::setClientDetail()
     * @uses DeleteTagRequest::setVersion()
     * @uses DeleteTagRequest::setPayment()
     * @uses DeleteTagRequest::setConfirmationNumber()
     * @uses DeleteTagRequest::setTransactionDetail()
     * @uses DeleteTagRequest::setDispatchLocationId()
     * @uses DeleteTagRequest::setDispatchDate()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \CommerceFedEx\FedExPHP\Structs\VersionId $version
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $payment
     * @param string $confirmationNumber
     * @param \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $dispatchLocationId
     * @param string $dispatchDate
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \CommerceFedEx\FedExPHP\Structs\ClientDetail $clientDetail = null, \CommerceFedEx\FedExPHP\Structs\VersionId $version = null, \CommerceFedEx\FedExPHP\Structs\Payment $payment = null, $confirmationNumber = null, \CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $dispatchLocationId = null, $dispatchDate = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setPayment($payment)
            ->setConfirmationNumber($confirmationNumber)
            ->setTransactionDetail($transactionDetail)
            ->setDispatchLocationId($dispatchLocationId)
            ->setDispatchDate($dispatchDate);
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
     */
    public function setVersion(\CommerceFedEx\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get Payment value
     * @return \CommerceFedEx\FedExPHP\Structs\Payment
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \CommerceFedEx\FedExPHP\Structs\Payment $payment
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
     */
    public function setPayment(\CommerceFedEx\FedExPHP\Structs\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
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
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
     */
    public function setTransactionDetail(\CommerceFedEx\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get DispatchLocationId value
     * @return string|null
     */
    public function getDispatchLocationId()
    {
        return $this->DispatchLocationId;
    }
    /**
     * Set DispatchLocationId value
     * @param string $dispatchLocationId
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
     */
    public function setDispatchLocationId($dispatchLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($dispatchLocationId) && !is_string($dispatchLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dispatchLocationId)), __LINE__);
        }
        $this->DispatchLocationId = $dispatchLocationId;
        return $this;
    }
    /**
     * Get DispatchDate value
     * @return string|null
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }
    /**
     * Set DispatchDate value
     * @param string $dispatchDate
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
     */
    public function setDispatchDate($dispatchDate = null)
    {
        // validation for constraint: string
        if (!is_null($dispatchDate) && !is_string($dispatchDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dispatchDate)), __LINE__);
        }
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DeleteTagRequest
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
