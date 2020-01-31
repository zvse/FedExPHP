<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDetail Structs
 * @subpackage Structs
 */
class UserDetail extends AbstractStructBase
{
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UserId;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The UniqueUserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UniqueUserId;
    /**
     * Constructor method for UserDetail
     * @uses UserDetail::setUserId()
     * @uses UserDetail::setPassword()
     * @uses UserDetail::setUniqueUserId()
     * @param string $userId
     * @param string $password
     * @param string $uniqueUserId
     */
    public function __construct($userId = null, $password = null, $uniqueUserId = null)
    {
        $this
            ->setUserId($userId)
            ->setPassword($password)
            ->setUniqueUserId($uniqueUserId);
    }
    /**
     * Get UserId value
     * @return string|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \CommerceFedEx\FedExPHP\Structs\UserDetail
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \CommerceFedEx\FedExPHP\Structs\UserDetail
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get UniqueUserId value
     * @return string|null
     */
    public function getUniqueUserId()
    {
        return $this->UniqueUserId;
    }
    /**
     * Set UniqueUserId value
     * @param string $uniqueUserId
     * @return \CommerceFedEx\FedExPHP\Structs\UserDetail
     */
    public function setUniqueUserId($uniqueUserId = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueUserId) && !is_string($uniqueUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniqueUserId)), __LINE__);
        }
        $this->UniqueUserId = $uniqueUserId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\UserDetail
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
