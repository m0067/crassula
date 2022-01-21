<?php declare(strict_types=1);

namespace App\Dto;

use JsonSerializable;

class ExchangeRateDto extends AbstractDto implements JsonSerializable
{
    public string $charCode;
    public int $nominal = 1;
    public ?string $name;
    public ?string $value;
    public ?string $rate;

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
