<?php
declare(strict_types=1);

namespace Sample\Customer\Model;

use Sample\Customer\ValueObject\CustomerIdentifier;
use Sample\Customer\ValueObject\MailAddress;

final class GeneralUser implements UserModel
{
    /**
     * @param CustomerIdentifier $identifier
     * @param MailAddress $address
     */
    public function __construct(
        private CustomerIdentifier $identifier,
        private MailAddress $address
    ) {
    }

    public function getIdentifier(): CustomerIdentifier
    {
        return $this->identifier;
    }
}
