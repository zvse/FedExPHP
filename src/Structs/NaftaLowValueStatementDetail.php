<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaLowValueStatementDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the information necessary for printing the NAFTA Low Value statement on customs documentation.
 * @subpackage Structs
 */
class NaftaLowValueStatementDetail extends AbstractStructBase
{
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the NAFTA statement role.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * Constructor method for NaftaLowValueStatementDetail
     * @uses NaftaLowValueStatementDetail::setRole()
     * @param string $role
     */
    public function __construct($role = null)
    {
        $this
            ->setRole($role);
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomsRoleType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\CustomsRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaLowValueStatementDetail
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\CustomsRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \CommerceFedEx\FedExPHP\Enums\CustomsRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\NaftaLowValueStatementDetail
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
