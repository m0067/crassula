<?php declare(strict_types=1);

namespace App\Importer;

use App\DataProvider\Api\EcbApi;
use App\Dto\ExchangeRateDto;
use App\Service\ExchangeRateManipulation;

class EcbImporter implements ImporterInterface
{
    public function __construct(
        private EcbApi $dataProvider,
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
