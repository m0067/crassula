<?php declare(strict_types=1);

namespace App\Entity;

use App\Repository\ExchangeRateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExchangeRateRepository::class)
 */
class ExchangeRate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\ManyToOne(targetEntity=Currency::class)
     */
    private Currency $mainCurrency;

    /**
     * @ORM\ManyToOne(targetEntity=Currency::class)
     */
    private Currency $convertToCurrency;

    /**
     * @ORM\ManyToOne(targetEntity=Source::class)
     */
    private Source $source;

    /**
     * @ORM\Column(type="integer")
     */
    private int $nominal;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=4, nullable=true)
     */
    private ?string $value;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=4, nullable=true)
     */
    private ?string $rate;
}
