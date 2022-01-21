<?php declare(strict_types=1);

namespace App\Exchanger;

class ExchangerFactory
{
    public function __construct(private string $sourceType)
    {
    }

    public function createExchanger(): ExchangerInterface
    {
        if ($this->sourceType === 'CBR') {
            return new CbrExchanger;
        }

        if ($this->sourceType === 'ECB') {
            return new EcbExchanger;
        }
    }
}
