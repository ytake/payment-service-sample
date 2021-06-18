<?php

declare(strict_types=1);

namespace Sample\Customer\ValueObject;

use Sample\Customer\Exception\InvalidUserEmailException;

final class MailAddress
{
    /** @var string */
    private string $email;

    /**
     * @param string $email
     * @throws InvalidUserEmailException
     */
    public function __construct(
        string $email
    ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidUserEmailException('who are you!');
        }
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->email;
    }
}
