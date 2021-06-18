<?php
declare(strict_types=1);

namespace Sample\Purchase\Usecase;

final class BuyItems
{
    public function __construct(
        private PayMoney $payMoney
    ) {
    }

    public function run()
    {
        $this->payMoney->run();
    }
}
