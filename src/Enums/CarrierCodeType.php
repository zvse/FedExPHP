<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CarrierCodeType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identification of a FedEx operating company (transportation).
 * @subpackage Enumerations
 */
class CarrierCodeType
{
    /**
     * Constant for value 'FDXE'
     * @return string 'FDXE'
     */
    const VALUE_FDXE = 'FDXE';
    /**
     * Constant for value 'FDXG'
     * @return string 'FDXG'
     */
    const VALUE_FDXG = 'FDXG';
    /**
     * Constant for value 'FXSP'
     * @return string 'FXSP'
     */
    const VALUE_FXSP = 'FXSP';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_FDXE
     * @uses self::VALUE_FDXG
     * @uses self::VALUE_FXSP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FDXE,
            self::VALUE_FDXG,
            self::VALUE_FXSP,
        );
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
