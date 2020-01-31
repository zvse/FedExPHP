<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebAuthenticationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Used in authentication of the sender's identity.
 * @subpackage Structs
 */
class WebAuthenticationDetail extends AbstractStructBase
{
    /**
     * The UserCredential
     * Meta informations extracted from the WSDL
     * - documentation: Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     * - minOccurs: 1
     * @var \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential
     */
    public $UserCredential;
    /**
     * The ParentCredential
     * Meta informations extracted from the WSDL
     * - documentation: This was renamed from cspCredential.
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential
     */
    public $ParentCredential;
    /**
     * Constructor method for WebAuthenticationDetail
     * @uses WebAuthenticationDetail::setUserCredential()
     * @uses WebAuthenticationDetail::setParentCredential()
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $userCredential
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $parentCredential
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $userCredential = null, \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $parentCredential = null)
    {
        $this
            ->setUserCredential($userCredential)
            ->setParentCredential($parentCredential);
    }
    /**
     * Get UserCredential value
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential
     */
    public function getUserCredential()
    {
        return $this->UserCredential;
    }
    /**
     * Set UserCredential value
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $userCredential
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function setUserCredential(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $userCredential = null)
    {
        $this->UserCredential = $userCredential;
        return $this;
    }
    /**
     * Get ParentCredential value
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential|null
     */
    public function getParentCredential()
    {
        return $this->ParentCredential;
    }
    /**
     * Set ParentCredential value
     * @param \CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $parentCredential
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function setParentCredential(\CommerceFedEx\FedExPHP\Structs\WebAuthenticationCredential $parentCredential = null)
    {
        $this->ParentCredential = $parentCredential;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\WebAuthenticationDetail
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
