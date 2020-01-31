<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetrievedArtifact Structs
 * @subpackage Structs
 */
class RetrievedArtifact extends AbstractStructBase
{
    /**
     * The AccessReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccessReference;
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of artifact.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the format of the artifact.
     * - minOccurs: 0
     * @var string
     */
    public $Format;
    /**
     * The FormatSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the schema or specific format definition used for the artifact.
     * - minOccurs: 0
     * @var string
     */
    public $FormatSpecification;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a reference to the artifact that follows the naming convention defined for file storage.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceId;
    /**
     * The Parts
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \CommerceFedEx\FedExPHP\Structs\ArtifactPart[]
     */
    public $Parts;
    /**
     * Constructor method for RetrievedArtifact
     * @uses RetrievedArtifact::setAccessReference()
     * @uses RetrievedArtifact::setHighestSeverity()
     * @uses RetrievedArtifact::setNotifications()
     * @uses RetrievedArtifact::setType()
     * @uses RetrievedArtifact::setFormat()
     * @uses RetrievedArtifact::setFormatSpecification()
     * @uses RetrievedArtifact::setReferenceId()
     * @uses RetrievedArtifact::setParts()
     * @param string $accessReference
     * @param string $highestSeverity
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @param string $type
     * @param string $format
     * @param string $formatSpecification
     * @param string $referenceId
     * @param \CommerceFedEx\FedExPHP\Structs\ArtifactPart[] $parts
     */
    public function __construct($accessReference = null, $highestSeverity = null, array $notifications = array(), $type = null, $format = null, $formatSpecification = null, $referenceId = null, array $parts = array())
    {
        $this
            ->setAccessReference($accessReference)
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setType($type)
            ->setFormat($format)
            ->setFormatSpecification($formatSpecification)
            ->setReferenceId($referenceId)
            ->setParts($parts);
    }
    /**
     * Get AccessReference value
     * @return string|null
     */
    public function getAccessReference()
    {
        return $this->AccessReference;
    }
    /**
     * Set AccessReference value
     * @param string $accessReference
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setAccessReference($accessReference = null)
    {
        // validation for constraint: string
        if (!is_null($accessReference) && !is_string($accessReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessReference)), __LINE__);
        }
        $this->AccessReference = $accessReference;
        return $this;
    }
    /**
     * Get HighestSeverity value
     * @return string|null
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \CommerceFedEx\FedExPHP\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \CommerceFedEx\FedExPHP\Structs\Notification[]|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification[] $notifications
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $retrievedArtifactNotificationsItem) {
            // validation for constraint: itemType
            if (!$retrievedArtifactNotificationsItem instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($retrievedArtifactNotificationsItem) ? get_class($retrievedArtifactNotificationsItem) : gettype($retrievedArtifactNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\Notification $item
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function addToNotifications(\CommerceFedEx\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \CommerceFedEx\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \CommerceFedEx\FedExPHP\Enums\ArtifactType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ArtifactType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ArtifactType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \CommerceFedEx\FedExPHP\Enums\ArtifactType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @uses \CommerceFedEx\FedExPHP\Enums\ArtifactFormatType::valueIsValid()
     * @uses \CommerceFedEx\FedExPHP\Enums\ArtifactFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $format
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setFormat($format = null)
    {
        // validation for constraint: enumeration
        if (!\CommerceFedEx\FedExPHP\Enums\ArtifactFormatType::valueIsValid($format)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $format, implode(', ', \CommerceFedEx\FedExPHP\Enums\ArtifactFormatType::getValidValues())), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
    /**
     * Get FormatSpecification value
     * @return string|null
     */
    public function getFormatSpecification()
    {
        return $this->FormatSpecification;
    }
    /**
     * Set FormatSpecification value
     * @param string $formatSpecification
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setFormatSpecification($formatSpecification = null)
    {
        // validation for constraint: string
        if (!is_null($formatSpecification) && !is_string($formatSpecification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formatSpecification)), __LINE__);
        }
        $this->FormatSpecification = $formatSpecification;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param string $referenceId
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: string
        if (!is_null($referenceId) && !is_string($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceId)), __LINE__);
        }
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Get Parts value
     * @return \CommerceFedEx\FedExPHP\Structs\ArtifactPart[]|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ArtifactPart[] $parts
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function setParts(array $parts = array())
    {
        foreach ($parts as $retrievedArtifactPartsItem) {
            // validation for constraint: itemType
            if (!$retrievedArtifactPartsItem instanceof \CommerceFedEx\FedExPHP\Structs\ArtifactPart) {
                throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \CommerceFedEx\FedExPHP\Structs\ArtifactPart, "%s" given', is_object($retrievedArtifactPartsItem) ? get_class($retrievedArtifactPartsItem) : gettype($retrievedArtifactPartsItem)), __LINE__);
            }
        }
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Add item to Parts value
     * @throws \InvalidArgumentException
     * @param \CommerceFedEx\FedExPHP\Structs\ArtifactPart $item
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
     */
    public function addToParts(\CommerceFedEx\FedExPHP\Structs\ArtifactPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \CommerceFedEx\FedExPHP\Structs\ArtifactPart) {
            throw new \InvalidArgumentException(sprintf('The Parts property can only contain items of \CommerceFedEx\FedExPHP\Structs\ArtifactPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Parts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \CommerceFedEx\FedExPHP\Structs\RetrievedArtifact
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
