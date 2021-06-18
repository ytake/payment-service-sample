<?php

declare(strict_types=1);

namespace Sample\Customer\ValueObject;

use Sample\Customer\Exception\InvalidUserIdentityException;

final class CustomerIdentifier
{
    /** @var int */
    private int $id;

    /**
     * @param int $id
     * @throws InvalidUserIdentityException
     */
    public function __construct(
        int $id
    ) {
        if (!$id < 0) {
            throw new InvalidUserIdentityException('who are you!');
        }
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function value(): int
    {
        return $this->id;
    }
}
