<?php

namespace Genkgo\Camt\DTO;

use Genkgo\Camt\Iban;

/**
 * Class IbanAccount
 * @package Genkgo\Camt\DTO
 */
class IbanAccount extends Account
{
    /**
     * @var Iban
     */
    private $iban;

    /**
     * @param Iban $iban
     */
    public function __construct(Iban $iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return Iban
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentification()
    {
        return (string) $this->iban;
    }
}
