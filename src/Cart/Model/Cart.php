<?php
declare(strict_types=1);

namespace Sample\Cart\Model;

use Sample\Customer\Model\UserModel;

final class Cart
{
    public function __construct(
        private UserModel $user
    ) {
    }
}
