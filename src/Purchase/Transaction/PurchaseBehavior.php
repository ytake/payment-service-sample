<?php

declare(strict_types=1);

namespace Sample\Purchase\Transaction;

/**
 * AOPを習得していない場合に、理解までが難しいため、
 * 代わりに購入動作のトランザクションを表現します
 */
interface PurchaseBehavior
{
    /**
     * @param callable $transaction
     * @return ?object
     */
    public function behavior(
        callable $transaction
    ): ?object;
}
