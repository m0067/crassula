<?php declare(strict_types=1);

namespace App\Importer;

use App\DataProvider\Api\CbrApi;
use App\Dto\ExchangeRateDto;
use App\Service\ExchangeRateManipulation;

class CbrImporter implements ImporterInterface
{
    public function __construct(
        private CbrApi $dataProvider,
        private ExchangeRateManipulation $exchangeRateManipulation
    ) {
    }

    public function import(): ExchangeRateDto
    {
        //TODO
        //$this->dataProvider->fetchExchangeRate();
        //$this->exchangeRateManipulation->upsert();
    }
}
