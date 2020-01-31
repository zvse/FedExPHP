<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payor Structs
 * @subpackage Structs
 */
class Payor extends AbstractStructBase
{
    /**
     * The ResponsibleParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $ResponsibleParty;
    /**
     * The AssociatedAccounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount[]
     */
    public $AssociatedAccounts;
    /**
     * Constructor method for Payor
     * @uses Payor::setResponsibleParty()
     * @uses Payor::setAssociatedAccounts()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount[] $associatedAccounts
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty = null, array $associatedAccounts = array())
    {
        $this
            ->setResponsibleParty($responsibleParty)
            ->setAssociatedAccounts($associatedAccounts);
    }
    /**
     * Get ResponsibleParty value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getResponsibleParty()
    {
        return $this->ResponsibleParty;
    }
    /**
     * Set ResponsibleParty value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payor
     */
    public function setResponsibleParty(\NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty = null)
    {
        $this->ResponsibleParty = $responsibleParty;
        return $this;
    }
    /**
     * Get AssociatedAccounts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount[]|null
     */
    public function getAssociatedAccounts()
    {
        return $this->AssociatedAccounts;
    }
    /**
     * Set AssociatedAccounts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount[] $associatedAccounts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payor
     */
    public function setAssociatedAccounts(array $associatedAccounts = array())
    {
        foreach ($associatedAccounts as $payorAssociatedAccountsItem) {
            // validation for constraint: itemType
            if (!$payorAssociatedAccountsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount) {
                throw new \InvalidArgumentException(sprintf('The AssociatedAccounts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount, "%s" given', is_object($payorAssociatedAccountsItem) ? get_class($payorAssociatedAccountsItem) : gettype($payorAssociatedAccountsItem)), __LINE__);
            }
        }
        $this->AssociatedAccounts = $associatedAccounts;
        return $this;
    }
    /**
     * Add item to AssociatedAccounts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payor
     */
    public function addToAssociatedAccounts(\NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount) {
            throw new \InvalidArgumentException(sprintf('The AssociatedAccounts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedAccounts[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payor
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
