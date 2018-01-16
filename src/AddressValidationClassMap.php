<?php

namespace CommerceFedEx\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class AddressValidationClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Address' => '\\CommerceFedEx\\FedExPHP\\Structs\\Address',
            'AddressAttribute' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddressAttribute',
            'AddressToValidate' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddressToValidate',
            'AddressValidationReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddressValidationReply',
            'AddressValidationRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddressValidationRequest',
            'AddressValidationResult' => '\\CommerceFedEx\\FedExPHP\\Structs\\AddressValidationResult',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'Contact' => '\\CommerceFedEx\\FedExPHP\\Structs\\Contact',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'ParsedAddressPartsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ParsedAddressPartsDetail',
            'ParsedPostalCodeDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ParsedPostalCodeDetail',
            'ParsedStreetLineDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ParsedStreetLineDetail',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
