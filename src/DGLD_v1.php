<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class DGLD_v1
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
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'ListDangerousGoodsDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ListDangerousGoodsDetail',
            'ListDangerousGoodsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\ListDangerousGoodsReply',
            'ListDangerousGoodsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\ListDangerousGoodsRequest',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
