<?php

declare(strict_types=1);

namespace App\DataAccess\Database;

use Illuminate\Database\DatabaseManager;
use Sample\Purchase\Transaction\PurchaseBehavior;

final class DbTransaction implements PurchaseBehavior
{
    public function __construct(
        private DatabaseManager $manager
    ) {
    }

    /**
     * @param callable $transaction
     * @return object
     * @throws \Throwable
     */
    public function behavior(
        callable $transaction
    ): object {
        return $this->manager->transaction($transaction);
    }
}
