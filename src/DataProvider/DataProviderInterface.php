<?php declare(strict_types=1);

namespace App\DataProvider;

use App\Dto\ExchangeRateDto;

interface DataProviderInterface
{
    /**
     * @return array|ExchangeRateDto[]
     */
    public function fetchExchangeRate(): array;
}
