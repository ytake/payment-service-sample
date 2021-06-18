<?php

declare(strict_types=1);

namespace Sample\Customer\Model;

use Sample\Customer\ValueObject\CustomerIdentifier;

interface UserModel
{
    /**
     * @return CustomerIdentifier
     */
    public function getIdentifier(): CustomerIdentifier;
}
