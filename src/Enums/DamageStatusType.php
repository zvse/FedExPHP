<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for DamageStatusType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the damage status of a package.
 * @subpackage Enumerations
 */
class DamageStatusType
{
    /**
     * Constant for value 'DAMAGE_KNOWN'
     * @return string 'DAMAGE_KNOWN'
     */
    const VALUE_DAMAGE_KNOWN = 'DAMAGE_KNOWN';
    /**
     * Constant for value 'NO_KNOWN_DAMAGE'
     * @return string 'NO_KNOWN_DAMAGE'
     */
    const VALUE_NO_KNOWN_DAMAGE = 'NO_KNOWN_DAMAGE';
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
     * @uses self::VALUE_DAMAGE_KNOWN
     * @uses self::VALUE_NO_KNOWN_DAMAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAMAGE_KNOWN,
            self::VALUE_NO_KNOWN_DAMAGE,
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
