<?php declare(strict_types=1);

namespace App\Exchanger;

use App\Entity\Currency;

class EcbExchanger implements ExchangerInterface
{
    public function calculate(Currency $from, Currency $to, float $sum): float
    {
        // TODO: Implement calculate() method.
    }
}