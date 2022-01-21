<?php declare(strict_types=1);

namespace App\Service;

use App\Dto\ExchangeRateDto;
use App\Repository\CurrencyRepository;
use App\Repository\ExchangeRateRepository;
use App\Repository\SourceRepository;
use Doctrine\ORM\EntityManagerInterface;

class ExchangeRateManipulation
{
    public function __construct(
        private EntityManagerInterface $em,
        private CurrencyRepository $currencyRepository,
        private ExchangeRateRepository $exchangeRateRepository,
        private SourceRepository $sourceRepository
    ) {

    }

    public function upsert(ExchangeRateDto $exchangeRateDto): bool
    {
        //TODO
    }
}
