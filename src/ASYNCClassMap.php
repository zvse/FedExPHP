<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class ASYNCClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ArtifactPart' => '\\CommerceFedEx\\FedExPHP\\Structs\\ArtifactPart',
            'ArtifactRetrievalFilter' => '\\CommerceFedEx\\FedExPHP\\Structs\\ArtifactRetrievalFilter',
            'ClientDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\ClientDetail',
            'Localization' => '\\CommerceFedEx\\FedExPHP\\Structs\\Localization',
            'Notification' => '\\CommerceFedEx\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\CommerceFedEx\\FedExPHP\\Structs\\NotificationParameter',
            'RetrieveJobResultsReply' => '\\CommerceFedEx\\FedExPHP\\Structs\\RetrieveJobResultsReply',
            'RetrieveJobResultsRequest' => '\\CommerceFedEx\\FedExPHP\\Structs\\RetrieveJobResultsRequest',
            'RetrievedArtifact' => '\\CommerceFedEx\\FedExPHP\\Structs\\RetrievedArtifact',
            'TransactionDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\CommerceFedEx\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\CommerceFedEx\\FedExPHP\\Structs\\VersionId',
        );
    }
}
