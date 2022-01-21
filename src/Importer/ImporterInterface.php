<?php declare(strict_types=1);

namespace App\Importer;

use App\Dto\ExchangeRateDto;

interface ImporterInterface
{
    public function import(): ExchangeRateDto;
}
