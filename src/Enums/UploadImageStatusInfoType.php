<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for UploadImageStatusInfoType Enums
 * @subpackage Enumerations
 */
class UploadImageStatusInfoType
{
    /**
     * Constant for value 'IMAGE_EXCEEDS_MAX_RESOLUTION'
     * @return string 'IMAGE_EXCEEDS_MAX_RESOLUTION'
     */
    const VALUE_IMAGE_EXCEEDS_MAX_RESOLUTION = 'IMAGE_EXCEEDS_MAX_RESOLUTION';
    /**
     * Constant for value 'IMAGE_EXCEEDS_MAX_SIZE'
     * @return string 'IMAGE_EXCEEDS_MAX_SIZE'
     */
    const VALUE_IMAGE_EXCEEDS_MAX_SIZE = 'IMAGE_EXCEEDS_MAX_SIZE';
    /**
     * Constant for value 'IMAGE_FAILED_VIRUS_CHECK'
     * @return string 'IMAGE_FAILED_VIRUS_CHECK'
     */
    const VALUE_IMAGE_FAILED_VIRUS_CHECK = 'IMAGE_FAILED_VIRUS_CHECK';
    /**
     * Constant for value 'IMAGE_ID_INVALID'
     * @return string 'IMAGE_ID_INVALID'
     */
    const VALUE_IMAGE_ID_INVALID = 'IMAGE_ID_INVALID';
    /**
     * Constant for value 'IMAGE_ID_MISSING'
     * @return string 'IMAGE_ID_MISSING'
     */
    const VALUE_IMAGE_ID_MISSING = 'IMAGE_ID_MISSING';
    /**
     * Constant for value 'IMAGE_MISSING'
     * @return string 'IMAGE_MISSING'
     */
    const VALUE_IMAGE_MISSING = 'IMAGE_MISSING';
    /**
     * Constant for value 'IMAGE_TYPE_INVALID'
     * @return string 'IMAGE_TYPE_INVALID'
     */
    const VALUE_IMAGE_TYPE_INVALID = 'IMAGE_TYPE_INVALID';
    /**
     * Constant for value 'IMAGE_TYPE_MISSING'
     * @return string 'IMAGE_TYPE_MISSING'
     */
    const VALUE_IMAGE_TYPE_MISSING = 'IMAGE_TYPE_MISSING';
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
     * @uses self::VALUE_IMAGE_EXCEEDS_MAX_RESOLUTION
     * @uses self::VALUE_IMAGE_EXCEEDS_MAX_SIZE
     * @uses self::VALUE_IMAGE_FAILED_VIRUS_CHECK
     * @uses self::VALUE_IMAGE_ID_INVALID
     * @uses self::VALUE_IMAGE_ID_MISSING
     * @uses self::VALUE_IMAGE_MISSING
     * @uses self::VALUE_IMAGE_TYPE_INVALID
     * @uses self::VALUE_IMAGE_TYPE_MISSING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IMAGE_EXCEEDS_MAX_RESOLUTION,
            self::VALUE_IMAGE_EXCEEDS_MAX_SIZE,
            self::VALUE_IMAGE_FAILED_VIRUS_CHECK,
            self::VALUE_IMAGE_ID_INVALID,
            self::VALUE_IMAGE_ID_MISSING,
            self::VALUE_IMAGE_MISSING,
            self::VALUE_IMAGE_TYPE_INVALID,
            self::VALUE_IMAGE_TYPE_MISSING,
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
