<?php declare(strict_types=1);

namespace App\DataProvider\Api;

use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class BaseApi
{
    protected HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
}