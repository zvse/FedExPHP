<?php

namespace CommerceFedEx\FedExPHP\Enums;

/**
 * This class stands for UploadDocumentStatusInfoType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Each of these values identifies a specific reason why a document or reference could not be uploaded or associated with a shipment.
 * @subpackage Enumerations
 */
class UploadDocumentStatusInfoType
{
    /**
     * Constant for value 'DOCUMENT_CONTENT_FAILED_VIRUS_CHECK'
     * @return string 'DOCUMENT_CONTENT_FAILED_VIRUS_CHECK'
     */
    const VALUE_DOCUMENT_CONTENT_FAILED_VIRUS_CHECK = 'DOCUMENT_CONTENT_FAILED_VIRUS_CHECK';
    /**
     * Constant for value 'DOCUMENT_CONTENT_MISSING'
     * @return string 'DOCUMENT_CONTENT_MISSING'
     */
    const VALUE_DOCUMENT_CONTENT_MISSING = 'DOCUMENT_CONTENT_MISSING';
    /**
     * Constant for value 'DOCUMENT_CONTENT_TOO_LARGE'
     * @return string 'DOCUMENT_CONTENT_TOO_LARGE'
     */
    const VALUE_DOCUMENT_CONTENT_TOO_LARGE = 'DOCUMENT_CONTENT_TOO_LARGE';
    /**
     * Constant for value 'DOCUMENT_FILE_NAME_MISSING'
     * @return string 'DOCUMENT_FILE_NAME_MISSING'
     */
    const VALUE_DOCUMENT_FILE_NAME_MISSING = 'DOCUMENT_FILE_NAME_MISSING';
    /**
     * Constant for value 'DOCUMENT_FORMAT_NOT_SUPPORTED'
     * @return string 'DOCUMENT_FORMAT_NOT_SUPPORTED'
     */
    const VALUE_DOCUMENT_FORMAT_NOT_SUPPORTED = 'DOCUMENT_FORMAT_NOT_SUPPORTED';
    /**
     * Constant for value 'DOCUMENT_ID_INVALID'
     * @return string 'DOCUMENT_ID_INVALID'
     */
    const VALUE_DOCUMENT_ID_INVALID = 'DOCUMENT_ID_INVALID';
    /**
     * Constant for value 'DOCUMENT_ID_MISSING'
     * @return string 'DOCUMENT_ID_MISSING'
     */
    const VALUE_DOCUMENT_ID_MISSING = 'DOCUMENT_ID_MISSING';
    /**
     * Constant for value 'DOCUMENT_TYPE_INVALID'
     * @return string 'DOCUMENT_TYPE_INVALID'
     */
    const VALUE_DOCUMENT_TYPE_INVALID = 'DOCUMENT_TYPE_INVALID';
    /**
     * Constant for value 'DOCUMENT_TYPE_MISSING'
     * @return string 'DOCUMENT_TYPE_MISSING'
     */
    const VALUE_DOCUMENT_TYPE_MISSING = 'DOCUMENT_TYPE_MISSING';
    /**
     * Constant for value 'DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD'
     * @return string 'DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD'
     */
    const VALUE_DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD = 'DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD';
    /**
     * Constant for value 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION'
     * @return string 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION'
     */
    const VALUE_ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION = 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION';
    /**
     * Constant for value 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN'
     * @return string 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN'
     */
    const VALUE_ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN = 'ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN';
    /**
     * Constant for value 'EXPIRATION_DATE_INVALID'
     * @return string 'EXPIRATION_DATE_INVALID'
     */
    const VALUE_EXPIRATION_DATE_INVALID = 'EXPIRATION_DATE_INVALID';
    /**
     * Constant for value 'FILENAME_TOO_LONG'
     * @return string 'FILENAME_TOO_LONG'
     */
    const VALUE_FILENAME_TOO_LONG = 'FILENAME_TOO_LONG';
    /**
     * Constant for value 'UNABLE_TO_PROCESS_DOCUMENT'
     * @return string 'UNABLE_TO_PROCESS_DOCUMENT'
     */
    const VALUE_UNABLE_TO_PROCESS_DOCUMENT = 'UNABLE_TO_PROCESS_DOCUMENT';
    /**
     * Constant for value 'UPLOAD_NOT_ATTEMPTED'
     * @return string 'UPLOAD_NOT_ATTEMPTED'
     */
    const VALUE_UPLOAD_NOT_ATTEMPTED = 'UPLOAD_NOT_ATTEMPTED';
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
     * @uses self::VALUE_DOCUMENT_CONTENT_FAILED_VIRUS_CHECK
     * @uses self::VALUE_DOCUMENT_CONTENT_MISSING
     * @uses self::VALUE_DOCUMENT_CONTENT_TOO_LARGE
     * @uses self::VALUE_DOCUMENT_FILE_NAME_MISSING
     * @uses self::VALUE_DOCUMENT_FORMAT_NOT_SUPPORTED
     * @uses self::VALUE_DOCUMENT_ID_INVALID
     * @uses self::VALUE_DOCUMENT_ID_MISSING
     * @uses self::VALUE_DOCUMENT_TYPE_INVALID
     * @uses self::VALUE_DOCUMENT_TYPE_MISSING
     * @uses self::VALUE_DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD
     * @uses self::VALUE_ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION
     * @uses self::VALUE_ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN
     * @uses self::VALUE_EXPIRATION_DATE_INVALID
     * @uses self::VALUE_FILENAME_TOO_LONG
     * @uses self::VALUE_UNABLE_TO_PROCESS_DOCUMENT
     * @uses self::VALUE_UPLOAD_NOT_ATTEMPTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DOCUMENT_CONTENT_FAILED_VIRUS_CHECK,
            self::VALUE_DOCUMENT_CONTENT_MISSING,
            self::VALUE_DOCUMENT_CONTENT_TOO_LARGE,
            self::VALUE_DOCUMENT_FILE_NAME_MISSING,
            self::VALUE_DOCUMENT_FORMAT_NOT_SUPPORTED,
            self::VALUE_DOCUMENT_ID_INVALID,
            self::VALUE_DOCUMENT_ID_MISSING,
            self::VALUE_DOCUMENT_TYPE_INVALID,
            self::VALUE_DOCUMENT_TYPE_MISSING,
            self::VALUE_DOCUMENT_TYPE_NOT_ALLOWED_FOR_ETD,
            self::VALUE_ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_DESTINATION,
            self::VALUE_ELECTRONIC_CLEARANCE_NOT_ALLOWED_AT_ORIGIN,
            self::VALUE_EXPIRATION_DATE_INVALID,
            self::VALUE_FILENAME_TOO_LONG,
            self::VALUE_UNABLE_TO_PROCESS_DOCUMENT,
            self::VALUE_UPLOAD_NOT_ATTEMPTED,
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
