<?php

namespace CommerceFedEx\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailedDeliveryManifestDetail Structs
 * @subpackage Structs
 */
class DetailedDeliveryManifestDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat
     */
    public $Format;
    /**
     * The ClientTimeZoneOffset
     * Meta informations extracted from the WSDL
     * - documentation: This field provides a mechanism for the client to specify their time zone offset relative to GMT. This governs the printed on time for this report. If this field is left empty, then the server time will be used. The value of this
     * field must be in the format '(+|-)[hh]:[mm]', '(+|-)[hh][mm]', '(+|-)[hh]', or 'Z' (for GMT time). An offset of zero, in addition to having the special representation 'Z', can also be stated numerically as '+00:00', '+0000', or '+00'. However, it is
     * not permitted to state it numerically with a negative sign.
     * - minOccurs: 0
     * @var string
     */
    public $ClientTimeZoneOffset;
    /**
     * Constructor method for DetailedDeliveryManifestDetail
     * @uses DetailedDeliveryManifestDetail::setFormat()
     * @uses DetailedDeliveryManifestDetail::setClientTimeZoneOffset()
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format
     * @param string $clientTimeZoneOffset
     */
    public function __construct(\CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format = null, $clientTimeZoneOffset = null)
    {
        $this
            ->setFormat($format)
            ->setClientTimeZoneOffset($clientTimeZoneOffset);
    }
    /**
     * Get Format value
     * @return \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format
     * @return \CommerceFedEx\FedExPHP\Structs\DetailedDeliveryManifestDetail
     */
    public function setFormat(\CommerceFedEx\FedExPHP\Structs\CloseDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get ClientTimeZoneOffset value
     * @return string|null
     */
    public function getClientTimeZoneOffset()
    {
        return $this->ClientTimeZoneOffset;
    }
    /**
     * Set ClientTimeZoneOffset value
     * @param string $clientTimeZoneOffset
     * @return \CommerceFedEx\FedExPHP\Structs\DetailedDeliveryManifestDetail
     */
    public function setClientTimeZoneOffset($clientTimeZoneOffset = null)
    {
        // validation for constraint: string
        if (!is_null($clientTimeZoneOffset) && !is_string($clientTimeZoneOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientTimeZoneOffset)), __LINE__);
        }
        $this->ClientTimeZoneOffset = $clientTimeZoneOffset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\DetailedDeliveryManifestDetail
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
