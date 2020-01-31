<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for DangerousGoodsDescriptorType Enums
 * Meta informations extracted from the WSDL
 * - documentation: FEDEX INTERNAL USE ONLY: Describes the characteristics of the dangerous goods inferred from the commodity data.
 * @subpackage Enumerations
 */
class DangerousGoodsDescriptorType
{
    /**
     * Constant for value 'ALCOHOLIC_BEVERAGE'
     * @return string 'ALCOHOLIC_BEVERAGE'
     */
    const VALUE_ALCOHOLIC_BEVERAGE = 'ALCOHOLIC_BEVERAGE';
    /**
     * Constant for value 'DRY_ICE'
     * @return string 'DRY_ICE'
     */
    const VALUE_DRY_ICE = 'DRY_ICE';
    /**
     * Constant for value 'EMERGENCY_CONTACT_PHONE_REQUIRED'
     * @return string 'EMERGENCY_CONTACT_PHONE_REQUIRED'
     */
    const VALUE_EMERGENCY_CONTACT_PHONE_REQUIRED = 'EMERGENCY_CONTACT_PHONE_REQUIRED';
    /**
     * Constant for value 'EXCEPTED_QUANTITIES'
     * @return string 'EXCEPTED_QUANTITIES'
     */
    const VALUE_EXCEPTED_QUANTITIES = 'EXCEPTED_QUANTITIES';
    /**
     * Constant for value 'INFECTIOUS_SUBSTANCE'
     * @return string 'INFECTIOUS_SUBSTANCE'
     */
    const VALUE_INFECTIOUS_SUBSTANCE = 'INFECTIOUS_SUBSTANCE';
    /**
     * Constant for value 'RADIOACTIVE'
     * @return string 'RADIOACTIVE'
     */
    const VALUE_RADIOACTIVE = 'RADIOACTIVE';
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
     * @uses self::VALUE_ALCOHOLIC_BEVERAGE
     * @uses self::VALUE_DRY_ICE
     * @uses self::VALUE_EMERGENCY_CONTACT_PHONE_REQUIRED
     * @uses self::VALUE_EXCEPTED_QUANTITIES
     * @uses self::VALUE_INFECTIOUS_SUBSTANCE
     * @uses self::VALUE_RADIOACTIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALCOHOLIC_BEVERAGE,
            self::VALUE_DRY_ICE,
            self::VALUE_EMERGENCY_CONTACT_PHONE_REQUIRED,
            self::VALUE_EXCEPTED_QUANTITIES,
            self::VALUE_INFECTIOUS_SUBSTANCE,
            self::VALUE_RADIOACTIVE,
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
